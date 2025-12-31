@include('manager.header')
@include('manager.navbar')
<!-- Sidebar wrapper end -->

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Main header starts -->
    <div class="main-header d-flex align-items-center justify-content-between position-relative">
        <div class="d-flex align-items-center justify-content-center">
            <div class="page-icon">
                <i class="bi bi-window-split"></i>
            </div>
            <div class="page-title d-none d-md-block">
                <h5>Data Tables</h5>
            </div>
        </div>
        <!-- Live updates start -->
        <ul class="updates d-flex align-items-end flex-column overflow-hidden" id="updates">
            <!-- Updates content here -->
        </ul>
        <!-- Live updates end -->
    </div>
    <!-- Main header ends -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Summary Statistics Row -->
        <div class="row gx-3 mb-4">
            <div class="col-sm-4 col-12">
                <!-- Card start -->
                <div class="card stat-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="fw-bold">Total Users</h6>
                                <h2 class="total-count">{{ $totalUsers ?? 0 }}</h2>
                                <p class="text-muted mb-0">
                                    <span class="text-success">
                                        <i class="bi bi-arrow-up"></i> Active
                                    </span>
                                </p>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
            
            <div class="col-sm-4 col-12">
                <!-- Card start -->
                <div class="card stat-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="fw-bold">Total Deposits</h6>
                                <h2 class="total-count">${{ number_format($totalDeposits ?? 0, 2) }}</h2>
                                <p class="text-muted mb-0">
                                    <span class="text-success">
                                        <i class="bi bi-graph-up"></i> All time
                                    </span>
                                </p>
                            </div>
                            <div class="icon-shape icon-md bg-light-success text-success rounded-2">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
            
            <div class="col-sm-4 col-12">
                <!-- Card start -->
                <div class="card stat-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="fw-bold">Total Withdrawals</h6>
                                <h2 class="total-count">${{ number_format($totalWithdrawals ?? 0, 2) }}</h2>
                                <p class="text-muted mb-0">
                                    <span class="text-danger">
                                        <i class="bi bi-graph-down"></i> All time
                                    </span>
                                </p>
                            </div>
                            <div class="icon-shape icon-md bg-light-danger text-danger rounded-2">
                                <i class="bi bi-arrow-up-circle-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Summary Statistics Row End -->

        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-sm-12 col-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-title">All Users</div>
                        <div class="d-flex">
                            <div class="input-group me-2" style="width: 250px;">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Search users..." 
                                       id="searchInput" aria-label="Search">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" 
                                        id="sortDropdown" data-bs-toggle="dropdown" 
                                        aria-expanded="false">
                                    <i class="bi bi-filter"></i> Sort
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                    <li><a class="dropdown-item" href="#" data-sort="newest">Newest First</a></li>
                                    <li><a class="dropdown-item" href="#" data-sort="oldest">Oldest First</a></li>
                                    <li><a class="dropdown-item" href="#" data-sort="name">By Name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="highlightRowColumn" class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Registered Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $transaction)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-2">
                                                    <div class="avatar-title bg-light-primary rounded">
                                                        {{ strtoupper(substr($transaction->name, 0, 1)) }}
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">{{$transaction->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $transaction->email ?? 'N/A' }}</td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ \Carbon\Carbon::parse($transaction->created_at)->format('D, M j, Y') }}</span>
                                                <small class="text-muted">{{ \Carbon\Carbon::parse($transaction->created_at)->format('g:i A') }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $status = $transaction->status ?? 'active';
                                                $statusColors = [
                                                    'active' => 'bg-light-success text-success',
                                                    'inactive' => 'bg-light-warning text-warning',
                                                    'suspended' => 'bg-light-danger text-danger',
                                                    'pending' => 'bg-light-info text-info'
                                                ];
                                                $statusColor = $statusColors[$status] ?? 'bg-light-secondary text-secondary';
                                            @endphp
                                            <span class="badge {{ $statusColor }} rounded-pill">
                                                {{ ucfirst($status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{url('profile/'.$transaction->id)}}" 
                                                   class="btn btn-sm btn-light-primary me-2" 
                                                   title="View User">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{url('send-user-mail/'.$transaction->id)}}" 
                                                   class="btn btn-sm btn-light-success me-2"
                                                   title="Send Mail">
                                                    <i class="bi bi-envelope"></i>
                                                </a>
                                               <a href="{{url('delete/'.$transaction->id)}}"
												onclick="confirm('Are you sure you want to delete this user?')"><span
													class="badge shade-red">Delete User</span></a>

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($result->count() == 0)
                        <div class="text-center py-5">
                            <div class="empty-state-icon">
                                <i class="bi bi-people display-1 text-muted"></i>
                            </div>
                            <h4 class="mt-3">No Users Found</h4>
                            <p class="text-muted">There are no users in the system yet.</p>
                        </div>
                        @endif
                    </div>
                  
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper scroll end -->

</div>

@include('manager.footer')

@push('scripts')
<script>
// Delete confirmation with SweetAlert
function confirmDelete(id, name) {
    Swal.fire({
        title: 'Are you sure?',
        text: `You are about to delete user "${name}". This action cannot be undone.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `{{ url('delete') }}/${id}`;
        }
    });
}

// Search functionality
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#highlightRowColumn tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Sort functionality
document.querySelectorAll('[data-sort]').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const sortType = this.getAttribute('data-sort');
        // Implement sorting logic here
        console.log('Sort by:', sortType);
    });
});

// Add some interactive styling
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects to stat cards
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>
@endpush

<style>
.stat-card {
    border-radius: 10px;
    border: none;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
}

.stat-card:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.icon-shape {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.total-count {
    font-weight: 700;
    color: #2c3e50;
    margin: 10px 0;
}

.avatar-sm {
    width: 36px;
    height: 36px;
}

.avatar-title {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}

.empty-state-icon {
    opacity: 0.5;
}

.custom-table tbody tr:hover {
    background-color: #f8f9fa;
}

.btn-light-primary {
    background-color: rgba(13, 110, 253, 0.1);
    border-color: rgba(13, 110, 253, 0.2);
    color: #0d6efd;
}

.btn-light-success {
    background-color: rgba(25, 135, 84, 0.1);
    border-color: rgba(25, 135, 84, 0.2);
    color: #198754;
}

.btn-light-danger {
    background-color: rgba(220, 53, 69, 0.1);
    border-color: rgba(220, 53, 69, 0.2);
    color: #dc3545;
}
</style>