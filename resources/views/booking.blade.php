@extends("theme")

@section("content")


  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;"><MARQUEE style="font-family: Georgia, 'Times New Roman', Times, serif;">
        Emergency   :  0484 224 2935 &nbsp; Telemedicine   :  +918547029350 Ambulance   :  0484 290 5500  Appointments   :  0484 290 5111, 7184111</MARQUEE>  </a>
     
      </div>
  </nav>
    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><center>BOOKING DETAILS</center></h1>
    <div class="container">
        <div class="row">
    
        <table class="table">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="first name" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="last name" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="abc@gmail.com" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">City</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">State</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">kerala</option>
                    <option>Banglor</option>
                    <option>Mumbai</option>
                    <option>Delhi</option>
                    <option>Kerala</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">Department</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="name the department" required>
                    <div class="invalid-feedback">
                      
                    </div>
                  </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Payment</button>
                </div>
              </form>
        </table>
            
            
           
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                
                <address style="font-family: Georgia, 'Times New Roman', Times, serif;">
                    Amigo Hospital <br>
                    Phone Number : +91- 4869 - 232203<br>
                    Cochin <br>
                    Aluva-Kalamasery Road<br>
                    Eranakulam,Kerala<br>
                    685531 India 
                </address>
            </div>
            
            
        </div>
    </div>
    
@endsection