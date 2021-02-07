@extends('layout.master')

@section('css')

    <style>
        .table{
            border: 1px solid #d2d0d0;
            background: #fff;
        }

        tbody tr td{
            height: 200px; line-height: 200px; align-items: center;
        }

        thead tr th{
            align-items: center !important;
        }

    </style>

@stop

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table bordered">
                    <thead>
                    <tr>
                        <th>IMAGE</th>
                        <th>PRODUCT NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                        <th>REMOVE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img src="{{asset('resources/images/vaseline.jpg')}}" width="200" height="200">
                        </td>

                        <td>
                            Vaseline lotion
                        </td>

                        <td>
                            20000 Tsh
                        </td>

                        <td>
                            3
                        </td>

                        <td>
                            60000 Tsh
                        </td>

                        <td>
                            &times;
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="{{asset('resources/images/vaseline.jpg')}}" width="200" height="200">
                        </td>

                        <td>
                            Vaseline lotion
                        </td>

                        <td>
                            20000 Tsh
                        </td>

                        <td>
                            3
                        </td>

                        <td>
                            60000 Tsh
                        </td>

                        <td>
                            &times;
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div style="height: 400px;" class="col-md-6">
                        <div class="py-4">
                            <button class="btn btn-secondary" type="submit">Continue Shopping</button>
                        </div>
                        <div>
                            <button class="btn btn-success">Update Cart</button>
                        </div>
                    </div>

                    <div style="height: 400px;" class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p>Sub Total</p>
                                    <p>240000 Tsh</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <h4>Total</h4>
                                    <p>240000 Tsh</p>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a>Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@stop
