@extends('layouts.main')

@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Expense</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> VMS</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Add Expense</li>
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
                            <h2 class="card-inside-title"> Add Expense </h2>
                            <form action=" {{ route('saveTrip') }} " method="post" id="form-id">
                                @csrf
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <label for="">From</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="From" id="from" name="from" required>
                                        <input type="hidden" value=" {{ $vehicleId }} " class="form-control" id="vehicleId" name="vehicleId" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">To</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="To" name="to" id="to" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Start Time</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="datetime-local" class="form-control" placeholder="To" name="startTime" id="startTime" required>
                                    </div>
                                    <div class="form-group">                                    
                                        <label for="">End Time</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="datetime-local" class="form-control" placeholder="To" name="endTime" id="endTime" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">odoMeter Start</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="odoMeter Start" name="odoMeterStart" id="odoMeterStart" required>
                                    </div>
                                    
                                    <div class="form-group">                                    
                                        <label for="">odoMeter End</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="odoMeter End" name="odoMeterEnd" id="odoMeterEnd" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Amount</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Mileage</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Mileage" name="mileage" id="mileage" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Journey Start</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Journey Start" name="journeyStart" id="journeyStart" required>
                                    </div>

                                    <div class="form-group">                                    
                                        <label for="">Journey End</label>
                                    </div>
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Journey End" name="journeyEnd" id="journeyEnd" required>
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