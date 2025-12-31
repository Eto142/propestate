<?php
use App\Http\Controllers\Admin\SendEmailController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\controllers\HomeController;
use App\Http\controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/privacy-policy', function () {
    return view('home.privacy-policy');
});

Route::get('/investment-disclosure', function () {
    return view('home.investment-disclosure');
});



Route::get('/career', function () {
    return view('home.career');
});

Route::get('/faq', function () {
    return view('home.faq');
});

Route::get('/investment', function () {
    return view('home.investment-opportunities');
});

Route::get('/rm-communities', function () {
    return view('home.rm-communities');
});

Route::get('/income-reit', function () {
    return view('home.income-reit');
});

Route::get('/investment1', function () {
    return view('home.investment1');
});

Route::get('/investment2', function () {
    return view('home.investment2');
});

Route::get('/investment3', function () {
    return view('home.investment3');
});

Route::get('/investment4', function () {
    return view('home.investment4');
});

Route::get('/financings', function () {
    return view('home.financing');
});

Route::get('/apply', function () {
    return view('home.apply');
});

Route::get('/growth-reit', function () {
    return view('home.growth-reit');
});

Route::get('/benefit-of-investing', function () {
    return view('home.benefit-investment');
});

Route::get('/how-it-works', function () {
    return view('home.how-it-works');
});

Route::get('/auto-invest', function () {
    return view('home.auto-invest');
});

Route::get('/why-reit', function () {
    return view('home.why-reit');
});

Route::get('/retirement', function () {
    return view('home.retirement');
});

Route::get('/why-commercial', function () {
    return view('home.why-commercial');
});

Route::get('/careers', function () {
    return view('home.careers');
});  

Route::get('/214234', function () {
    return view('home.214234');
});

Route::get('/214334', function () {
    return view('home.214334');
});


Route::get('/2104825', function () {
    return view('home.2104825');
}); 

Route::get('/2102460', function () {
    return view('home.2102460');
});

Route::get('/2104823', function () {
    return view('home.2104823');
});

Route::get('/2043732', function () {
    return view('home.2043732');
});

Route::get('/2148421', function () {
    return view('home.2148421');
});

Route::get('/2148420', function () {
    return view('home.2148420');
});

Route::get('/the-apartment-growth-reit', function () {
    return view('home.the-apartment-growth-reit');
});

Route::get('/the-income-reit', function () {
    return view('home.the-income-reit');
});







Route::get('/track-record', function () {
    return view('home.track-record');
});

Route::get('/past-investments', function () {
    return view('home.past-investments');
});

Route::get('/due-diligence-process', function () {
    return view('home.due-diligence-process');
});

Route::get('/investment-option', function () {
    return view('home.investment-options');
});


Route::get('/commercial-real-estates', function () {
    return view('home.commercial-real-estate');
});

Route::get('/knowledge-centers', function () {
    return view('home.knowledge-center');
});








Route::get('/deposit-withdrawal', function () {
    return view('home.deposit-withdrawal');
});



 Route::get('/payment', function () {
     return view('home.payment');
 });
 
  Route::get('/kyc-policy', function () {
     return view('home.kyc-policy');
 });



Route::get('/faq', function () {
    return view('home.faq');
});

Route::get('/insights', function () {
    return view('home.insights');
});

Route::get('/process', function () {
    return view('home.process');
});

Route::get('/privacy', function () {
    return view('home.privacy');
});

Route::get('/terms', function () {
    return view('home.terms');
});

Route::get('/refund', function () {
    return view('home.refund');
});

Route::get('/forex', function () {
    return view('home.forex');
});

