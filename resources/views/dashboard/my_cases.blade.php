@extends('layouts.app')


@section('style')
<!-- 
<style>
   .editable-text {
      border: 1px solid #ccc;
      padding: 10px;
      min-height: 200px;
    }
    .btn_groups {
        display: flex;
        /* margin-top: ; */
        flex-direction:row;
    }
    .btn-info {
        background-color: white !important;
        width: 100%;
        margin: 2px !important;
        /* border: 2px solid #F2CC00 !important; */
        border: 2px solid #2f1b47 !important;
        /* color: #F2CC00 !important; */
        color: #2f1b47 !important;
        padding: 7px !important;
        border-radius: 0px !important;
    }

    .btn-info:hover {
        /* background-color: #F2CC00 !important; */
        background-color: #2f1b47 !important;
        width: 100%;
        margin: 2px !important;
        /* border: 2px solid #F2CC00 !important;*/
        border: 2px solid #2f1b47 !important;
        color: white !important;
        border-radius: 0px !important;
    }

    .btn-info:active {
        /* background-color: #F2CC00 !important; */
        background-color: #2f1b47 !important;
        width: 100%;
        margin: 2px !important;
        /* border: 2px solid #F2CC00 !important; */
        border: 2px solid #2f1b47 !important;
        color: white !important;
        border-radius: 0px !important;
    }

</style> -->

<style>

</style>

@endsection



@section('content')

<div class="container">
   
   <div class="row">
        <div class="col-lg-2">
        
        </div>
    
        
        <div class="col-lg-10">
            <div class="row">
            <a href="{{route('show_dashboard')}}"><button class="btn btn-info" style="width:100px">Go Back</button></a>
                <div class="card">
                    <div class="card-header" style="background-color:#2f1b47 !important; color:white; width:100%">
                        <h3 class="text-center">Search Form</h3>
                    </div>
                    <div class="card-body">
                        
                      <div class="row main1" style="display:flex">
                            <div class="medico_ref col-lg-4 col-md-6 col-sm-12">
                                <label for="" class="label">Medico Ref.</label>
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                            <div class="solicator_ref col-lg-4 col-md-6 col-sm-12">
                                <label for="" class="label">Solicitor Ref.</label>
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                            <div class="our_ref col-lg-4 col-md-6 col-sm-12">
                                <label for="" class="label">Our Ref.</label>
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                            <div class="solicators_ref col-lg-4 col-md-6 col-sm-12">
                                <label for="" class="label">Solicitors.</label>
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                            <div class="patient_name col-lg-4 col-md-6 col-sm-12">
                                <label for="" class="label">Patient Name.</label>
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                            <div class="date_of_birth col-lg-4 col-md-6 col-sm-12">
                                <label for="" class="label">Date Of Birth.</label>
                                <input type="text" name="" id="" class="form-control" >
                            </div>
                            <div class="date_of_birth col-12">
                                <div class="btn-group" style="float:right">
                                    <div class="mr-2">
                                        <button class="btn btn-info">Clear Search</button>
                                    </div>
                                    <div class="ml-2">
                                        <button class="btn btn-info">Search</button>
                                    </div>
                                </div>
                            </div>

                      </div>

                    </div>
                </div>
        
                <div class="card mt-5">
                    <div class="card-header" style="background-color:#2f1b47 !important; color:white; width:100%">
                        <h3 class="text-center">List of Claimants</h3>
                    </div>
                    <div class="card-body">
                    <table class="mt-5 table">
                        <thead class="thead-dark" style="background-color: #343a40; color: white;">
                            <tr>
                                <th>Sr No</th>
                                <th>Claimant Detail</th>
                                <th>Contact Detail</th>
                                <th>Ref. Detail</th>
                                <th>Instructing Party</th>
                                <th>Appointment Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <!-- Add your table body content here -->
                    </table>

                    </div>
                </div>
            </div>
        </div>
   </div>


</div>

@endsection





@section('script')


@endsection
