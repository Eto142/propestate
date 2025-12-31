<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Kyc;
use App\Models\Plan;
use App\Models\User;
use App\Models\Profit;
use GuzzleHttp\Client;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\Traders;
use App\Models\Refferal;
use App\Mail\supportEmail;
use App\Models\Investment;
use App\Models\Withdrawal;
use App\Models\Debitprofit;
use App\Models\verifyToken;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use App\Mail\welcomeEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{




    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
      
                    
                
 $data['activeInvestments'] = Deposit::where('user_id', Auth::user()->id) ->where('status', 1)->orderBy('id', 'desc')->get();
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];
                


                    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                    // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
                    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['deposits'] = Deposit::where('status', 1)->get();
              
                   
                    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
                    return view('dashboard.home', $data);
                


            } else {
                $result    = DB::table('users')->where('usertype', '0')->get();
                
                 $result    = DB::table('users')->where('usertype', '0')->get();
                 $totalUsers = $result->count();

    // User IDs
    $userIds = $result->pluck('id');

    // Total deposits (ALL users)
    $totalDeposits = DB::table('deposits')
        ->whereIn('user_id', $userIds)
        ->sum('amount');

    // Total withdrawals (ALL users)
    $totalWithdrawals = DB::table('withdrawals')
        ->whereIn('user_id', $userIds)
        ->sum('amount');

    return view('manager.home', compact(
        'result',
        'totalUsers',
        'totalDeposits',
        'totalWithdrawals'
    ));


                
            }
        } else {
            return redirect()->back();
        }
    }





    public function dashboard()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {


                    $client = new Client();
                    $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
                    $data = json_decode($response->getBody(), true);
                    $price = $data['bpi']['USD']['rate_float'];

                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];
                    $data['btc_balance'] = $data['user_balance'] / $price;


                    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                    // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
                    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
                    return view('dashboard.home', $data);
                
            } else {
                $result    = DB::table('users')->where('usertype', '0')->get();
                 $totalUsers = $result->count();

    // User IDs
    $userIds = $result->pluck('id');

    // Total deposits (ALL users)
    $totalDeposits = DB::table('deposits')
        ->whereIn('user_id', $userIds)
        ->sum('amount');

    // Total withdrawals (ALL users)
    $totalWithdrawals = DB::table('withdrawals')
        ->whereIn('user_id', $userIds)
        ->sum('amount');

    return view('manager.home', compact(
        'result',
        'totalUsers',
        'totalDeposits',
        'totalWithdrawals'
    ));

            }
        } else {
            return redirect()->back();
        }
    }
    public function userDeposit()
    {
        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['payment'] = DB::table('users')->where('id', '4')->get();
        return view('dashboard.deposit', $data);
    }


    public function Forex()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.forex', $data);
    }

    public function Binary()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.binary', $data);
    }

    public function Stocks()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

        return view('dashboard.stocks', $data);
    }


    public function info(Request $request)
    {
        $data = $request->all();
    
        // Determine the image path based on the submitted form data
        if (isset($data['make2102460'])) {
            $data['image_path'] = 'assets/images/invest/pool_2_1.jpg'; // Example path for 'make2102460'
        } elseif (isset($data['make2104825'])) {
            $data['image_path'] = 'assets/images/invest/front_elevation_perspective.jpg'; // Example path for 'make2104825'
        }elseif (isset($data['make2104823'])) {
            $data['image_path'] = '../assets/images/invest/pool.png'; // Example path for 'make2104823'
        } elseif (isset($data['make2043732'])) {
        $data['image_path'] = 'assets/images/invest/mission_matthews_place-22-0214-28.jpg'; // Example path for 'make2043732'
       } elseif (isset($data['make2148421'])) {
        $data['image_path'] = 'assets/images/invest/exterior_9.jpg'; // Example path for 'make2148421'
       }
       elseif (isset($data['make2148420'])) {
        $data['image_path'] = 'assets/images/invest/201029_birds_eye_post.jpg'; // Example path for 'make2148420'
       }
       
         elseif (isset($data['make214234'])) {
        $data['image_path'] = 'assets/images/invest/medium.webp'; // Example path for 'make214234'
       }
       
              elseif (isset($data['make214334'])) {
        $data['image_path'] = 'assets/images/invest/big.webp'; // Example path for 'make214334'
       }
       
       
       
       else {
            $data['image_path'] = 'assets/images/invest/default_image.jpg'; // Default image path if needed
        }
    
        return view('dashboard.info', compact('data'));
    }
    




    public function Start()
    {

        return view('dashboard.start');
    }

    public function UpdateStart(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'string', 
            'investment_type' => 'string',
            'image_investment_type' => 'string',
            'lname' => 'string',
            'phone' => 'string',
            'address' => 'string',
             'city' => 'string',
             'zip' => 'string'
        ]);
        $user = Auth::user();
        $user->investment_type = $request['investment_type']; 
        $user->image_investment_type = $request['image_investment_type'];
        $user->name = $request['name'];
        $user->lname = $request['lname'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->city = $request['city'];
        $user->pcode = $request['pcode'];

        $user->update();
        return view('dashboard.ownership');
    }

    
    public function Ownership()
    {
        
        return view('dashboard.ownership');
    }


    public function UpdateOwnership(Request $request)
    {
        //validation rules

        $request->validate([
            'ownership-type' => 'string',
            
        ]);
        $user = Auth::user();
        $user->ownershiptype = $request['ownership-type'];
    

        $user->update();
        return view('dashboard.amount');
    }




    public function UserPayment()
    {


        return view('dashboard.payment');
    }

    public function Amount()
    {

        
        return view('dashboard.amount');
    }
    
      public function investmentAgreement()
    {

        
        return view('dashboard.investment-agreement');
    }

    public function ActiveInvestments()
    {
        $data['activeInvestments'] = Deposit::where('user_id', Auth::user()->id) ->where('status', 1)->orderBy('id', 'desc')->get();
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
    


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['deposits'] = Deposit::where('status', 1)->get();
  
        // $data['deposits'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];

        return view('dashboard.active-investments', $data);
    }

    public function CompletedInvestments()
    {
        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
    


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['deposits'] = Deposit::where('status', 1)->get();
  
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];


        return view('dashboard.completed-investments', $data);
    }

    public function PendingInvestments()
    {
        $data['pendingInvestments'] = Deposit::where('user_id', Auth::user()->id) ->where('status', 0)->orderBy('id', 'desc')->get();
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
    


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['deposits'] = Deposit::where('status', 1)->get();
  
        // $data['deposits'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
  
        return view('dashboard.pending-investments', $data);

    }

    public function Transaction()
    {
        $data ['transactions'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')  ->get();
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['earning'] =  Earning::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('dashboard.transaction', $data);
       
    }





    public function Qualification(Request $request)
    {
        //validation rules

        $request->validate([
            'investment_reason' => 'string',
            
        ]);
        $user = Auth::user();
        $user->investment_reason = $request['investment_reason'];
    

        $user->update();
        $data['total_deposit_amount'] = Deposit::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->value('amount');
        return view('dashboard.qualification1', $data);
    }


public function Qualification1(Request $request)
    {
        //validation rules

        $request->validate([
            'radio_period' => 'string',
            
        ]);
        $user = Auth::user();
        $user-> radio_period = $request['radio_period'];
    

        $user->update();
        $data['total_deposit_amount'] = Deposit::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->value('amount');
        return view('dashboard.qualification2', $data);
    }


    public function Qualification2(Request $request)
    {
        //validation rules

        $request->validate([
            'risk_question' => 'string',
            
        ]);
        $user = Auth::user();
        $user-> risk_question = $request['risk_question'];
    

        $user->update();
        $data['total_deposit_amount'] = Deposit::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->value('amount');
        return view('dashboard.qualification3', $data);
    }



    
    public function Qualification3(Request $request)
    {
        //validation rules

        $request->validate([
            'annual_income' => 'string',
            
        ]);
        $user = Auth::user();
        $user-> annual_income = $request['annual_income'];
    

        $user->update();
        $data['total_deposit_amount'] = Deposit::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->value('amount');
        return view('dashboard.signature', $data);
    }


    public function Signature(Request $request)
    {
        //validation rules

        $request->validate([
             
           'authority_agreement' => 'string',
           'citizen_resident' => 'string',
           'knowlege_experience' => 'string',
           'repesent_truth' => 'string',
        
        ]);
        $user = Auth::user();
        $user-> authority_agreement = $request['authority_agreement'];
        $user-> citizen_resident = $request['citizen_resident'];
        $user-> knowlege_experience = $request['knowlege_experience'];
        $user-> repesent_truth = $request['repesent_truth'];
    

        $user->update();

        $data['payment'] = DB::table('users')->where('id', '4')->get();
        $data['total_deposit_amount'] = Deposit::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->value('amount');
        $data['payment'] = DB::table('users')->where('id', '4')->get();
        return view('dashboard.payment', $data);
    }



    public function Payment(Request $request){ 

        return view('dashboard.order');
    }


    
    

    public function makeuserDeposit(Request $request)
     {

        $transaction_id = rand(76503737, 12344994);
    
        // Create a new deposit object
        $deposit = new Deposit;
        $deposit->transaction_id = $transaction_id;
        $deposit->user_id = Auth::user()->id;
        $deposit->amount = $request['amount'];
        $deposit->investment_type = $request['investment_type'];
        $deposit->radio_period = $request['radio_period'];
        $deposit->payment_method = $request['payment_method'];

        $deposit->save();
    
        // Create a new transaction object to log the deposit transaction
        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Credit";
        $transaction->transaction = "credit";
        $transaction->credit =  $request['amount'];
        $transaction->radio_period =  $request['radio_period'];
        $transaction->payment_method =  $request['payment_method'];
        $transaction->investment_type =  $request['investment_type'];
        $transaction->debit = "0";
        $transaction->status = 0;
        $transaction->save();
    
        // Prepare data to pass to the view
        $dataForView = [
            'deposit' => $deposit,
            'btcAmount' => $deposit->btc_amount,
            'ethAmount' => $deposit->eth_amount,
         'total_deposit_amount' => $deposit->amount,
        ];
    
        return view('dashboard.qualification', $dataForView);
    }











    public function Crypto()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.crypto', $data);
    }
    public function Wallet()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];


        $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
            'query' => [
                'ids' => 'ethereum',
                'vs_currencies' => 'usd',
            ],
        ]);
        // Decode the JSON response
        $data2 = json_decode($response2->getBody(), true);
        $price2 = $data2['ethereum']['usd'];








        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['eth_balance'] = $data['user_balance'] / $price2;

        return view('dashboard.wallet', $data);
    }

    // public function Copy()
    // {
    //     $client = new Client();
    //     $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
    //     $data = json_decode($response->getBody(), true);
    //     $price = $data['bpi']['USD']['rate_float'];

    //     $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
    //     $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
    //     $data['user_balance'] =  $data['credit'] - $data['debit'];
    //     $data['btc_balance'] = $data['user_balance'] / $price;
    //     $data['traders']  = Traders::get();
    //     return view('dashboard.copy', $data);
    // }