Route::get('/our-story', function () {
    return view('home.our-story');
});




Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.form');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.submit');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.submit');





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'App\Http\Controllers\UserController@redirect')->middleware('verifyUser')->name('home');
// Route::get('/home', 'App\Http\Controllers\UserController@redirect')->name('home');
Route::get('/dashboard', 'App\Http\Controllers\UserController@dashboard');
Route::get('/deposit', 'App\Http\Controllers\UserController@userDeposit');
Route::get('/forex', 'App\Http\Controllers\UserController@Forex');
Route::get('/info', 'App\Http\Controllers\UserController@Info')->name('info');
Route::get('/start', 'App\Http\Controllers\UserController@Start')->name('start');
Route::get('/transactions', 'App\Http\Controllers\UserController@Transaction')->name('transaction');
Route::get('/pending-investments', 'App\Http\Controllers\UserController@PendingInvestments')->name('pending-investments');
Route::get('/investment-agreement', 'App\Http\Controllers\UserController@InvestmentAgreement')->name('investment-agreement');
Route::get('/completed-investments', 'App\Http\Controllers\UserController@CompletedInvestments')->name('completed-investments');
Route::get('/active-investments', 'App\Http\Controllers\UserController@ActiveInvestments')->name('active-investments');
Route::post('/get-start', 'App\Http\Controllers\UserController@Getstart');
Route::post('/update-start', 'App\Http\Controllers\UserController@Updatestart')->name('update.start');
Route::post('/qualification', 'App\Http\Controllers\UserController@Qualification')->name('qualification');
Route::post('/qualification1', 'App\Http\Controllers\UserController@Qualification1')->name('qualification1');
Route::post('/qualification2', 'App\Http\Controllers\UserController@Qualification2')->name('qualification2');
Route::post('/qualification3', 'App\Http\Controllers\UserController@Qualification3')->name('qualification3');
Route::post('/signature', 'App\Http\Controllers\UserController@Signature')->name('signature');
Route::post('/payment', 'App\Http\Controllers\UserController@Payment')->name('payment');
Route::post('/update-ownership', 'App\Http\Controllers\UserController@UpdateOwnership')->name('update.ownership');
Route::get('/ownership', 'App\Http\Controllers\UserController@Ownership')->name('ownership');
Route::get('/amount', 'App\Http\Controllers\UserController@Amount')->name('amount');
Route::post('/makeuser-deposit', 'App\Http\Controllers\UserController@makeuserDeposit')->name('makeuser.deposit');
Route::get('/userpayment', 'App\Http\Controllers\UserController@Userpayment')->name('userpayment');
Route::get('/stocks', 'App\Http\Controllers\UserController@Stocks');
Route::get('/wallet', 'App\Http\Controllers\UserController@Wallet');
Route::get('/crypto', 'App\Http\Controllers\UserController@Crypto');
Route::get('/binary', 'App\Http\Controllers\UserController@Binary');
Route::get('/bot', 'App\Http\Controllers\UserController@Bot');
Route::get('/copy', 'App\Http\Controllers\UserController@Copy');
Route::get('/profile', 'App\Http\Controllers\UserController@Profile');
Route::get('/photo', 'App\Http\Controllers\UserController@Photo');


Route::post('/upload_picture', 'App\Http\Controllers\UserController@uploadProfile')->name('upload_picture');
Route::get('/crypto_buy', 'App\Http\Controllers\UserController@Crypto_buy');
Route::post('/get-deposit', 'App\Http\Controllers\UserController@getDeposit');
Route::post('/get-withdrawal', 'App\Http\Controllers\UserController@getUserWithdrawal');
Route::post('/make-deposit', 'App\Http\Controllers\UserController@makeDeposit');
Route::get('/support', 'App\Http\Controllers\UserController@supportTicket');
Route::get('/accounthistory', 'App\Http\Controllers\UserController@accounthistory');
Route::get('/earnings', 'App\Http\Controllers\UserController@Earning');
Route::get('/buy-plan', 'App\Http\Controllers\UserController@buyplan');
Route::get('/bonus', 'App\Http\Controllers\UserController@Bonus');
Route::get('/account-settings', 'App\Http\Controllers\UserController@accountSettings');
Route::get('/myplans', 'App\Http\Controllers\UserController@myplans');
Route::get('/settings', 'App\Http\Controllers\UserController@Settings');
Route::get('/tradinghistory', 'App\Http\Controllers\UserController@tradingHistory');
Route::get('/referuser', 'App\Http\Controllers\UserController@referUser');
Route::get('/verify-account', 'App\Http\Controllers\UserController@verifyAccount');
Route::get('/upload-kyc', 'App\Http\Controllers\UserController@uploadKyc');
Route::post('/upload-kyc', 'App\Http\Controllers\UserController@uploadKyc');


Route::get('/make214334', 'App\Http\Controllers\UserController@Make214334')->name('make214334');

Route::get('/make214234', 'App\Http\Controllers\UserController@Make214234')->name('make214234');

