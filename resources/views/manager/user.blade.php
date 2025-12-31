@include('manager.header')
@include('manager.navbar')

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Main header starts -->
    <div class="main-header d-flex align-items-center justify-content-between position-relative">
        <div class="d-flex align-items-center justify-content-center">
            <div class="page-icon">
                <i class="bi bi-person-badge"></i>
            </div>
            <div class="page-title d-none d-md-block">
                <h5>User Profile Management</h5>
                <small>{{ $userProfile->name }} {{ $userProfile->lname }}</small>
            </div>
        </div>
        <div class="header-actions">
            <a href="#" class="btn btn-light me-2">
                <i class="bi bi-arrow-left"></i> Back to Users
            </a>
        </div>
    </div>
    <!-- Main header ends -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- User Summary Cards -->
        <div class="row gx-3 mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Total Invested</h6>
                                <h3 class="fw-bold mb-0">{{ $userProfile->currency }}{{ number_format($user_balance, 2) }}</h3>
                            </div>
                            <div class="icon-shape icon-lg bg-light-primary text-primary rounded-3">
                                <i class="bi bi-wallet2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Total Distribution</h6>
                                <h3 class="fw-bold mb-0">{{ $userProfile->currency }}{{ number_format($totalEarning, 2) }}</h3>
                            </div>
                            <div class="icon-shape icon-lg bg-light-info text-info rounded-3">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Total Withdrawals</h6>
                                <h3 class="fw-bold mb-0">{{ $userProfile->currency }}{{ number_format($totalWithdrawal, 2) }}</h3>
                            </div>
                            <div class="icon-shape icon-lg bg-light-warning text-warning rounded-3">
                                <i class="bi bi-bank2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Withdrawal Account Status</h6>
                                <h3 class="fw-bold mb-0">
                                    @if($userProfile->withdrawal_status === "1")
                                        <span class="text-success">Withdrawal Status Activated </span>
                                    @else
                                        <span class="text-danger">Withdrawal Status DeActivated</span>
                                    @endif
                                </h3>
                            </div>
                            <div class="icon-shape icon-lg bg-light-{{ $userProfile->withdrawal_status === '1' ? 'success' : 'danger' }} text-{{ $userProfile->withdrawal_status === '1' ? 'success' : 'danger' }} rounded-3">
                                <i class="bi bi-{{ $userProfile->withdrawal_status === '1' ? 'shield-check' : 'shield-lock' }}"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Profile Details -->
        <div class="row gx-3 mb-4">
            <div class="col-lg-6 mb-4">
                <div class="card card-cover rounded-3">
                    <div class="contact-card p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0">Account Information</h4>
                            <a href="{{route('clear.account',$userProfile->id)}}" class="btn btn-danger" onclick="return confirmClearAccount()">
                                <i class="bi bi-trash"></i> Clear Account
                            </a>
                        </div>
                        
                        <h5 class="mb-3">{{$userProfile->name}} {{$userProfile->lname}}</h5>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Email: </span>
                                        <span>{{$userProfile->email}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Country: </span>
                                        <span>{{$userProfile->country}}</span>
                                    </li>
                                    
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Phone Number: </span>
                                        <span>{{$userProfile->phone}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>State: </span>
                                        <span>{{$userProfile->state}}</span>
                                    </li>
                                    
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Address: </span>
                                        <span>{{$userProfile->address}}</span>
                                    </li>
                                    
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Zip Code: </span>
                                        <span>{{$userProfile->pcode}}</span>
                                    </li>
                                        
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Withdrawal Status: </span>
                                        <span>
                                        @if($userProfile->withdrawal_status==="0") Deactivated
                                                        @elseif($userProfile->withdrawal_status==="1")Activated
                                                            @endif
                                        </span>
                                    </li> 
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total Invested: </span>
                                        <span>{{$userProfile->currency}}{{$user_balance}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total Cash Distribution Paid: </span>
                                        <span>{{$userProfile->currency}}{{$totalProfit}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total Cash Invested: </span>
                                        <span>{{$userProfile->currency}}{{$totalDeposit}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total Withdrawals: </span>
                                        <span>{{$userProfile->currency}}{{$totalWithdrawal}}</span>
                                    </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                        <span>Distributions Reinvested: </span>
                                        <span>{{$userProfile->currency}}{{$totalBonus}}</span>
                                    </li>
                                    
                                        <li class="list-group-item d-flex justify-content-between">
                                        <span>Total Distribution: </span>
                                        <span>{{$userProfile->currency}}{{$totalEarning}}</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Withdrawal Tax Code: </span>
                                        <span>{{$userProfile->tax_code}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Quick Actions</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                        <i class="bi bi-cash-stack me-2"></i> Add Cash Invested
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
                                        <i class="bi bi-arrow-repeat me-2"></i> Add Distributions Reinvested
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter3">
                                        <i class="bi bi-graph-up me-2"></i> Top Up Cash Distribution Paid
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter4">
                                        <i class="bi bi-graph-up-arrow me-2"></i> Top Up Total Distribution
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter9">
                                        <i class="bi bi-percent me-2"></i> Update Withdrawal Tax Code
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-grid">
                                  		<!-- Modal XL -->
										<a href="{{route('activate_withdrawal',$userProfile->id)}}" class="edit-contact-card btn btn-success" >
										<button type="button" class="btn btn-success" >
											Activate Withdrawal
										</button>
										</a>
							<a href="{{route('deactivate_withdrawal',$userProfile->id)}}" class="edit-contact-card btn btn-danger" >
							<button type="button" class="btn btn-danger" >
							Deactivate Withdrawal
						</button>
							</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-3 border-top">
                            <h6 class="mb-3">Account Summary</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Active Since:</span>
                                <span class="fw-bold">{{ \Carbon\Carbon::parse($userProfile->created_at)->format('M d, Y') }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Last Login:</span>
                                <span class="fw-bold">Recent</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction History Section -->
        <div class="row gx-3">
            <div class="col-sm-12 col-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Cash Invested History</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="highlightRowColum" class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Investment Type</th>
                                        <th>Payment Method</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Approve</th>
                                        <th>Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($deposit as $depositItem)
                                    <tr>
                                        <td>{{$depositItem->investment_type}}</td>
                                        <td>{{$depositItem->payment_method}}</td>
                                        <td>${{number_format($depositItem->amount, 2)}}</td>
                                        <td>
                                            @if ($depositItem->status == '1')
                                            <span class="badge shade-light-green">Completed</span>
                                            @elseif($depositItem->status == '0')
                                            <span class="badge shade-light-red">Pending</span>
                                            @elseif($depositItem->status == '2')
                                            <span class="badge shade-light-red">Declined</span>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($depositItem->created_at)->format('D, M j, Y g:i A') }}</td>
                                        <td>
                                            <form action="{{url('approve-deposit/'.$depositItem->id)}}">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$depositItem->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$depositItem->payment_method}}">
                                                <button type="submit" class="badge shade-blue">Approve</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{url('decline-deposit/'.$depositItem->id)}}">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$depositItem->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$depositItem->payment_method}}">
                                                <button type="submit" class="badge shade-red">Decline</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>

        <div class="row gx-3 mt-4">
            <div class="col-sm-12 col-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Withdrawal History</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="highlightRowColumn" class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Amount</th>
                                        <th>Wallet Address</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Approve</th>
                                        <th>Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($withdrawal as $withdrawalItem)
                                    <tr>
                                        <td>{{$withdrawalItem->transaction_id}}</td>
                                        <td>${{number_format($withdrawalItem->amount, 2)}}</td>
                                        <td>{{$withdrawalItem->wallet_address}}</td>
                                        <td>
                                            @if ($withdrawalItem->status == '1')
                                            <span class="badge shade-light-green">Completed</span>
                                            @elseif($withdrawalItem->status == '0')
                                            <span class="badge shade-light-red">Pending</span>
                                            @elseif($withdrawalItem->status == '2')
                                            <span class="badge shade-light-red">Declined</span>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($withdrawalItem->created_at)->format('D, M j, Y g:i A') }}</td>
                                        <td>
                                            <form action="{{url('approve-withdrawal/'.$withdrawalItem->id)}}">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$withdrawalItem->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$withdrawalItem->withdrawal_method}}">
                                                <button type="submit" class="badge shade-blue">Approve</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{url('decline-withdrawal/'.$withdrawalItem->id)}}">
                                                @csrf
                                                <input type="hidden" name="status" value="2">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$withdrawalItem->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$withdrawalItem->withdrawal_method}}">
                                                <button type="submit" class="badge shade-red">Decline</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>

    </div>
    <!-- Content wrapper scroll end -->