public function Copy()
{
    $client = new Client();
    $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
    $data = json_decode($response->getBody(), true);
    $price = $data['bpi']['USD']['rate_float'];

    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
    $data['user_balance'] =  $data['credit'] - $data['debit'];
    $data['btc_balance'] = $data['user_balance'] / $price;
    $data['traders']  = Traders::get();
    
    // Check if user_balance is 0
    if ($data['user_balance'] == 0) {
        // If user_balance is 0, redirect with an error message
        return redirect()->back()->with('error', 'Your balance is 0. Fund Account to Copy Trader.');
    }

    return view('dashboard.copy', $data);
}










    public function Crypto_buy()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.crypto_buy', $data);
    }

    public function Bot()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.bot', $data);
    }

    public function Profile()
    {

        

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
    
        return view('dashboard.profile', $data);
    }

    public function Photo()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.photo', $data);
    }

    public function supportTicket()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.support', $data);
    }

    public function Bonus()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.bonus', $data);
    }






    public function accounthistory()
    {

      

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['earning'] =  Earning::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('dashboard.accounthistory', $data);
    }


    public function tradingHistory()
    {

        // $data['profit'] =  Earning::where('user_id',Auth::user()->id)->where('type', 'ROI')->orderBy('id','desc')->get();

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.tradinghistory', $data);
    }
    public function Earning()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

        return view('dashboard.earnings', $data);
    }
    public function buyplan()
    {

        return view('dashboard.buy-plan');
    }

    public function  investmentHistory()
    {


        // $data['investment'] =  Investment::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('dashboard.investmentHistory');
    }


    public function referUser()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.referuser', $data);
    }

    public function Settings()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.settings', $data);
    }


    public function accountSettings()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.account-settings', $data);
    }
    public function verifyAccount()
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['kycStatus'] = Kyc::where('user_id', Auth::user()->id)->get();
        $data['kyc'] = Kyc::where('user_id', Auth::user()->id)->get();
        return view('dashboard.verify-account', $data)->with('status', 'Documents updated successfully, please wait for approval');
    }


    public function withdrawals()
    {

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
    


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['deposits'] = Deposit::where('status', 1)->get();
        $data['withdrawals'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        // $data['deposits'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];


        return view('dashboard.withdrawals', $data);
    }
    public function withdrawFunds()
    {

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];

        return view('dashboard.withdraw-funds', $data);
    }
    public function registerPage()
    {

        return view('user.register');
    }
    public function loginPage()
    {

        return view('user.login');
    }

    public function getDeposit(Request $request)
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];


        $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
            'query' => [
                'ids' => 'ethereum',
                'vs_currencies' => 'usd',
            ],
        ]);
        // Decode the JSON response
        $data2 = json_decode($response2->getBody(), true);
        $price2 = $data2['ethereum']['usd'];


        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $amount = $request->input('amount');
        $data['amount'] = $amount;
        $data['btc_amount'] = $data['amount']  / $price;
        $data['eth_amount'] = $data['amount']  / $price2;
        $item = $request->input('item');
        $data['item'] = $item;
        $data['payment'] = DB::table('users')->where('id', '4')->get();

        if ($item == 'Bank') {
            return view('dashboard.bank', $data);
        } else {
            return view('dashboard.payment', $data);
        }
    }

















  public function getUserWithdrawal(Request $request)
    {

        $client = new Client();
        $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $data = json_decode($response->getBody(), true);
        $price = $data['bpi']['USD']['rate_float'];


        $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
            'query' => [
                'ids' => 'ethereum',
                'vs_currencies' => 'usd',
            ],
        ]);
        // Decode the JSON response
        $data2 = json_decode($response2->getBody(), true);
        $price2 = $data2['ethereum']['usd'];


        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $amount = $request->input('amount');
        $data['amount'] = $amount;
        $data['btc_amount'] = $data['amount']  / $price;
        $data['eth_amount'] = $data['amount']  / $price2;
        $item = $request->input('item');
        $data['item'] = $item;
     

        if ($item == 'Bank') {
            return view('dashboard.withdraw-bank', $data);
        } else {
            return view('dashboard.withdraw-btc', $data);
        }
    }
















    // public function makeDeposit(Request $request)
    // {

    //       $client = new Client();
    //     $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
    //     $data = json_decode($response->getBody(), true);
    //     $price = $data['bpi']['USD']['rate_float'];


    //     $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
    //         'query' => [
    //             'ids' => 'ethereum',
    //             'vs_currencies' => 'usd',
    //         ],
    //     ]);
    //     // Decode the JSON response
    //     $data2 = json_decode($response2->getBody(), true);
    //     $price2 = $data2['ethereum']['usd'];
    //     $transaction_id = rand(76503737, 12344994);
    //     $deposit = new Deposit;
    //     $deposit->transaction_id = $transaction_id;
    //     $deposit->user_id = Auth::user()->id;
    //     $deposit->amount = $request['amount'];
        
    //      $data['amount'] = $amount;
    //     $data['btc_amount'] = $data['amount']  / $price;
    //     $data['eth_amount'] = $data['amount']  / $price2;
    //     $deposit->payment_method = $request['paymethd_method'];
    //      if($request->hasFile('image')){
    //         $file= $request->file('image');
    
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$ext;
    //         $file->move('uploads/deposits',$filename);
    //         $deposit->image =  $filename;
    //       }

    //     $deposit->save();


    //     $transaction = new Transaction;
    //     $transaction->user_id = Auth::user()->id;
    //     $transaction->transaction_id = $transaction_id;
    //     $transaction->transaction_type = "Credit";
    //     $transaction->transaction = "credit";
    //     $transaction->credit =  $request['amount'];
    //     $transaction->debit = "0";
    //     $transaction->status = 0;
    //     $transaction->save();

    //   return view('dashboard.deposit-success', $deposit);
    //     // return redirect('deposit')->with('status', 'Deposits will be pending until there are sufficent confirmations on the blockchain!');
    // }






