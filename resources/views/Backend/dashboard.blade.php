@extends('Backend.Layout.app')
@section('content')

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard</h3>
            </div>
            <!-- <div class="dropdown filter custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Sales</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                    <a class="dropdown-item" data-value="<span>Show</span> : Daily Sales" href="javascript:void(0);">Daily Sales</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Weekly Sales" href="javascript:void(0);">Weekly Sales</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Monthly Sales" href="javascript:void(0);">Monthly Sales</a>
                    <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                    <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
                </div>
            </div> -->
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        @if(auth()->user()->type == 'admin')
                        <h5 class="">Revenue - LKR{{ DashboardHelper::getTotalOrderRevenue(auth()->user()->id, 'admin') }}</h5>
                        @else
                        <h5 class="">Payments - LKR{{ DashboardHelper::getTotalOrderRevenue(auth()->user()->id, 'customer') }}</h5>
                        @endif
                        <ul class="tabs tab-pills">
                            <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                        </ul>
                    </div>

                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="revenueMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <div id="chart-2" class=""></div>
                    </div>
                </div>
            </div> -->

            @if(auth()->user()->type == 'admin')
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-two">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-content">
                                <span class="w-value">Daily sales</span>
                                <span class="w-numeric-title">Go to columns for details.</span>
                            </div>
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="daily-sales"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-three">
                    <div class="widget-heading">
                        <h5 class="">Summary</h5>
                    </div>
                    <div class="widget-content">

                        <div class="order-summary">

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Income</h6>
                                        <p class="summary-count">$92,600</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                        <line x1="7" y1="7" x2="7" y2="7"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Profit</h6>
                                        <p class="summary-count">$37,515</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Expenses</h6>
                                        <p class="summary-count">$55,085</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div> -->

            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-one">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </div>
                            <div class="w-content">
                                <span class="w-value">{{ DashboardHelper::getTotalOrders() }}</span>
                                <span class="w-numeric-title">Total Orders</span>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="total-orders"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(auth()->user()->type == 'customer')
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-one">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">
                        @foreach(DashboardHelper::getLatestOrders(auth()->user()->id, auth()->user()->type, 4) as $order)
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Order ID: #{{ $order['id'] }}</h4>
                                        <p class="meta-date">{{ ProductHelper::viewDateInput($order['created_at']) }}</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-LKR{{ $order['total'] }}</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-activity-four">

                    <div class="widget-heading">
                        <h5 class="">Recent Activities</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">

                                <div class="item-timeline timeline-primary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p><span>Updated</span> Server Logs</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">Just Now</p>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">2 min ago</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-danger">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Backup <span>Files EOD</span></p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">14:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">16:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                        <span class="badge badge-primary">In progress</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send contract details to Freelancer</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">18:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Kelly want to increase the time of the project.</p>
                                        <span class="badge badge-primary">In Progress</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Server down for maintanence</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Malicious link detected</p>
                                        <span class="badge badge-warning">Block</span>
                                        <p class="t-time">20:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">23:00</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tm-action-btn">
                            <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Account Info</h5>
                    </div>

                    <div class="widget-content">
                        <div class="invoice-box">

                            <div class="acc-total-info">
                                <h5>Total Expenses</h5>
                                <p class="acc-amount">LKR {{ DashboardHelper::getTotalPayments(auth()->user()->id) }}</p>
                            </div>

                            <!-- <div class="inv-detail">
                                <div class="info-detail-1">
                                    <p>Monthly Plan</p>
                                    <p>$ 199.0</p>
                                </div>
                                <div class="info-detail-2">
                                    <p>Taxes</p>
                                    <p>$ 17.82</p>
                                </div>
                                <div class="info-detail-3 info-sub">
                                    <div class="info-detail">
                                        <p>Extras this month</p>
                                        <p>$ -0.68</p>
                                    </div>
                                    <div class="info-detail-sub">
                                        <p>Netflix Yearly Subscription</p>
                                        <p>$ 0</p>
                                    </div>
                                    <div class="info-detail-sub">
                                        <p>Others</p>
                                        <p>$ -0.68</p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="inv-action">
                                <a href="#" class="btn btn-dark">Summary</a>
                                <a href="#" class="btn btn-danger">Transfer</a>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
            @endif

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Recent Orders</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Customer</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Order</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Price</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Date</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Status</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(DashboardHelper::getLatestOrders(auth()->user()->id, auth()->user()->type, 7) as $order)
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="{{ asset('storage/users/' . $order['user_image']) }}" alt="avatar">{{ $order['user_name'] }}</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">#{{ $order['id'] }}</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing">LKR {{ $order['total'] }}</div>
                                        </td>
                                        <td>
                                            <div class="td-content">{{ ProductHelper::viewDateInput($order['created_at']) }}</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-success">PAID</span></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Top Selling Product</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Product</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Price</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">QTY Remaining</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Sold</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(DashboardHelper::getBestSellingItems() as $items)
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="{{ asset('storage/products/' . $items->product_image) }}" alt="product">{{ $items->product_name }}</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">LKR {{ $items->product_price }}</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">{{ $items->product_quantity }}</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">{{ $items->total_quantity_sold }}</div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @stop