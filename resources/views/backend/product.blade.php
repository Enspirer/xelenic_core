@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Product Overview</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="feature_data-tab" data-toggle="tab" href="#feature_data" role="tab" aria-controls="feature_data"
            aria-selected="false">Documentation</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Settings</a>
      </li>
   </ul>
   <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
         @include('backend.product_pages.product_overview')
      </div>

      <div class="tab-pane fade" id="feature_data" role="tabpanel" aria-labelledby="feature_data-tab">

      </div>

      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

      </div>
   </div>
@endsection