//   public function makeDeposit(Request $request)
//      {
// $client = new Client();

// // Fetch Bitcoin (BTC) price in USD
// $responseBTC = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
// $dataBTC = json_decode($responseBTC->getBody(), true);
// $priceBTC = $dataBTC['bpi']['USD']['rate_float'];

// // Fetch Ethereum (ETH) price in USD
// $responseETH = $client->get('https://api.coingecko.com/api/v3/simple/price', [
//     'query' => [
//         'ids' => 'ethereum',
//         'vs_currencies' => 'usd',
//     ],
// ]);
// $dataETH = json_decode($responseETH->getBody(), true);
// $priceETH = $dataETH['ethereum']['usd'];

// $transaction_id = rand(76503737, 12344994);

// // Create a new deposit object
// $deposit = new Deposit;
// $deposit->transaction_id = $transaction_id;
// $deposit->user_id = Auth::user()->id;
// $deposit->amount = $request['amount'];
//  $item = $request->input('item');
// // Calculate BTC and ETH amounts
// $deposit->btc_amount = $deposit->amount / $priceBTC;
// $deposit->eth_amount = $deposit->amount / $priceETH;

// $deposit->payment_method = $request['payment_method'];

// if($request->hasFile('image')){
//     $file= $request->file('image');

//     $ext = $file->getClientOriginalExtension();
//     $filename = time().'.'.$ext;
//     $file->move('uploads/deposits',$filename);
//     $deposit->image =  $filename;
// }