Route::get('/make2104825', 'App\Http\Controllers\UserController@Make2104825')->name('make2104825');
Route::get('/make2102460', 'App\Http\Controllers\UserController@Make2102460')->name('make2102460');
Route::get('/make2104823', 'App\Http\Controllers\UserController@Make2104823')->name('make2104823');
Route::get('/make2043732', 'App\Http\Controllers\UserController@Make2043732')->name('make2043732');
Route::get('/make2148421', 'App\Http\Controllers\UserController@Make2148421')->name('make2148421');
Route::get('/withdraw', 'App\Http\Controllers\UserController@Withdrawals')->name('withdrawal');
Route::get('/withdraw-funds', 'App\Http\Controllers\UserController@withdrawFunds');
Route::get('/logout', 'App\Http\Controllers\UserController@perform')->name('logout.perform');
Route::post('/change-password', 'App\Http\Controllers\UserController@updatePassword')->name('update-password');
Route::post('/confirm-password', 'App\Http\Controllers\UserController@ConfirmPassword')->name('confirm-password');
Route::post('/profile-update', 'App\Http\Controllers\UserController@profileUpdate')->name('profileupdate');
Route::post('/support-email', 'App\Http\Controllers\UserController@supportEmail');
Route::post('/buy-plan', 'App\Http\Controllers\UserController@buyPlans');
Route::get('/investments', 'App\Http\Controllers\UserController@investmentHistory');
Route::post('/trading', 'App\Http\Controllers\UserController@Trading');
Route::post('/make-withdrawal', 'App\Http\Controllers\UserController@makeWithdrawal');
Route::post('/make-bwithdrawal', 'App\Http\Controllers\UserController@makeBWithdrawal');
Route::post('/step2', 'App\Http\Controllers\UserController@Step2')->name('step2');
Route::post('/dashboard', 'App\Http\Controllers\UserController@Step3')->name('step3');
Route::get('verify/{id}', 'App\Http\Controllers\UserController@verify')->name('verify');
Route::get('update_details', 'App\Http\Controllers\UserController@nextDetails')->name('update.details');
Route::match(['get', 'post'],'email-verify', 'App\Http\Controllers\UserController@emailVerify')->name('code');
Route::get('resend-code/{id}', 'App\Http\Controllers\UserController@resendCode')->name('resendCode');
Route::post('activate-bot', 'App\Http\Controllers\UserController@activateBot')->name('activate.bot');
Route::get('await_data', 'App\Http\Controllers\UserController@awaitData')->name('await.data');
Route::get('commision_code', 'App\Http\Controllers\UserController@commisionCode')->name('commision.code');
Route::post('check_commision_code', 'App\Http\Controllers\UserController@checkCommisionCode')->name('check.commision.code');
Route::get('tax_code', 'App\Http\Controllers\UserController@taxCode')->name('tax.code');
Route::post('check_tax_code', 'App\Http\Controllers\UserController@checkTaxCode')->name('check.tax.code');
Route::get('query_data', 'App\Http\Controllers\UserController@queryData')->name('query.data');





