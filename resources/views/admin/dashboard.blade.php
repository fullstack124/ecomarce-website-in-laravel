@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection


@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Dashboard</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Total Sale</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-chart-bar fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Today Order</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-chart-bar fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>March Sale</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-chart-bar fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Yearly Sale</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-chart-bar fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Orders</h2>
                            <div class="status__box__data">
                                <h2>51</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Pending Orders</h2>
                            <div class="status__box__data">
                                <h2>51</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-shopping-cart fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2> Delivered Orders</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-shopping-cart fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Returned Orders</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Total Earning</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-money-bill-wave fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Today Earning</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-money-bill-wave fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>March Earning</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-money-bill-wave fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Yearly Earning</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Products</h2>
                            <div class="status__box__data">
                                <h2>11</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Customers</h2>
                            <div class="status__box__data">
                                <h2>13</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-check-circle fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Categories</h2>
                            <div class="status__box__data">
                                <h2>10</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-check-circle fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Brands</h2>
                            <div class="status__box__data">
                                <h2>7</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-check-circle fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Online Transactions</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-dollar-sign fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Paypal Transactions</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-dollar-sign fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Stripe Transactions</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-dollar-sign fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Razorpay Transactions</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-dollar-sign fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Bank Transactions</h2>
                            <div class="status__box__data">
                                <h2>$0.00</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-dollar-sign fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Reviews</h2>
                            <div class="status__box__data">
                                <h2>0</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-comment-alt fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Blogs</h2>
                            <div class="status__box__data">
                                <h2>6</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-blog fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="status__box-3 bg-style">
                        <div class="item__left">
                            <h2>Subscribers</h2>
                            <div class="status__box__data">
                                <h2>13</h2>
                            </div>
                        </div>
                        <div class="item__right">
                            <div class="status__box__img">
                                <i class="fas fa-users fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card transactions-chart-card">
                        <div class="item-top card-header mb-30">
                            <h2 class="card-title">Transactions</h2>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="earnSource"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card sales-ratio-chart-card">
                        <div class="item-top card-header mb-30">
                            <h2 class="card-title">Sales Ratio</h2>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="salesRatio"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="item-top card-header mb-30">
                            <h2 class="card-title">March Sales</h2>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="multipleLineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="item-top card-header mb-30">
                            <h2 class="card-title">March Earnings</h2>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="multipleLineChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="transaction_pie" data-dt='[49.01960784313725,0,15.686274509803921,0,25500]'></div>
            <div id="sales_ratio" data-dt='[0,0]'></div>
        </div>
    </div>
@endsection
