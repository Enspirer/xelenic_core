@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Customer Complains
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        <td>User</td>
                                        <td>user@user.com</td>
                                        <td><a href="http://localhost:8000/admin/auth/user/2/unconfirm" data-toggle="tooltip" data-placement="top" title="" name="confirm_item" data-original-title="Un-confirm">
                                                <span class="badge badge-success" style="cursor:pointer">Yes</span>
                                            </a>
                                        </td>
                                        <td>Default</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        2 users total
                    </div>
                </div><!--col-->

                <div class="col-5">
                    <div class="float-right">

                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div>
@endsection