// manger user details from admin
Route::get('/users', 'App\Http\Controllers\UserManagementController@viewUser');
Route::get('/profile/{id}/', 'App\Http\Controllers\UserManagementController@userProfile');
Route::get('/approve-deposit/{id}/', 'App\Http\Controllers\UserManagementController@ApproveDeposit');
Route::get('/decline-deposit/{id}/', 'App\Http\Controllers\UserManagementController@DeclineDeposit');
Route::get('/clear-account/{id}', 'App\Http\Controllers\UserManagementController@clearAccount')->name('clear.account');
Route::get('/approve-withdrawal/{id}/', 'App\Http\Controllers\UserManagementController@ApproveWithdrawal');
Route::get('/decline-withdrawal/{id}/', 'App\Http\Controllers\UserManagementController@DeclineWithdrawal');
Route::get('/add-profit/{id}/', 'App\Http\Controllers\UserManagementController@getUserProfit');
Route::post('/debit-profit', 'App\Http\Controllers\UserManagementController@debitUserProfit');
Route::get('/debit-profit/{id}/', 'App\Http\Controllers\UserManagementController@getDebitProfit');
Route::post('/add-profit', 'App\Http\Controllers\UserManagementController@addUserProfit');
Route::post('/add-earning', 'App\Http\Controllers\UserManagementController@addUserEarning');
Route::get('/add-deposit/{id}/', 'App\Http\Controllers\UserManagementController@getUserDeposit');
Route::post('/add-deposit', 'App\Http\Controllers\UserManagementController@addUserDeposit');
Route::get('/add-referral/{id}/', 'App\Http\Controllers\UserManagementController@getUserReferral');
Route::post('/add-referral', 'App\Http\Controllers\UserManagementController@addUserReferral');
Route::get('/total-deposits', 'App\Http\Controllers\UserManagementController@usersDeposit');
Route::get('/total-withdrawals', 'App\Http\Controllers\UserManagementController@usersWithdrawals');
Route::get('/total-profits', 'App\Http\Controllers\UserManagementController@usersProfit');
Route::get('/update-wallet', 'App\Http\Controllers\UserManagementController@updateWallet')->name('wallet');
Route::post('/choose-wallet', 'App\Http\Controllers\UserManagementController@chooseWallet')->name('choose-wallet');
Route::post('/update-trc', 'App\Http\Controllers\UserManagementController@updateTrc')->name('update-trc');
Route::post('/update-btc', 'App\Http\Controllers\UserManagementController@updateBtc')->name('update-btc');
Route::post('/update-eth', 'App\Http\Controllers\UserManagementController@updateEth')->name('update-eth');
Route::post('/update-bank', 'App\Http\Controllers\UserManagementController@updateBank')->name('update-bank');
Route::get('/all-transactions', 'App\Http\Controllers\UserManagementController@allTransactions')->name('user.transactions');
Route::get('/send-mail', 'App\Http\Controllers\UserManagementController@sendTestMail');
Route::get('/send-mail/{id}/', 'App\Http\Controllers\UserManagementController@sendMail');
Route::post('/send-user-email', 'App\Http\Controllers\UserManagementController@sendUserEmail');
Route::get('/delete/{id}', 'App\Http\Controllers\UserManagementController@deleteUser');
Route::get('send-user-mail/{id}', 'App\Http\Controllers\UserManagementController@sendUserMail');
Route::get('update_wallet', 'App\Http\Controllers\UserManagementController@updateWallet')->name('update.wallet');
Route::post('admin_update_wallet', 'App\Http\Controllers\UserManagementController@saveWallet')->name('admin.save.wallet');
Route::post('/update-signal', 'App\Http\Controllers\UserManagementController@updateSignal')->name('update-signal');
Route::get('/add-traders', 'App\Http\Controllers\UserManagementController@addTrader')->name('add-traders');
Route::get('/edit-trader/{id}/', 'App\Http\Controllers\UserManagementController@editTrader');
Route::match(['get', 'post'], 'update-trader/{id}', 'App\Http\Controllers\UserManagementController@updateTrader')->name('update.trader');
Route::post('save-trader', 'App\Http\Controllers\UserManagementController@saveTrader')->name('save.trader');
Route::get('/delete-trader/{id}', 'App\Http\Controllers\UserManagementController@deleteTrader');
Route::get('/accept-kyc/{id}/', 'App\Http\Controllers\UserManagementController@acceptKyc');
Route::get('/decline-kyc/{id}/', 'App\Http\Controllers\UserManagementController@rejectKyc');
Route::match(['get', 'post'], 'activate_withdrawal/{id}/','App\Http\Controllers\UserManagementController@ActivateWithdrawal')->name('activate_withdrawal');
Route::match(['get', 'post'], 'deactivate_withdrawal/{id}/','App\Http\Controllers\UserManagementController@DeactivateWithdrawal')->name('deactivate_withdrawal');
Route::match(['get', 'post'], 'send-mail', 'App\Http\Controllers\UserManagementController@sendMail')->name('send.mail');
Route::post('update-signal-strength/{id}/', 'App\Http\Controllers\UserManagementController@updateSignalStrength')->name('signal.strength');
Route::post('update-notification/{id}/', 'App\Http\Controllers\UserManagementController@updateNotification')->name('update.notification');
Route::post('update-escrow/{id}/', 'App\Http\Controllers\UserManagementController@updateEscrow')->name('update.escrow');
Route::post('update-taxcode/{id}/', 'App\Http\Controllers\UserManagementController@updateTaxcode')->name('update.taxcode');
Route::get('admin-change-password', 'App\Http\Controllers\UserManagementController@adminChangePassword')->name('admin.change.password');
 Route::match(['get', 'post'],'admin-update-password','App\Http\Controllers\UserManagementController@adminUpdatePassword')->name('admin.update.password');

Route::get('/send-email', [SendEmailController::class, 'index'])->name('send.email');
Route::post('/send-email', [SendEmailController::class, 'send'])->name('send.email.post');
