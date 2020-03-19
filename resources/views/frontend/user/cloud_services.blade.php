@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    @include('frontend.user.dashboard_components.header')

    @include('frontend.user.dashboard_components.sidebar')


    <!-- /Vertical Nav -->



    <div class="" style="margin-top: 77px;margin-left: 30px;margin-right: 30px;">
        <div class="">
            <div class="row">
                @foreach($get_services as $services)
                    <div class="col-md-4">
                        <div class="card" style="padding: 10px;border-radius: 10px;">
                            <div class="" style="background-image: url('storage/service_img/{{$services->cover_image}}');height: 130px;background-position: center;background-size: cover;background-repeat: no-repeat;border-radius: 10px 10px 0px 0px;"></div>
                            <br>
                            <h3 style="text-align: center;">{{$services->service_name}}</h3> <br>
                            <p style="overflow: hidden;height: 90px;">{{$services->service_description}} </p> <br>
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <a href="" class="btn btn-primary pull-right">Free</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>







    <!-- Setting Panel -->



        <!-- /Container -->
    @include('frontend.user.dashboard_components.sidebar')


@endsection
