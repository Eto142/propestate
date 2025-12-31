@include('manager.header')
@include('manager.navbar')
<div class="container">
	<!-- Row start -->
	<div class="row gx-3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card card-cover rounded-2">
				<div class="contact-card p-3">
					<div class="d-flex justify-content-end mb-2">
						<a href="{{route('clear.account',$userProfile->id)}}" class="clear-account-card btn btn-danger" >
							<i class="bi bi-trash"></i> Clear Account
						</a>
					</div>
					Account Information

					<h5>{{$userProfile->name}} {{$userProfile->lname}}</h5>

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
									
								<li class="list-group-item">
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
	</div>
</div>



	<div class="col-xxl-12">
		<!-- Card start -->
		<div class="card m-2">
			<div class="card-body">
				<!-- Modal XL -->
				<button type="button" class="btn btn-success" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter">
					Add Cash Invested
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Cash Invested
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-deposit')}}" method="POST">
								@csrf
								<div class="modal-body">
									<label class="form-label">Amount</label>
									<input type="hidden" name="email" value="{{$userProfile->email}}" />
									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<input type="hidden" class="form-control" id="exampleInputEmail1"
										name="payment_method" value="Bitcoin">
									<input type="date" name="deposit_date" placeholder="e.g 3 days"
										class="form-control" />
									<div class="m-0">
										<label class="form-label">Transaction Id</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-success">
										Add User Cash Invested
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>




				<!-- Modal XL -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter2">
					Add Distributions Reinvested
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter2" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Add {{$userProfile->name}} Distributions Reinvested
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-referral')}}" method="POST">
								@csrf
								<div class="modal-body">
									<input type="hidden" name="email" value="{{$userProfile->email}}" />

									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<label class="form-label">Amount</label>
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<div class="m-0">
										<label class="form-label">Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-danger">
										Add Distributions Reinvested
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Card end -->
	</div>
	<!-- Card end -->


	<div class="col-xxl-12">
		<!-- Card start -->
		<div class="card m-2">
			<div class="card-body">
				<!-- Modal XL -->
				<button type="button" class="btn btn-success" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter3">
					Top Up Cash Distribution Paid
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter3" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Top Up {{$userProfile->name}} Cash Distribution Paid
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-profit')}}" method="POST">
								@csrf
								<div class="modal-body">
									<label class="form-label">Amount</label>
									<input type="hidden" name="email" value="{{$userProfile->email}}" />
									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<div class="m-0">
										<label class="form-label">Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-success">
										Top Up Cash Distribution Paid
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>




				<!-- Modal XL -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal"
					data-bs-target="#exampleModalCenter4">
				 Top Up	Total Distribution
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter4" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">
									Top Up {{$userProfile->name}} Total Distribution
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form action="{{ url('/add-earning')}}" method="POST">
								@csrf
								<div class="modal-body">
									<input type="hidden" name="email" value="{{$userProfile->email}}" />

									<input type="hidden" name="user_id" value="{{$userProfile->id}}" />
									<label class="form-label">Amount</label>
									<input type="number" step="0.0000000001" name="amount" class="form-control"
										style="color:blue" placeholder="Enter Amount " />
									<div class="m-0">
										<label class="form-label">Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

								</div>
								<div class="modal-footer">

									<button type="submit" class="btn btn-danger">
										Top Up	Total Distribution
									</button>
								</div>
							</form>
						</div>
						</div>
					</div>
					<!-- Card end -->
				</div>
				<!-- Card end -->
			</div>


					 <div class="col-xxl-12">
					<!-- Card start -->
					<div class="card m-2">
						<div class="card-body">
							<!-- Modal XL -->
							<button type="button" class="btn btn-success" data-bs-toggle="modal"
								data-bs-target="#exampleModalCenter9">
								Update Withdrawal Tax Code
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter9" tabindex="-1"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalCenterTitle">
												Update {{$userProfile->name}} Withdrawal Tax Code
											</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<form action="{{ route('update.taxcode',$userProfile->id)}}" method="POST">
											@csrf
											<div class="modal-body">
												<label class="form-label">Withdrawal Tax Code</label>
												<input type="number" step="0.0000000001" name="tax_code"
													class="form-control" value="{{$userProfile->tax_code}}"
													min="" max="" style="color:blue" placeholder="E.g 40748 " />


											</div>
											<div class="modal-footer">

												<button type="submit" class="btn btn-success">
													Update Withdrawal Tax Code
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>	<div class="col-xxl-12">
								<!-- Card start -->
								<div class="card m-2">
									<div class="card-body">
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

										@foreach($deposit as $deposit)
										<tr>
											<td>{{$deposit->investment_type}}</td>
											<td>${{number_format($deposit->amount, 2)}}
											</td>

											<td>{{$deposit->payment_method}}</td>
											


											<td>
												@if ($deposit->status == '1')
												<span class="badge shade-light-green">Completed</span>
												@elseif($deposit->status == '0')
												<span class="badge shade-light-red">Pending</span>
												@elseif($deposit->status == '2')
												<span class="badge shade-light-red">Declined</span>
												@endif
											</td>
											<td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('D, M j, Y g:i
												A') }}
											</td>
											<td>
												<form action="{{url('approve-deposit/'.$deposit->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$deposit->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$deposit->payment_method}}">
													<button type="submit" class="badge shade-blue">Approve</button>
												</form>


											</td>
											<td>
												<form action="{{url('decline-deposit/'.$deposit->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$deposit->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$deposit->payment_method}}">
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




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>

			<div class="row gx-3">
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

										@foreach($withdrawal as $withdrawal)
										<tr>
											<td>{{$withdrawal->transaction_id}}</td>
											<td>${{number_format($withdrawal->amount, 2)}}
											</td>

											<td>{{$withdrawal->wallet_address}}</td>


											<td>
												@if ($withdrawal->status == '1')
												<span class="badge shade-light-green">Completed</span>
												@elseif($withdrawal->status == '0')
												<span class="badge shade-light-red">Pending</span>
												@elseif($withdrawal->status == '2')
												<span class="badge shade-light-red">Declined</span>
												@endif
											</td>
											<td>{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('D, M j, Y g:i
												A') }}
											</td>
											<td>
												<form action="{{url('approve-withdrawal/'.$withdrawal->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$withdrawal->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$withdrawal->withdrawal_method}}">
													<button type="submit" class="badge shade-blue">Approve</button>
												</form>


											</td>
											<td>
												<form action="{{url('decline-withdrawal/'.$withdrawal->id)}}">
													@csrf
													<input type="hidden" name="status" value="2">
													<input type="hidden" name="user_id" value="{{$userProfile->id}}">
													<input type="hidden" name="email" value="{{$userProfile->email}}">
													<input type="hidden" name="amount" value="{{$withdrawal->amount}}">
													<input type="hidden" name="payment_method"
														value="{{$withdrawal->withdrawal_method}}">
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




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>






			
					<!-- Card end -->




					<!-- Card end -->

					<!-- Card end -->
				</div>
			</div>








		</div>
		<!-- Content wrapper scroll end -->




		@include('manager.footer')