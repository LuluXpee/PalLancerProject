@extends('layouts.page')

@section('content') 

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(../../images/banner/4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Book A Room</h1>
              <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Booking</span></div>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="{{ route('booking.store') }}" class="p-5 bg-white">
              

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" placeholder="Last Name">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date">Check In Date</label> 
                  <input type="text" id="date" class="form-control datepicker px-2" placeholder="Date of check in">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date">Check Out Date</label> 
                  <input type="text" id="date" class="form-control datepicker px-2" placeholder="Date of check out">
                </div>
              </div>

              <div class="row form-group">
              <div class="col-md-6">
                  <label class="text-black" for="email">Mobile Number</label> 
                  <input type="email" id="email" class="form-control" placeholder="mobile number">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
                </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">How Many Person</label> 
                  <select name="treatment" id="treatment" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5+</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">Room Type</label> 
                  <select name="treatment" id="treatment" class="form-control">
                    <option value="">Royal Suit</option>
                    <option value="">Deluex Suit</option>
                    <option value="">Single Room</option>
                   
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="note">Notes</label> 
                  <textarea name="note" id="note" cols="30" rows="5" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            
            
            <div class="p-4 mb-3 bg-white">
              <img src="{{ asset('images/banner/2.jpg')}}" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>

    @endsection