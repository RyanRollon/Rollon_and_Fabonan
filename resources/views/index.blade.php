@extends('layouts.app')

@section('design')
<style>
.input-group-prepend span i {
  color: green;
  font-size:23px;
}
.col-sm-4 h6{
  color:green;
  text-align:left;
}
.container h4{
  color:green;
  text-align:left;
}
.container h6{
  color:green;
  text-align:left;
}

     
</style>

<script type="text/javascript">  

$(function() {
  $("#birthdate").datepicker({
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
    <form action="{{  route('index') }}" method="post">
       @csrf
       <div class="row" style="margin-top:15px">
        <div class="col-sm-4">
          <h6>Surname</h6>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" id="surname" name="surname" class="form-control" placeholder="Enter Your Surname"/>
          </div> 
           @error('surname')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror     
         </div>
      
         <div class="col-sm-4">
            <h6>First Name</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter Your First Name" />
            </div> 
            @error('firstname')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror      
        </div>
      
        <div class="col-sm-4">
            <h6>Middle Initial</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Enter Your Middle Initial"/>
            </div>  
            @error('middlename')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror    
        </div>
      
      </div>
      
      <div class="row" style="margin-top:15px">
        <div class="col-sm-4">
            <h6>Birthday</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
              </div>
              <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="Birthday"/>
            </div> 
            @error('birthdate')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror   
         </div>
         <div class="col-sm-4">
            <h6>Age</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" id="age" name="age" class="form-control" placeholder="Age"/>
            </div> 
            @error('age')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror   
        </div>
      </div>
      
      
      
      <div class="row" style="margin-top:15px">
        <h6>Address</h6>
        <div class="col-sm-4">
            <h6>Street Name</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map"></i></span>
              </div>
              <input type="text" id="street" name="street" class="form-control" placeholder="Street Name"/>
            </div> 
            @error('street')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror  
         </div>
         <div class="col-sm-4">
          <h6>City</h6>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-map"></i></span>
            </div>
            <input type="text" id="city" name="city" class="form-control" placeholder="Enter City"/>
          </div> 
          @error('city')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror  
        </div>
        <div class="col-sm-4">
            <h6>Postal Code</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
              </div>
              <input type="text" id="postal" name="postal" class="form-control" placeholder="Enter your Postal Code"/>
            </div> 
            @error('postal')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror  
        </div>
      </div>
      
      
      
      <div class="row" style="margin-top:15px">
        <h6>Contacts</h6>
        <div class="col-sm-4">
            <h6>Phone Number</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter your Postal Code"/>
            </div> 
            @error('phone_number')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror  
         </div>
         <div class="col-sm-4">
            <h6>Mobile Number</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
              </div>
              <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number"/>
            </div>
            @error('mobile_number')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror   
        </div>
        <div class="col-sm-4">
            <h6>Email Address</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" id="email" name="email" class="form-control" placeholder="Enter your Email Address"/>
            </div> 
            @error('email')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror  
        </div>
      </div>
      
      
      <div class="row" style="margin-top:15px">
        <h6>Incase of Emergency Please Contact the following:</h6>
        <div class="col-sm-4">
            <h6>Full Name</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" id="emergency_name" name="emergency_name" class="form-control" placeholder="Enter your Name"/>
            </div>
            @error('emergency_name')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror    
         </div>
         <div class="col-sm-4">
            <h6>Mobile Number</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
              </div>
              <input type="text" id="emergency_number" name="emergency_number" class="form-control" placeholder="Enter Mobile Number"/>
            </div> 
            @error('emergency_number')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror  
        </div>
        <div class="col-sm-4">
            <h6>Relationship</h6>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" id="emergency_relationship" name="emergency_relationship" class="form-control" placeholder="Enter relationship"/>
            </div>
            @error('emergency_relationship')
              <h6 style="color:red"> {{ $message }}</h6>
            @enderror    
        </div>
      </div>
      
          <div class="form-group" style="margin-top:15px; margin-left:336px">
            <button type="submit" class="btn btn-primary w-50">Submit</button>
          </div>
     </form>    
</div>


@endsection