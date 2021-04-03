@extends("theme")

@section("content")

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;"><MARQUEE style="font-family: Georgia, 'Times New Roman', Times, serif;">
        Emergency   :  0484 224 2935 &nbsp; Telemedicine   :  +918547029350 Ambulance   :  0484 290 5500  Appointments   :  0484 290 5111, 7184111</MARQUEE>  </a>
     
      </div>
  </nav>
    


    <div class="container">
        <div class="row">
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <h1><center>Get In touch</center></h1>
                <h3>
                    General Info
                </h3>
                Phone No:- +91 484 2660000
                           +91 9946001005
                Email:-enquiry@cityhospital.in
                        patientrelations@amigohospital.in

                      <h3>  For International Enquiries </h3>
                        Phone no:-  +91 9946001005
                                    sghinternational@amigohospital.in
                                    www.amigohospital.in
                        <h3>Address</h3>
                        Amigo Hospital, Seaport – Airport Road, Kakkanad, Kochi 682 030, Kerala, India
                        
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <h1>Contact Form</h1>
                <table class="table table-borderless">
                    <tr>
                        <td><input type="text" class="form-control" placeholder="Enter your name"></td>
                    </tr>
                    <tr>
                        <td><input type="email" class="form-control" placeholder="Enter your Email"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="Enter your Phone number"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="Subject"></td>
                    </tr>
                    <tr>
                        <td><testarea id="Messege"  Name="Messege" row="4" col="30"></testarea></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection