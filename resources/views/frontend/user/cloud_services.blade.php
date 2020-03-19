@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    @include('frontend.user.dashboard_components.header')

    @include('frontend.user.dashboard_components.sidebar')


    <!-- /Vertical Nav -->



    <div class="" style="margin-top: 77px;margin-left: 30px;margin-right: 30px;">
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        There's no shortage of content at Laracasts. In fact, you could watch
                        nonstop for days upon days, and still not see everything.There's no shortage of
                        content at Laracasts. In fact, you could watch nonstop for days upon
                        days, and still not see everything!
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        There's no shortage of content at Laracasts. In fact, you could watch
                        nonstop for days upon days, and still not see everything.There's no shortage of
                        content at Laracasts. In fact, you could watch nonstop for days upon
                        days, and still not see everything!
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        There's no shortage of content at Laracasts. In fact, you could watch
                        nonstop for days upon days, and still not see everything.There's no shortage of
                        content at Laracasts. In fact, you could watch nonstop for days upon
                        days, and still not see everything!
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding: 10px;">
                        There's no shortage of content at Laracasts. In fact, you could watch
                        nonstop for days upon days, and still not see everything.There's no shortage of
                        content at Laracasts. In fact, you could watch nonstop for days upon
                        days, and still not see everything!
                    </div>
                </div>
            </div>
        </div>

    </div>







    <!-- Setting Panel -->



        <!-- /Container -->
    @include('frontend.user.dashboard_components.sidebar')


@endsection
