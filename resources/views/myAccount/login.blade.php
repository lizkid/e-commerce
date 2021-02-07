@extends('layout.master')

@section('title')
    Login
@stop

@section('css')
    <style>
        .container{
            max-width: 400px;
            border-radius: 20px;
            margin-top: 20px;
        }

        .card{
            border-radius: 20px;
            height: 600px;
            background-image: linear-gradient(to right, #0084ff, #00f2ff);
            box-sizing: border-box;
            z-index: 0;
            overflow: hidden;
            border: none;
        }

        .circle{
            position: absolute;
            bottom: -200px;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 700px;
            width: 700px;
            z-index: -1;
            overflow: hidden;
            background: white;
            clip-path: circle(50%);
        }

        .card-body form{
            padding: 0 20px;
        }

        .card-body form a{
            color: gray;
        }

        .card-body form a:hover{
            color: cadetblue;
        }

        label{
            color: #a64f60;
        }

        #form-control{
            color: white;
            border-radius: 30px;
        }

        #btn-login{
            display: block;
            margin: auto;
            width: 100%;
            border-radius: 30px;
        }
    </style>
@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="circle">

                </div>

                <div>
                    <h4 class="text-center my-3">Login</h4>
                </div>

                <form action="access/register.php" method="post">


                    <div class="row">

                        <div class="col-md-12">
                            <label for="email">Email:</label>
                            <input id="form-control" class="form-control" type="email" name="email" required="">

                            <label for="password_1">Password:</label>
                            <input id="form-control" class="form-control"  type="password" name="Password_1" required="">


                        </div>

                        <div class="col-md-12 mt-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                        </div>



                    </div>

                    <button id="btn-login" type="submit" class="btn btn-info my-3">Login</button>

                    <div>
                        <a href="{{url('account/register')}}">Don't have an account?</a>
                    </div>

                    <div>
                        <a href="index.php">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
