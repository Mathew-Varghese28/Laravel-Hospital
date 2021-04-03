@extends("theme")

@section("content")
<body background="https://images.pexels.com/photos/4386466/pexels-photo-4386466.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

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
            Consulting Form
            </h1>
            <br>
            <table class="table">
                <input type="text" class="form-control" placeholder="Enter your Name">
                <br>
                <input type="email" class="form-control" placeholder="Email">
                <br>
                <input type="text" class="form-control" placeholder="Address">
                <br>
                <input type="text" class="form-control" placeholder="Contact No">
                <br>
                <input type="text" class="form-control" placeholder="Name of Doctor">
                <br>
                <input type="date" class="form-control" placeholder="Date of Appointment">
                <br>
                <input type="text" class="form-control" placeholder="Time">
                
                <br>
                <button class="btn btn-success">Submit</button>
                <br>
                <label >
                   <b>**Your Cunsulting link will send by SMS or by Email**</b> 
                </label>  
            </table>
        </div>
</body>        

@endsection