@extends('layouts.app')


@section('style')

<style>
  

</style>

@endsection



@section('content')

<div class="container">
   
   <div class="row">
        
        <div class="col-lg-2">
      
        </div>
   
       
      <div class="col-lg-6">
        <div class="row">
          
        <a href="{{route('show_dashboard')}}"><button class="btn btn-info" style="width:100px">Go Back</button></a>
           <div class="card">
               <div class="card-header" style="background-color:#2f1b47 !important; color:white; width:100%">
                   <h3 class="text-center">Search Form</h3>
               </div>
               <div class="card-body">
                 
                 <div class="main">
                    <div class="date_form" style="display:flex;flex-wrap:wrap">
                        <div>
                            <label for="" class="label">Date Form.</label>
                        </div>
                        <div>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="date_form" style="display:flex;flex-wrap:wrap">
                        <div>
                            <label for="" class="label">Date To.</label>
                        </div>
                        <div>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                    </div>

                    <div class="date_form" style="display:flex;flex-wrap:wrap">
                        <div>
                            <label for="" class="label">Please Select.</label>
                        </div>
                        <div style="display:flex;flex-wrap:wrap">
                            <div>
                              <button class="btn btn-info">Pending.</button>
                            </div>
                            <div>
                              <button class="btn btn-info">Received.</button>
                            </div>
                        </div>
                    </div>

                    <div>
                      <button class="btn btn-info" style="float:right">Search</button>
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

</script>

</script>
@endsection
