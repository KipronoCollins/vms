@extends('layouts.main')

@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Manage Vehicles</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> VMS</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Manage Vehicles</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Manage</strong> Vehicles</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Reg No</th>
                                            <th>Model</th>
                                            <th>Engine No</th>
                                            <th>Expense</th>
                                            <th>Trip</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vehicles as $vehicle)
                                        <tr>
                                            <th> {{ $vehicle->regNo }} </th>
                                            <td> {{ $vehicle->model }} </td>
                                            <td> {{ $vehicle->engineNo }} </td>
                                            <td> <a class="btn btn-info" href=" {{ route('addExpense', $vehicle->id ) }} " style="margin: 0%;">Add Expense</a> </td>
                                            <td> <a class="btn btn-primary" href=" {{ route('addTrip', $vehicle->id ) }} " style="margin: 0%;">Add Trip</a> </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows --> 
        </div>
    </div>
</section>

@endsection