@extends('layout.master')

@section('title')
    Home
@stop

@section('content')

    @include('partial.lowerNavigation')

    <div class="row">

        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('resources/images/phone1.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 data-aos="fade-up" data-aos-delay="100">Product Title</h4>
                                    <p data-aos="fade-up" data-aos-delay="200">Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry. </p>
                                    <div data-aos="fade-up" data-aos-delay="300">
                                        <a href="#" class="btn btn-primary mt-5">Check it<i class="fas fa-arrow-right px-3"></i></a>
                                    </div>
                                </div>

                                <div id="img-top" class="col-md-6">
                                    <a href="#"><a href="#"><img class="d-block w-75" src="{{asset('resources/images/phone1.jpg')}}" alt="Second slide"></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('resources/images/phone1.jpg')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 data-aos="fade-up" data-aos-delay="100">Product Title</h4>
                                    <p data-aos="fade-up" data-aos-delay="200">Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry. </p>
                                    <div data-aos="fade-up" data-aos-delay="300">
                                        <a href="#" class="btn btn-primary mt-5">Check it<i class="fas fa-arrow-right px-3"></i></a>
                                    </div>
                                </div>

                                <div id="img-top" class="col-md-6">
                                    <a href="#"><img class="d-block w-75" src="{{asset('resources/images/phone1.jpg')}}" alt="Second slide"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('resources/images/phone3.jpg')}}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 data-aos="fade-up" data-aos-delay="100">Product Title</h4>
                                    <p data-aos="fade-up" data-aos-delay="200">Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry. </p>
                                    <div data-aos="fade-up" data-aos-delay="300">
                                        <a href="#" class="btn btn-primary mt-5">Check it<i class="fas fa-arrow-right px-3"></i></a>
                                    </div>
                                </div>

                                <div id="img-top" class="col-md-6">
                                    <a href="#"><a href="#"><img class="d-block w-75" src="{{asset('resources/images/phone3.jpg')}}" alt="Second slide"></a></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container">
            <div id="latest-products" class="col-md-12">
                <h4 class="py-5 text-center">Latest products</h4>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>12000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail"  src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>12000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>12000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3">
                        <img class="img-thumbnail" src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>12000 Tsh</strong><br>Product name</p>
                    </div>

                </div>
            </div>

            <div id="mostly-ordered-products" class="col-md-12">
                <h4 class="py-5 text-center">Mostly Ordered products</h4>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail" width="300" height="300" src="{{asset('resources/images/phone4.png')}}" alt="latest product">
                        <p><strong>6000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail" width="300" height="300" src="{{asset('resources/images/phone4.png')}}" alt="latest product">
                        <p><strong>6000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail" width="300" height="300" src="{{asset('resources/images/phone4.png')}}" alt="latest product">
                        <p><strong>6000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3">
                        <img class="img-thumbnail" width="300" height="300" src="{{asset('resources/images/phone4.png')}}" alt="latest product">
                        <p><strong>6000 Tsh</strong><br>Product name</p>
                    </div>

                </div>
            </div>

            <div id="sold-products" class="col-md-12">
                <h4 class="py-5 text-center">Recently Sold products</h4>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail " src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>4000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail " src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>20000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <img class="img-thumbnail " src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>52000 Tsh</strong><br>Product name</p>
                    </div>

                    <div class="col-md-3">
                        <img class="img-thumbnail " src="{{asset('resources/images/vaseline.jpg')}}" alt="latest product">
                        <p><strong>12000 Tsh</strong><br>Product name</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
