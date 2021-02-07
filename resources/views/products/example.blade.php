
@extends('layout.master')

@section('title')
    Products
@stop

@section('content')

    @include('partial.lowerNavigation')

    <div class="container">
        <h4 class="text-center py-3">Health & Beauty Products</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div id="card" class="card">
                            <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="health product"></a>
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">Some Explanations </p>
                            </div>
                            <div class="card-body d-flex justify-content-between">
                                <p>6,000 Tsh</p>
                                <a href="#">Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="card" class="card">
                            <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="health product"></a>
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">Some Explanations </p>
                            </div>
                            <div class="card-body d-flex justify-content-between">
                                <p>6,000 Tsh</p>
                                <a href="#">Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="card" class="card">
                            <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="health product"></a>
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">Some Explanations </p>
                            </div>
                            <div class="card-body d-flex justify-content-between">
                                <p>6,000 Tsh</p>
                                <a href="#">Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="card" class="card">
                            <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="health product"></a>
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">Some Explanations </p>
                            </div>
                            <div class="card-body d-flex justify-content-between">
                                <p>6,000 Tsh</p>
                                <a href="#">Shop</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
