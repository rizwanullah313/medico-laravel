@extends('layouts.app')


@section('style')

<style>

</style>

@endsection



@section('content')

<div class="container">
   
   <div class="row">
       
        
        <div class="col-lg-10">
            <div class="row">
                <a href="{{route('show_dashboard')}}"><button class="btn btn-info" style="width:100px">Go Back</button></a>
                <div class="card">
                    <div class="card-header" style="background-color:#2f1b47 !important; color:white; width:100%">
                        <h3 class="text-center">Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-4">
                                <a href="{{route('show_dashboard')}}"><img src="{{ asset('/images/go_back.png') }}" alt=""></a>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{route('define_solicitor')}}"><img src="{{ asset('/images/add_solicitor.png') }}" alt=""></a>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{route('define_locations')}}"><img src="{{ asset('/images/add_locations.png') }}" alt=""></a>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{route('define_expert_procedures')}}"><img src="{{ asset('/images/Add_procedures.png') }}" alt=""></a>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{route('add_referrer')}}"><img src="{{ asset('/images/add_agencies.png') }}" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
        
              

            </div>
        </div>
   </div>

</div>

@endsection





@section('script')


@endsection
