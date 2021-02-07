<div id="main-navigation">
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul >
                <li class="active">
                    <a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="actived" id="drop-main">
                    <a href="#" id="dropdown">Products</a>
                    <div id="dropdown-menu"  aria-labelledby="dropdown">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('/products')}}">Health & Beauty</a>
                                <a href="{{url('/products')}}">Home Appliancies</a>
                                <a href="{{url('/products')}}">Phones</a>
                                <a href="#">Health & Beauty</a>
                                <a href="#">Home Appliancies</a>
                                <a href="#">Phones</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#">Health & Beauty</a>
                                <a href="#">Home Appliancies</a>
                                <a href="#">Phones</a>
                                <a href="#">Health & Beauty</a>
                                <a href="#">Home Appliancies</a>
                                <a href="#">Phones</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="actived" id="drop-main2">
                    <a href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                    </a>
                    <div id="dropdown-menu2" aria-labelledby="dropdown">
                        <a href="{{url('/about-us/')}}">Getting Started</a>
                        <a href="{{url('/about-us/who-we-are')}}">Who we are...</a>
                        <a href="#">Informations</a>
                        <a href="#">Contact Us</a>
                    </div>
                </li>
                <li class="actived" id="drop-main3">
                    <a href="#" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Order
                    </a>
                    <div id="dropdown-menu3" aria-labelledby="dropdown">
                        <a href="#">Order Lists</a>
                        <a href="#">Order Status</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
