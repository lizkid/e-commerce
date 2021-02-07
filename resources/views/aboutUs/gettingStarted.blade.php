@extends('layout.master')

@section('title')
    Getting started
@stop

@section('content')

    @include('partial.lowerNavigation')

    <div class="container">
        <div class="row">
            <div id="about1" class="col-md-12">

                <h4>When shopping</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.
                </p>

                <p>
                    ALWAYS read the description and view the photos BEFORE bidding
                </p>

            </div>

        </div>
    </div>

    <div class="py-5">
        <p class="alert alert-info">
            ***Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book***
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div id="about1" class="col-md-12">

                <h4>Getting Started</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.
                </p>

                <a href="{{url('account/register')}}">
                    Register
                </a>

            </div>

        </div>
    </div>
@stop
