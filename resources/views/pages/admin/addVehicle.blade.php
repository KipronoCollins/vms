@extends('layouts.main')

@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Vehicle</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> VMS</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Add Vehicle</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title"> Add Users </h2>
                            <form action=" {{ route('admin.saveVehicle') }} " method="post" id="form-id">
                                @csrf
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <label for="">Registration No</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Registration No" id="regNo" name="regNo" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Model</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Model" name="model" id="model" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Engine No.</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Engine No." name="engineNo" id="engineNo" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" id="your-id" style="width:100%;">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var form = document.getElementById("form-id");

document.getElementById("your-id").addEventListener("click", function () {
  form.submit();
});
</script>
@endsection