</div>

<!-- MODALS - KEPT EXACTLY AS THEY WERE -->

<!-- Modal 1: Add Cash Invested -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Cash Invested
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-deposit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <label class="form-label">Amount</label>
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <input type="number" step="0.0000000001" name="amount" class="form-control" style="color:blue" placeholder="Enter Amount " />
                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="payment_method" value="Bitcoin">
                    <input type="date" name="deposit_date" placeholder="e.g 3 days" class="form-control" />
                    <div class="m-0">
                        <label class="form-label">Transaction Id</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">
                        Add User Cash Invested
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal 2: Add Distributions Reinvested -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Add {{$userProfile->name}} Distributions Reinvested
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-referral')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <label class="form-label">Amount</label>
                    <input type="number" step="0.0000000001" name="amount" class="form-control" style="color:blue" placeholder="Enter Amount " />
                    <div class="m-0">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">
                        Add Distributions Reinvested
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal 3: Top Up Cash Distribution Paid -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Top Up {{$userProfile->name}} Cash Distribution Paid
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-profit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <label class="form-label">Amount</label>
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <input type="number" step="0.0000000001" name="amount" class="form-control" style="color:blue" placeholder="Enter Amount " />
                    <div class="m-0">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">
                        Top Up Cash Distribution Paid
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal 4: Top Up Total Distribution -->
<div class="modal fade" id="exampleModalCenter4" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Top Up {{$userProfile->name}} Total Distribution
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-earning')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <label class="form-label">Amount</label>
                    <input type="number" step="0.0000000001" name="amount" class="form-control" style="color:blue" placeholder="Enter Amount " />
                    <div class="m-0">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">
                        Top Up Total Distribution
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal 5: Update Withdrawal Tax Code -->
<div class="modal fade" id="exampleModalCenter9" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Update {{$userProfile->name}} Withdrawal Tax Code
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('update.taxcode',$userProfile->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <label class="form-label">Withdrawal Tax Code</label>
                    <input type="number" step="0.0000000001" name="tax_code" class="form-control" value="{{$userProfile->tax_code}}" min="" max="" style="color:blue" placeholder="E.g 40748 " />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">
                        Update Withdrawal Tax Code
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('manager.footer')

@push('scripts')
<script>
function confirmClearAccount() {
    return confirm('⚠️ WARNING: This will clear all user account data. This action cannot be undone. Continue?');
}

// Add some basic styling improvements
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects to cards
    const cards = document.querySelectorAll('.stat-card, .card-cover');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'transform 0.2s ease';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Style the tables
    const tables = document.querySelectorAll('.custom-table');
    tables.forEach(table => {
        table.classList.add('table-hover');
    });
});
</script>
@endpush

<style>
.stat-card {
    border-radius: 10px;
    border: none;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
}

.stat-card:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.icon-shape.icon-lg {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.card-cover {
    border: 1px solid rgba(0,0,0,0.1);
}

.table-hover tbody tr:hover {
    background-color: rgba(13, 110, 253, 0.05);
}

.badge.shade-light-green {
    background-color: rgba(25, 135, 84, 0.1);
    color: #198754;
}

.badge.shade-light-red {
    background-color: rgba(220, 53, 69, 0.1);
    color: #dc3545;
}

.badge.shade-blue {
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    border: none;
    padding: 0.375rem 0.75rem;
    cursor: pointer;
}

.badge.shade-red {
    background-color: rgba(220, 53, 69, 0.1);
    color: #dc3545;
    border: none;
    padding: 0.375rem 0.75rem;
    cursor: pointer;
}

.badge.shade-blue:hover, .badge.shade-red:hover {
    opacity: 0.9;
}

.list-group-item {
    border: 1px solid rgba(0,0,0,0.125);
    padding: 0.75rem 1rem;
}

.btn {
    border-radius: 6px;
}
</style>