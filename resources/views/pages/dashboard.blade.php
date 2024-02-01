@extends('admin')

@section('content')
 
 <!-- Sales By Country -->
 <div class="col-xl-4 col-md-6 mb-4">
     <div class="card h-100">
         <div class="card-header d-flex justify-content-between">
             <div class="card-title mb-0">
                 <h5 class="m-0 me-2">Sales by Countries</h5>
                 <small class="text-muted">Monthly Sales Overview</small>
             </div>
             <div class="dropdown">
                 <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                     <a class="dropdown-item" href="javascript:void(0);">Download</a>
                     <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                     <a class="dropdown-item" href="javascript:void(0);">Share</a>
                 </div>
             </div>
         </div>
         <div class="card-body">
             <ul class="p-0 m-0">
                 <li class="d-flex align-items-center mb-4">
                     <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/svg/flags/us.svg" alt="User" class="rounded-circle me-3" width="34">
                     <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                         <div class="me-2">
                             <div class="d-flex align-items-center">
                                 <h6 class="mb-0 me-1">$8,567k</h6>

                             </div>
                             <small class="text-muted">United states</small>
                         </div>
                         <div class="user-progress">
                             <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                 <i class='ti ti-chevron-up'></i>
                                 25.8%
                             </p>
                         </div>
                     </div>
                 </li>
                 <li class="d-flex align-items-center mb-4">
                     <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/svg/flags/br.svg" alt="User" class="rounded-circle me-3" width="34">
                     <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                         <div class="me-2">
                             <div class="d-flex align-items-center">
                                 <h6 class="mb-0 me-1">$2,415k</h6>
                             </div>
                             <small class="text-muted">Brazil</small>
                         </div>
                         <div class="user-progress">
                             <p class="text-danger fw-medium mb-0 d-flex justify-content-center gap-1">
                                 <i class='ti ti-chevron-down'></i>
                                 6.2%
                             </p>
                         </div>
                     </div>
                 </li>
                 <li class="d-flex align-items-center mb-4">
                     <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/svg/flags/in.svg" alt="User" class="rounded-circle me-3" width="34">
                     <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                         <div class="me-2">
                             <div class="d-flex align-items-center">
                                 <h6 class="mb-0 me-1">$865k</h6>
                             </div>
                             <small class="text-muted">India</small>
                         </div>
                         <div class="user-progress">
                             <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                 <i class='ti ti-chevron-up'></i>
                                 12.4%
                             </p>
                         </div>
                     </div>
                 </li>
                 <li class="d-flex align-items-center mb-4">
                     <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/svg/flags/au.svg" alt="User" class="rounded-circle me-3" width="34">
                     <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                         <div class="me-2">
                             <div class="d-flex align-items-center">
                                 <h6 class="mb-0 me-1">$745k</h6>
                             </div>
                             <small class="text-muted">Australia</small>
                         </div>
                         <div class="user-progress">
                             <p class="text-danger fw-medium mb-0 d-flex justify-content-center gap-1">
                                 <i class='ti ti-chevron-down'></i>
                                 11.9%
                             </p>
                         </div>
                     </div>
                 </li>
                 <li class="d-flex align-items-center mb-4">
                     <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/svg/flags/fr.svg" alt="User" class="rounded-circle me-3" width="34">
                     <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                         <div class="me-2">
                             <div class="d-flex align-items-center">
                                 <h6 class="mb-0 me-1">$45</h6>
                             </div>
                             <small class="text-muted">France</small>
                         </div>
                         <div class="user-progress">
                             <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                 <i class='ti ti-chevron-up'></i>
                                 16.2%
                             </p>
                         </div>
                     </div>
                 </li>
                 <li class="d-flex align-items-center">
                     <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/svg/flags/cn.svg" alt="User" class="rounded-circle me-3" width="34">
                     <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                         <div class="me-2">
                             <div class="d-flex align-items-center">
                                 <h6 class="mb-0 me-1">$12k</h6>
                             </div>
                             <small class="text-muted">China</small>
                         </div>
                         <div class="user-progress">
                             <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                 <i class='ti ti-chevron-up'></i>
                                 14.8%
                             </p>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!--/ Sales By Country -->

 <!-- Total Earning -->
 <div class="col-12 col-xl-4 mb-4 col-md-6">
     <div class="card">
         <div class="card-header d-flex justify-content-between pb-1">
             <h5 class="mb-0 card-title">Total Earning</h5>
             <div class="dropdown">
                 <button class="btn p-0" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
                     <a class="dropdown-item" href="javascript:void(0);">View More</a>
                     <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                 </div>
             </div>
         </div>
         <div class="card-body">
             <div class="d-flex align-items-center">
                 <h1 class="mb-0 me-2">87%</h1>
                 <i class="ti ti-chevron-up text-success me-1"></i>
                 <p class="text-success mb-0">25.8%</p>
             </div>
             <div id="totalEarningChart"></div>
             <div class="d-flex align-items-start my-4">
                 <div class="badge rounded bg-label-primary p-2 me-3 rounded"><i class="ti ti-currency-dollar ti-sm"></i></div>
                 <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                     <div class="me-2">
                         <h6 class="mb-0">Total Sales</h6>
                         <small class="text-muted">Refund</small>
                     </div>
                     <p class="mb-0 text-success">+$98</p>
                 </div>
             </div>
             <div class="d-flex align-items-start">
                 <div class="badge rounded bg-label-secondary p-2 me-3 rounded"><i class="ti ti-brand-paypal ti-sm"></i></div>
                 <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                     <div class="me-2">
                         <h6 class="mb-0">Total Revenue</h6>
                         <small class="text-muted">Client Payment</small>
                     </div>
                     <p class="mb-0 text-success">+$126</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--/ Total Earning -->

 <!-- Monthly Campaign State -->
 <div class="col-xl-4 col-md-6 mb-4">
     <div class="card h-100">
         <div class="card-header d-flex justify-content-between">
             <div class="card-title mb-0">
                 <h5 class="mb-0">Monthly Campaign State</h5>
                 <small class="text-muted">8.52k Social Visiters</small>
             </div>
             <div class="dropdown">
                 <button class="btn p-0" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                     <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                     <a class="dropdown-item" href="javascript:void(0);">Download</a>
                     <a class="dropdown-item" href="javascript:void(0);">View All</a>
                 </div>
             </div>
         </div>
         <div class="card-body">
             <ul class="p-0 m-0">
                 <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                     <div class="badge bg-label-success rounded p-2"><i class="ti ti-mail ti-sm"></i></div>
                     <div class="d-flex justify-content-between w-100 flex-wrap">
                         <h6 class="mb-0 ms-3">Emails</h6>
                         <div class="d-flex">
                             <p class="mb-0 fw-medium">12,346</p>
                             <p class="ms-3 text-success mb-0">0.3%</p>
                         </div>
                     </div>
                 </li>
                 <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                     <div class="badge bg-label-info rounded p-2"><i class="ti ti-link ti-sm"></i></div>
                     <div class="d-flex justify-content-between w-100 flex-wrap">
                         <h6 class="mb-0 ms-3">Opened</h6>
                         <div class="d-flex">
                             <p class="mb-0 fw-medium">8,734</p>
                             <p class="ms-3 text-success mb-0">2.1%</p>
                         </div>
                     </div>
                 </li>
                 <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                     <div class="badge bg-label-warning rounded p-2"><i class="ti ti-click ti-sm"></i></div>
                     <div class="d-flex justify-content-between w-100 flex-wrap">
                         <h6 class="mb-0 ms-3">Clicked</h6>
                         <div class="d-flex">
                             <p class="mb-0 fw-medium">967</p>
                             <p class="ms-3 text-success mb-0">1.4%</p>
                         </div>
                     </div>
                 </li>
                 <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                     <div class="badge bg-label-primary rounded p-2"><i class="ti ti-users ti-sm"></i></div>
                     <div class="d-flex justify-content-between w-100 flex-wrap">
                         <h6 class="mb-0 ms-3">Subscribe</h6>
                         <div class="d-flex">
                             <p class="mb-0 fw-medium">345</p>
                             <p class="ms-3 text-success mb-0">8.5k</p>
                         </div>
                     </div>
                 </li>
                 <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                     <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-alert-triangle ti-sm text-body"></i></div>
                     <div class="d-flex justify-content-between w-100 flex-wrap">
                         <h6 class="mb-0 ms-3">Complaints</h6>
                         <div class="d-flex">
                             <p class="mb-0 fw-medium">10</p>
                             <p class="ms-3 text-success mb-0">1.5%</p>
                         </div>
                     </div>
                 </li>
                 <li class="d-flex justify-content-between align-items-center">
                     <div class="badge bg-label-danger rounded p-2"><i class="ti ti-ban ti-sm"></i></div>
                     <div class="d-flex justify-content-between w-100 flex-wrap">
                         <h6 class="mb-0 ms-3">Unsubscribe</h6>
                         <div class="d-flex">
                             <p class="mb-0 fw-medium">86</p>
                             <p class="ms-3 text-success mb-0">0.8%</p>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!--/ Monthly Campaign State -->

@endsection