// $deposit->save();

// // Create a new transaction object to log the deposit transaction
// $transaction = new Transaction;
// $transaction->user_id = Auth::user()->id;
// $transaction->transaction_id = $transaction_id;
// $transaction->transaction_type = "Credit";
// $transaction->transaction = "credit";
// $transaction->credit =  $request['amount'];
// $transaction->debit = "0";
// $transaction->status = 0;
// $transaction->save();

// // Prepare data to pass to the view
// $dataForView = [
//     'deposit' => $deposit,
//     'item' => $item,
//     'btcAmount' => $deposit->btc_amount,
//     'ethAmount' => $deposit->eth_amount
// ];

// return view('dashboard.deposit-success', $dataForView);
// }






public function makeDeposit(Request $request)
{
    $client = new Client();

    // Fetch Bitcoin (BTC) price in USD
    $responseBTC = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
    $dataBTC = json_decode($responseBTC->getBody(), true);
    $priceBTC = $dataBTC['bpi']['USD']['rate_float'];

    // Fetch Ethereum (ETH) price in USD
    $responseETH = $client->get('https://api.coingecko.com/api/v3/simple/price', [
        'query' => [
            'ids' => 'ethereum',
            'vs_currencies' => 'usd',
        ],
    ]);
    $dataETH = json_decode($responseETH->getBody(), true);
    $priceETH = $dataETH['ethereum']['usd'];

    $transaction_id = rand(76503737, 12344994);

    // Create a new deposit object
    $deposit = new Deposit;
    $deposit->transaction_id = $transaction_id;
    $deposit->user_id = Auth::user()->id;
    $deposit->amount = $request['amount'];

    // Calculate BTC and ETH amounts
    $deposit->btc_amount = $deposit->amount / $priceBTC;
    $deposit->eth_amount = $deposit->amount / $priceETH;

    $deposit->payment_method = $request['payment_method'];

    if($request->hasFile('image')){
        $file= $request->file('image');

        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/deposits',$filename);
        $deposit->image =  $filename;
    }

    $deposit->save();

    // Create a new transaction object to log the deposit transaction
    $transaction = new Transaction;
    $transaction->user_id = Auth::user()->id;
    $transaction->transaction_id = $transaction_id;
    $transaction->transaction_type = "Credit";
    $transaction->transaction = "credit";
    $transaction->credit =  $request['amount'];
    $transaction->debit = "0";
    $transaction->status = 0;
    $transaction->save();

    // Prepare data to pass to the view
    $dataForView = [
        'deposit' => $deposit,
        'payment_method' => $deposit->payment_method,
        'btcAmount' => $deposit->btc_amount,
        'ethAmount' => $deposit->eth_amount
    ];

    return view('dashboard.deposit-success', $dataForView);
}















   




    public function getWithdrawal(Request $request)
    {

        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['investment'] = Investment::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['investment'] - $data['plan'];
        
        
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];

        $plan_amount = $request->input('amount');

        if ($data['user_balance'] <= '0') {
            return back()->with('status', 'Your Balance Is Insufficient');
        }

        if ($data['user_balance'] <= $plan_amount) {
            return back()->with('status', 'Your Balance Is Insufficient');
        }
        $method = $request->input('method');
        $data['method'] = $method;

        if ($method == 'Bank') {
            return view('dashboard.withdraw-bank', $data);
        } else {
            return view('dashboard.withdraw-funds', $data);
        }
    }


    


    public function uploadProfile(Request $request)

    {


        $update = Auth::user();
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('user/uploads/id', $filename);
            $update->photo =  $filename;
        }

        $update->update();

        return redirect('profile')->with('status', 'Profile Picture Updated!');
    }









