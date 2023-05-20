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
            <h4 class="text-center"  style="color:#2f1b47 !impportant;">Welcome to Medico Legal Report Writing</h4>
            <div class="row" style="padding:16px !important">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="{{route('start_new_report')}}">
                      <img src="{{ asset('/images/1_new.png') }}" alt="">
                    </a>
                     <!-- <a href="{{route('start_new_report')}}">Start New Report</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="{{route('my_cases')}}">
                        <img src="{{ asset('/images/2_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">My Cases</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="{{route('my_invoices')}}">
                        <img src="{{ asset('/images/3_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">My Invoices</a> -->
                </div>
           
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="{{route('setting')}}">
                        <img src="{{ asset('/images/4_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">Setting</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/5_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">My Schedular</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/6_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">Incomplete Cases</a> -->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/7_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">My Profile</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/8_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">My Account</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/9_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">Tutorials</a> -->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/10_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">Support</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/11_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">Ideas</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/12.png') }}" alt="">
                    </a>
                    <!-- <a href="">Incomplete Clinic Data</a> -->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/13.png') }}" alt="">
                    </a>
                    <!-- <a href="">Awaitting Appointment</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/14.png') }}" alt="">
                    </a>
                    <!-- <a href="">Canceled Patient</a> -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <a href="">
                        <img src="{{ asset('/images/remote_clinic_new.png') }}" alt="">
                    </a>
                    <!-- <a href="">Remote Clinic</a> -->
                </div>
            </div>

       </div>
    </div>
</div>

@endsection





@section('script')



@endsection