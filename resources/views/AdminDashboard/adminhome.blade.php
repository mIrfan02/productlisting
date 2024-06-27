@extends('AdminDashboard.app')
@section('content')
    @include('AdminDashboard.Sidebar')
    <div id="page-wrapper">
        <h1>Dashboard</h1>
        <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                            <div class="main_counter_content text-center white-text wow fadeInUp justify-content-center">
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-briefcase m-b-1"></i>
                                        <h2 class="statistic-counter">{{ \App\Models\Category::count() }}</h2>
                                        <span></span>
                                        <p>Category</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-check m-b-1"></i>
                                        <h2 class="statistic-counter">{{ \App\Models\Product::count() }}</h2>
                                        <p>Product</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