public function ConfirmPassword(Request $request)
{
    // Validate the request data
    $request->validate([
        'cpassword' => 'required',
    ]);

    // Check if the provided password matches the authenticated user's password
    if (Hash::check($request->cpassword, auth()->user()->password)) {
        // Password is correct, redirect to the withdrawal page
        return redirect()->route('withdrawal')->with('status', 'Withdrawal in Progress!');
    } else {
        // Password doesn't match, redirect back with an error message
        return back()->with("error", "Password doesn't match!");
    }
}







public function make214334(Request $request)
{
    
    $data = $request->input('make214334');

    $data['data'] =  $request->all();
    $formData =  $request->all();
    $request->session()->put('data', $formData);   
    
    return view('dashboard.info',$data);

}


public function make214234(Request $request)
{
    
    $data = $request->input('make214234');

    $data['data'] =  $request->all();
    $formData =  $request->all();
    $request->session()->put('data', $formData);   
    
    return view('dashboard.info',$data);

}






public function make2104825(Request $request)
{
    
    $data = $request->input('make2104825');

    $data['data'] =  $request->all();
    $formData =  $request->all();
    $request->session()->put('data', $formData);   
    
    return view('dashboard.info',$data);

}


public function make2104823(Request $request)
{
    
    $data = $request->input('make2104823');

    $data['data'] =  $request->all();
    $formData =  $request->all();
    $request->session()->put('data', $formData);   
    
    return view('dashboard.info',$data);

}


