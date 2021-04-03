@extends("theme")

@section("content")

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;"><MARQUEE style="font-family: Georgia, 'Times New Roman', Times, serif;">
        Emergency   :  0484 224 2935 &nbsp; Telemedicine   :  +918547029350 Ambulance   :  0484 290 5500  Appointments   :  0484 290 5111, 7184111</MARQUEE>  </a>
     
      </div>
  </nav>
    
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> 
            
        </div>

    
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> 
            <br>
            <h1>
                Enquiry/Feedback
            </h1>
            <br>
            <table class="table">
              <br>
                <input type="text" class="form-control" placeholder="Enter your Name"><br>
                <input type="email" class="form-control" placeholder="Email"><br>
                <input type="text" class="form-control" placeholder="Address"><br>
                <input type="text" class="form-control" placeholder="Contact No"><br>
                <textarea type="text" class="form-control" placeholder="Feedback"></textarea><br>
                <br>
                <button class="btn btn-success">Submit</button>
            </table>
        </div>

@endsection