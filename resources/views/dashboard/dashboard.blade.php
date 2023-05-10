@extends('layouts.app')

@section('style')

<style>
    a{
        text-decoration:none;
    }
</style>

@endsection





@section('content')

<div class="contianer">
    <div class="row">
       
    
       <div class="col-lg-4">

       </div>


       <div class="col-lg-8">

            <div class="row" style="padding:16px !important">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="{{route('start_new_report')}}">Start New Report</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">My Cases</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">My Invoices</a>
                </div>
           
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Setting</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">My Schedular</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Incomplete Cases</a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">My Profile</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">My Account</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Tutorials</a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Support</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Ideas</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Incomplete Clinic Data</a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Awaitting Appointment</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Canceled Patient</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <a href="">Remote Clinic</a>
                </div>
            </div>

       </div>
    </div>
</div>

@endsection





@section('script')



@endsection