@extends('layout.master')

@section('title')
    Register
@stop

@section('css')
    <style>

        .container form div a{
            color: gray;
        }

        .container form div a:hover{
            color: cadetblue;
        }
    </style>
@stop

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="container">
                <div>
                    <h4 class="text-center my-3">Register now to start buying and selling on E-COM</h4>
                </div>
                <form style="padding: 20px; background: #ffffff; margin-top: 50px; margin-bottom: 50px;" action="access/register.php" method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="Fname">First Name:</label>
                            <input class="form-control"  type="text" name="Fname" required="">

                        </div>

                        <div class="col-md-6">
                            <label for="Sname">Last Name:</label>
                            <input class="form-control"  type="text" name="Sname" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input class="form-control" type="email" name="email" required="">

                        </div>

                        <div class="col-md-6">
                            <label for="phone">Phone:</label>
                            <input class="form-control" type="text" name="phone">
                        </div>

                        <div class="col-md-6">
                            <label for="password_1">Password:</label>
                            <input class="form-control"  type="password" name="Password_1" required="">

                        </div>

                        <div class="col-md-6">
                            <label for="password_2">Confirm Password:</label>
                            <input class="form-control" type="password" name="Password_2" required="">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-info my-3">Register</button>

                    <div><a href="{{url('account/login')}}">Arleady have an acount?</a></div>
                </form>
            </div>
        </div>
    </div>

@stop
