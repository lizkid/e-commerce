<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--automation on scroll-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <!--main css-->
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
    <!--about css-->
    <link rel="stylesheet" href="{{asset('resources/css/about.css')}}">
    <!--product css-->
    <link rel="stylesheet" href="{{asset('resources/css/product.css')}}">

    @yield('css')
</head>
<body>


<div class="wrapper">

    <!--    navigation -->
    <div id="navigation">

        <div id="top-navigation">
            <nav class="navbar navbar-expand-lg">

                <div id="nav-brand">
                    <a class="navbar-brand" href="{{url('/')}}"><span>E-COM</span></a>
                </div>

                <div id="btnBuy">
                    <a href="#">Buy</a>
                </div>

                <div id="btnSell">
                    <a href="#">Sell</a>
                </div>

                <div style="font-size: 14px;" id="info">
                    <a  href="{{url('account/login')}}">Sign in</a>
                    <span>or</span>
                    <a href="{{url('account/register')}}">Register</a>
                    <span>to explore more about e-com</span>
                </div>

                <div id="cart">
                    <a href="{{url('shopping-carts/')}}" data-toggle="tooltip" data-placement="bottom" title="Your shopping cart"><i class="fas fa-cart-plus"></i></a>
                </div>

                <div id="myAccount">
                    <a id="dropdown-account" href="#">My Account</a>
                    <div id="dropdown-account-content" aria-labelledby="dropdown-account">
                        <a href="{{url('/account/login')}}">
                            <span style="opacity: 0.6;"><i class="fas fa-sign-in-alt w-25"></i></span>Login
                        </a>
                        <a href="{{url('/account/register')}}">
                            <span style="opacity: 0.6;"><i class="fas fa-user-edit w-25"></i></span>Register
                        </a>
                        <a href="#">
                            <span style="opacity: 0.6;"><i class="fas fa-sign-out-alt w-25"></i></span>Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        @include('partial.mainNavigation')


    </div>

    <!--    navigation end-->

    <!--    main-content-->

    <div  class="content">

        @yield('content')

    </div>



    <!--    end main-content-->

    {{--    footet start--}}

    <div >
        @include('partial.footer')
    </div>

    {{--    footer end--}}

</div>









<!--Bootstrap js-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- icons-->
<script src="https://kit.fontawesome.com/f50cbe1cfd.js" crossorigin="anonymous"></script>
<!--aos-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        once: false,
        duration: 1000
    });
</script>
<!--main js-->
<script src="{{asset('resources/js/main.js')}}"></script>

@yield('js')


</body>
</html>