public function make2102460(Request $request)
{
    
    $data = $request->input('make2102460');

    $data['data'] =  $request->all();
    $formData =  $request->all();
    $request->session()->put('data', $formData);   
    
    return view('dashboard.info',$data);

}










    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }



    public function profileUpdate(Request $request)
    {
        //validation rules

       
        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'lname' => 'string',
            'phone' => 'string',
            'address' => 'string',
            'city' => 'string',
            'pcode' => 'string'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->lname = $request['lname'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->city = $request['city'];
        $user->pcode = $request['pcode'];

        $user->update();
    
        return back()->with('status', 'Profile Updated');
    }

    public function bankUpdate(Request $request)
    {
        //validation rules

        // $request->validate([
        //     'name' =>'string',
        //     'phone' =>'string'
        // ]);
        $user = Auth::user();
        $user->bankName = $request['bank_name'];
        $user->accountName = $request['account_name'];
        $user->accountNumber = $request['account_no'];
        $user->swiftCode = $request['swiftcode'];
        $user->bitcoinAddress = $request['btc_address'];
        $user->ethereumAddress = $request['eth_address'];
        $user->litecoinAddress = $request['ltc_address'];


        $user->save();
        return back()->with('status', 'Withdrawal Details Updated');
    }

    public function supportEmail(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('blueswayne133@gmail.com')->send(new supportEmail($data));

        return back()->with('status', 'Email Successfully sent');
    }


    


public function makeWithdrawal(Request $request)
{
    
    $method = $request->input('mode');
    $method = $request->input('item');
    $data['method'] = $method;
    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
    $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
    
    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
    $data['user_balance'] =  $data['credit'] - $data['debit'];

 

    if ($data['user_balance'] <= '0') {
        return back()->with('status', 'Insufficient Balance');
    }



    $data['data'] =  $request->all();
    $formData =  $request->all();
    $request->session()->put('data', $formData);   
    
    return view('dashboard.fetch_data',$data);

}
//     return redirect('withdrawal')->with('status', 'Withdrawal In Progress, Please wait for approval');
// }




public function awaitData(Request $request) 
{
 $data['data'] = $request->session()->get('data');
 return view('dashboard.await_data',$data);
}

public function commisionCode(Request $request) 
{
 $data['data'] = $request->session()->get('data');
 return view('dashboard.withdrawal-commision-code',$data);
}

public function queryData(Request $request) 
{
 $data['data'] = $request->session()->get('data');
 return view('dashboard.query_data',$data);
}

public function checkCommisionCode(Request $request) 
{  
  $commission_code = $request->input('commission_code');
 if ($commission_code != Auth::user()->commission_code) {
     return back()->with('status', 'Incorrect commission code');
 }

 $data['data'] = $request->session()->get('data');
 return view('dashboard.spoofing_connection',$data);
}


public function taxCode(Request $request) 
{
 $data['data'] = $request->session()->get('data');
 return view('dashboard.withdrawal-tax-code',$data);
}

public function checkTaxCode(Request $request) 
{  
 
    $tax_code = $request->input('tax_code');
    if ($tax_code != Auth::user()->tax_code) {
        return back()->with('status', 'Incorrect tax code');
    }
    
 $transaction_id = rand(76503737, 12344994);
 $with = new Withdrawal;
 $with->transaction_id = $transaction_id;
 $with->user_id = Auth::user()->id;
 $with->amount = $request['amount'];
 $with->status = 0;
 $with->mode = $request['mode'];
 $with->account_name = $request['account_name'];
 $with->account_number = $request['account_number'];
 $with->bank_name = $request['bank_name'];
 $with->bank_routing_number = $request['bank_routing_number'];
 $with->swift = $request['swift'];
 $with->bank_country = $request['bank_country'];
 $with->crypto_type = $request['crypto_type'];
 $with->wallet_address = $request['wallet_address'];
 // $method = $request->input('method');
 // $data['method']=$method;
 $with->save();


 $transaction = new Transaction;
 $transaction->user_id = Auth::user()->id;
 $transaction->transaction_id = $transaction_id;
 $transaction->transaction_type = "Debit";
 $transaction->transaction = "debit";
 $transaction->credit = "0";
 $transaction->debit = $request['amount'];
 $transaction->status = 0;
 $transaction->save();

 $data['data'] = $request->session()->get('data');
 return view('dashboard.transfer_completed',$data);
}










    public function Trading(Request $request)
    {
        $method = $request['buy'];
        $method = $request['sell'];

        return redirect('asset-balance')->with('status', 'You have placed a sell order you will be notified when your trade hit take profit or stop loss');
        // if($method==='buy'){
        //     return redirect('asset-balance')->with('status', 'You have placed a sell order you will be notified when your trade hit take profit or stop loss'); 
        // }
        // elseif($method==='sell'){
        //     return redirect('withdrawals')->with('status', 'You have placed a sell order you will be notified when your trade hit take profit or stop loss');  
        // }


    }






    public function perform()
    {
        Session::flush();
        Auth::guard('web')->logout();
        return redirect('/');
    }





    public function Step2(Request $request)
    {

        $request->validate([
            'country' => 'string',
            'state' => 'string',
            'pcode' => 'string',
            'address' => 'string',
            'phone' => 'string'

        ]);

        $user = Auth::user();
        $user->country = $request['country'];
        $user->state = $request['state'];
        $user->pcode = $request['pcode'];
        $user->address = $request['address'];
        $user->phone = $request['phone'];


        $user->update();

        return view('dashboard.step3');
    }

    public function Step3(Request $request)

    {
        // $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        // $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        // $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        // $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        // $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        // $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        // $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        // $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];

         $data['activeInvestments'] = Deposit::where('user_id', Auth::user()->id) ->where('status', 1)->orderBy('id', 'desc')->get();
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];
                


                    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                    // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
                    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['deposits'] = Deposit::where('status', 1)->get();


        $request->validate([

            'pin' => 'string',


        ]);

        $user = Auth::user();

        $user->pin = $request['pin'];


        $user->update();

        return view('dashboard.home', $data);
    }

    public function resendCode($id)
    {

        $userData = User::where('id', $id)->first();
        $email = $userData->email;

        $validToken = rand(7650, 1234);
        $get_token = Auth::user();
        $get_token->token = $validToken;
        $get_token->update();



        Mail::to($email)->send(new VerificationEmail($validToken));


        return redirect("verify/" . $userData->id)->with('message', 'verification code has been resent to your email');
    }

    public function nextDetails()
    {
     

        return view('dashboard.step2');
    }


    public function verify($id)
    {
        $user = User::where('id', $id)->first();
        $data['email'] = $user->email;
        $data['hash'] = $user->password;
        $data['id'] = $user->id;

        return view('dashboard.step3', $data);
    }


    public function emailVerify(Request $request)
    {
        $first_token = $request->input('digit');
        $second_token = $request->input('digit2');
        $third_token = $request->input('digit3');
        $fourth_token = $request->input('digit4');
        $get_token =  $first_token;
        $verify_token = User::where('token', $get_token)->first();
        
        if ($verify_token) {
            $user = User::where('email', $verify_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            $user_email =  $user->email;
            $user_password =  $user->password;

            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'password' => '*********',

            ];
            
        Mail::to($user_email)->send(new welcomeEmail($data));
        
                    
                
         $data['activeInvestments'] = Deposit::where('user_id', Auth::user()->id) ->where('status', 1)->orderBy('id', 'desc')->get();
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
    


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['deposits'] = Deposit::where('status', 1)->get();
  
       
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        return view('dashboard.home', $data);
        
        } else {
            return redirect("verify/" . Auth::user()->id)->with('error', 'Incorrect Activation Code!');
        }
    }
}
