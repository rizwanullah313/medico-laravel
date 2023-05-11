@extends('layouts.app')


@section('style')

<style>
   .editable-text {
      border: 1px solid #ccc;
      padding: 10px;
      min-height: 200px;
    }
</style>

@endsection



@section('content')

<div class="container">
   
   <div class="row">
   <div class="col-lg-2">
      
      </div>
   
       
      <div class="col-lg-10">
        <div class="row">
           <div class="card">
               <div class="card-header" style="background-color:#2f1b47 !important; color:white; width:100%">
                   <h3 class="text-center">Add Client</h3>
                   <p class="text-center">[Register Client by entering general information.]</p>
               </div>
               <div class="card-body">
                 
                  <div style="background-color:#6f4792 !important; color:white" class="col-lg-3">
                     <h4 class="mt-4" >Case Instructing Party</h4>
                  </div>

                  <div class="col-lg-6">
                     <div class="row">
                       
                        <div class="col-lg-12 btn-group" role="group" style="display:flex;flex-wrap:wrap;padding:10px;">
                            <h5>Please Select</h5>
                            <button type="radio" class="btn btn-success" name="agency_btn">Agency.</button>
                            <button type="radio" class="btn btn-success" name="agency_btn">Solicator.</button>
                            <button type="radio" class="btn btn-success" name="agency_btn">Solicator via Agency.</button>
                        </div>
                     </div>
                  </div>

                 <div style="display:flex; flex-wrap:wrap">

                     <div style="display:flex; flex-wrap:wrap">
                        <div>
                           <h5>Agency</h5>
                        </div>
                        <div>
                        <select name="" id="">
                              <option value="">test</option>
                           </select>
                        </div>
                        <div>
                           <button class="btn btn-primary">Add</button>
                        </div>
                     </div>

                     <div style="display:flex; flex-wrap:wrap">
                     <div>
                        <h5>Agency Ref</h5>
                     </div>
                     <div>
                        <input type="text" name="" id="">
                     </div>
                     </div>

                 </div>

                  <div style="display:flex; flex-wrap:wrap">

                    <div style="display:flex; flex-wrap:wrap">
                        <div>
                           <h5>Solicator</h5>
                        </div>
                        <div>
                           <select name="" id="">
                              <option value="">test</option>
                           </select>
                        </div>         
                        <div>
                           <button class="btn btn-primary">Add</button>
                        </div>
                    </div>

                    <div style="display:flex; flex-wrap:wrap">
                        <div>
                           <h5>Solicitor Ref</h5>
                        </div>
                        <div>
                           <input type="text" name="" id="">
                        </div>
                    </div>

                  </div>

                  <div style="display:flex; flex-wrap:wrap">
                     
                  <div style="display:flex;flex-wrap:wrap;padding:10px;">
                        <div>
                           <h5>Medco Ref</h5>
                        </div>
                        <div>
                           <input type="number" class="form-control" name="" id="">
                           </div>
                     </div>

                     <div style="display:flex;flex-wrap:wrap;padding:10px;">
                        <div>
                           <h5>Medco Patient</h5>
                        </div>
                        <div>
                           <div class="col-lg-12 btn-group" role="group" style="display:flex;flex-wrap:wrap;">
                            <button type="radio" class="btn btn-success" name="medco_patient1">Yes</button>
                            <button type="radio" class="btn btn-success" name="medco_patient1">No</button>
                           </div>
                        </div>
                     </div>

                  </div>


                  <div style="background-color:#6f4792 !important; color:white" class="col-lg-3">
                     <h4 class="mt-4" >Client Detail</h4>
                  </div>

                  <div class="col-lg-6">
                     <div class="row">
                       
                        <div class="col-lg-12 btn-group" role="group" style="display:flex;flex-wrap:wrap;padding:10px;">
                            <h5>Title</h5>
                            <button type="radio" class="btn btn-success" name="title">Mr.</button>
                            <button type="radio" class="btn btn-success" name="title">Mrs.</button>
                            <button type="radio" class="btn btn-success" name="title">Miss.</button>
                            <button type="radio" class="btn btn-success" name="title">Ms.</button>
                            <button type="radio" class="btn btn-success" name="title">Master.</button>

                        </div>
                     </div>
                  </div>


                  <div class="col-lg-6" style="display:flex; flex-wrap:wrap;">
                     <div>
                          <label for="">Forename</label>
                     </div>
                     <div>
                        <input type="text" name="" id="" class="form-control" >
                     </div>
                  </div>



                  <div class="col-lg-6" style="display:flex; flex-wrap:wrap;">
                     <div>
                        <label for="">Date Of Birth</label>
                     </div>
                     <div>
                        <input type="date" name="" id="" class="form-control" >
                     </div>
                  </div>


                  <div class="col-lg-6" style="display:flex; flex-wrap:wrap;">
                     <div>
                        <label for="">Corr. Email</label>
                     </div>
                     <div>
                        <input type="email" name="" id="" class="form-control" >
                     </div>
                  </div>

                  <div style="background-color:#6f4792 !important; color:white" class="col-lg-3">
                     <h4 class="mt-4" >Contact Detail</h4>
                  </div>

                  <div class="col-lg-12" style="display:flex; flex-wrap:wrap;">
                     <div>
                        <label for="">Address</label>
                     </div>
                     <div>
                        <input type="text" name="" id="" class="form-control" style="width:100%" >
                     </div>
                  </div>


                  <div class="col-lg-12" style="display:flex; flex-wrap:wrap;justify-content:space-between;">

                      <div style="display:flex; flex-wrap:wrap;">
                        <div>
                           <label for="">PostCode</label>
                        </div>
                        <div>
                           <input type="text" name="" id="">
                        </div>
                      </div>

                      <div style="display:flex; flex-wrap:wrap;">
                        <div>
                           <label for="">Contact No</label>
                        </div>
                        <div>
                           <input type="text" name="" id="">
                        </div>
                      </div>

                  </div>


                  <div style="background-color:#6f4792 !important; color:white" class="col-lg-3">
                     <h4 class="mt-4" >Case Detail</h4>
                  </div>


                  <div style="display:flex; flex-wrap:wrap;">
                      <div>
                         <label for="">Date Of Accident</label>
                      </div>
                      <div>
                        <input type="date" name="" id="" class="form-control" >
                      </div>
                  </div>


                  <div style="display:flex; flex-wrap:wrap">
                      <div>
                        <label for="">Hospital Record Needs To Be Reviewed</label>
                      </div>
                      
                      <div class="btn-group" role="group" style="display:flex;flex-wrap:wrap;">
                            <button type="radio" class="btn btn-success" name="yes_no1">Yes</button>
                            <button type="radio" class="btn btn-success" name="yes_no1">No</button>
                        </div>
                  </div>

                  <div style="display:flex; flex-wrap:wrap">
                      <div>
                        <label for="">GP Record Needs To Be Reviewed</label>
                      </div>
                      
                      <div class="btn-group" role="group" style="display:flex;flex-wrap:wrap;">
                            <button type="radio" class="btn btn-success" name="yes_no2">Yes</button>
                            <button type="radio" class="btn btn-success" name="yes_no2">No</button>
                        </div>
                  </div>

                  <div style="display:flex; flex-wrap:wrap">
                      <div>
                        <label for="">Accident Circumstances</label>
                      </div>
                      
                      <div>
                           <textarea></textarea>
                      </div>
                  </div>

                  <div style="display:flex; flex-wrap:wrap">
                      <div>
                        <label for="">Any Special Note</label>
                      </div>
                      
                      <div>
                      <textarea></textarea>
                      </div>
                  </div>



                  <div style="display:flex; flex-wrap:wrap; padding:10px; margin:10px; float:right">
                    <button id="save-patient-btn" class="btn btn-primary" type="submit" onclick="saved_record();">Save Patient Detail And Continue Later</button>
                     <button class="btn btn-primary" type="submit">Continue With Report Writing</button>
                  </div>

               </div>
           </div>
        </div>
      </div>
   </div>


</div>

@endsection





@section('script')

<script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 400,
      plugins: 'advlist autolink lists link image imagetools charmap print preview anchor',
      toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | link image',
      menubar: false
    });
  </script>
@endsection
