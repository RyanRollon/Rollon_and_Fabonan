@extends('layouts.app')


@section('design')
<style>
    label.btn.btn-secondary{
        background: transparent;
        color: #000;
        border:none;
    }
   input[type="radio"]{
    visibility:hidden;
    }        
    label.btn.btn-secondary:hover{
        background: #4fac9c;
    }  
</style>
<script type="text/javascript">  
    $(function() {
        $("#appointment").datepicker({
        todayHighlight: true,
        autoclose: true,
        dateFormat: 'mm/dd/yy',
        beforeShow: function (input, inst) {
        var rect = input.getBoundingClientRect();
        setTimeout(function () {
	        inst.dpDiv.css({ top: rect.top + 40, left: rect.left + 0 });
        }, 0);
        }
      });   
    });
</script>   
    

@endsection

@section('content')

<div class="container my-5 py-3 px-5">
    <form id="detailsinfo" novalidate>
    <div class="row justify-content-center">
            <div class="col-sm-6 shadow">
                <h1 class="primary"><b>BOOKING DETAILS</b></h1>
                 <p><b>Fill up the need infomation to continue</b></p>
                <div class="form-group">
                     <label class="form-label primary" for="appointment"><b>Appointment Date </b><i id="appointment-error"  style="display: none"></i></label>
                        <div class="form-outline mb-4">
                            
                             <input type="text" id="appointment" name="appointment" class="form-control" placeholder="Select Date" />
                        </div>
                 </div>
                <div>
    
                     <p><b>Morning</b></p><i id="timesched-error" style="display: none"></i></div>
            
                 <div class="form-group">
                     <div class="btn-group btn-group-toggle row shadow" data-toggle="buttons">
                        <label class="btn btn-secondary col-sm-3 mt-2 change">
                          <input type="radio" id="08:30 AM" name="timesched" autocomplete="off" value="08:30 AM" > <span class="fas fa-clock"></span> 08:30 AM
    
                        </label>
                       <label class="btn btn-secondary col-sm-3 mt-2 ">
                          <input type="radio" id="09:00 AM" name="timesched" autocomplete="off" value="09:00 AM" > <span class="fas fa-clock"></span> 09:00 AM
        
                       </label>
                       <label class="btn btn-secondary col-sm-3 mt-2 ">
                           <input type="radio" id="09:30AM" name="timesched" autocomplete="off" value="09:30 AM" > <span class="fas fa-clock"></span> 09:30 AM
                       </label>
                       <label class="btn btn-secondary col-sm-3 mt-2 ">
                           <input type="radio" id="10:00AM" name="timesched" autocomplete="off" value="10:00 AM" > <span class="fas fa-clock"></span> 10:00 AM
                       </label>
                       <label class="btn btn-secondary col-sm-3 mt-2">
                          <input type="radio" id="10:30AM" name="timesched" autocomplete="off" value="10:30 AM" > <span class="fas fa-clock"></span> 10:30 AM
                       </label>
                       <label class="btn btn-secondary col-sm-3 mt-2">
                         <input type="radio" id="11:00AM" name="timesched" autocomplete="off" value="11:00 AM" > <span class="fas fa-clock"></span> 11:00 AM
                       </label>
                       <label class="btn btn-secondary col-sm-3 mt-2">
                          <input type="radio" id="11:30AM" name="timesched" autocomplete="off" value="11:30 AM" > <span class="fas fa-clock"></span> 11:30 AM
                         </label>
                       <label class="btn btn-secondary col-sm-3 mt-2">
                           <input type="radio" id="12:00AM" name="timesched" autocomplete="off" value="12:00 AM" > <span class="fas fa-clock"></span> 12:00 AM
                      </label>
                     </div>
                  </div>

                  <p class="mt-3"><b>Evening</b></p>
                    
                    <div class="form-group">
                        <div class="btn-group btn-group-toggle row shadow" data-toggle="buttons">
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                  <input type="radio" name="timesched" id="12:30NN" onClick="jQuery(this).toggleClass('active')" value="12:30 NN"> <span class="fas fa-clock"></span> 12:30 NN
                            </label>
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                  <input type="radio" name="timesched" id="01:00PM" autocomplete="off" value="01:00 PM"> <span class="fas fa-clock"></span> 01:00 PM
                            </label>
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                 <input type="radio" name="timesched" id="01:30PM" autocomplete="off" value="01:30 PM"> <span class="fas fa-clock"></span> 01:30 PM
                            </label>
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                <input type="radio" name="timesched" id="02:00PM" autocomplete="off" value="02:00 PM"> <span class="fas fa-clock"></span> 02:00 PM
                             </label>
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                 <input type="radio" name="timesched" id="02:30PM" autocomplete="off" value="02:30 PM"> <span class="fas fa-clock"></span> 02:30 PM
                            </label>
                             <label class="btn btn-secondary col-sm-3 mt-2">
                                <input type="radio" name="timesched" id="03:00PM" autocomplete="off" value="03:00 PM"> <span class="fas fa-clock"></span> 03:00 PM
                             </label>
                             <label class="btn btn-secondary col-sm-3 mt-2">
                                <input type="radio" name="timesched" id="03:30PM" autocomplete="off" value="03:30 PM"> <span class="fas fa-clock"></span> 03:30 PM
                            </label>
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                <input type="radio" name="timesched" id="04:00PM" autocomplete="off" value="04:00 PM"> <span class="fas fa-clock"></span> 04:00 PM
                             </label>
                            <label class="btn btn-secondary col-sm-3 mt-2">
                                <input type="radio" name="timesched" id="04:30PM" autocomplete="off" value="04:30 PM"> <span class="fas fa-clock"></span> 04:30 PM
                            </label>
                             <label class="btn btn-secondary col-sm-3 mt-2">
                                 <input type="radio" name="timesched" id="05:00PM" autocomplete="off" value="05:00 PM"> <span class="fas fa-clock"></span> 05:00 PM
                             </label>
                             <label class="btn btn-secondary col-sm-3 mt-2">
                                 <input type="radio" name="timesched" id="05:30PM" autocomplete="off" value="05:30 PM"> <span class="fas fa-clock"></span> 05:30 PM
                             </label>
                             <label class="btn btn-secondary col-sm-3 mt-2">
                                <input type="radio" name="timesched" id="06:00PM" autocomplete="off" value="06:00 PM"> <span class="fas fa-clock"></span> 06:00 PM
                            </label>
                        </div>
                    </div>
    
                   
                    <p class="mt-3"><b>Service Type</b></p>
                     <div class="form-group" style="margin-bottom:15px">
                         <label class="form-label primary" for="service_type"><b>Service Type</b> <i id="service_type-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
                            <select name="service_type" id="service_type" class="form-control">
                                <option>Choose Here</option>
                                <option name="service_type" value="in-lounge">In-lounge</option>
                                 <option name="service_type" value="home-service">Home Service</option>
                            </select>
                     </div>
                     <div class="form-group" style="margin-bottom:15px">
                        <label class="form-label primary" for="service_category"><b> Service Category </b><i id="service_category-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
                             <select name="service_category" id="service_category" class="form-control">
                                 <option>Choose Here</option>
                                 <option value="1">LASH</option>
                                 <option value="2">WAX</option>
                                 <option value="3">NAILS</option>
                                 <option value="4">FOOT SPA</option>
                                 <option value="5">PARAFFIN</option>
                                <option value="6">KIDDIE</option>
                            </select>
                    </div>
                    <div class="form-group" style="margin-bottom:15px">
                       <label class="form-label primary" for="specific_service"><b>Specific Service </b><i id="specific_service-error" class="fas fa-exclamation-circle error" style="display: none"></i></label>
                          <select name="specific_service" id="specific_service" class="form-control ">
                             <option id="tabledfetch">Choose Here</option>
                          </select>
                    </div>
                </div>
            </div>
                 <div class="row justify-content-center">
                    <div class="col-sm-12 text-center">
                        <a id="detailsinfobtn" class="btn btn-primary w-50">Next</a>
                    </div>
                </div>
            </div>
    </form>
</div>


@endsection