@include('user.header')
@if(session()->has('message'))
<div class="alert alert-success">
  {{session()->get('message')}}
</div>
@endif
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
           @foreach($doctor1 as $doctors1)
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{URL::asset('doctorimg/'.$doctors1->image)}}" height="300px" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{$doctors1->doctor_name}}</p>
                  <span class="text-sm text-grey">{{$doctors1->speciality}}</span>
                </div>
              </div>
            </div>
@endforeach
          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
     <form class="main-form" action="" method="POST">
      @csrf
      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" class="form-control" name="username" placeholder="Full name">
          @error('uname')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" class="form-control" name="email" placeholder="Email address..">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" class="form-control" name="date">
          @error('date')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="departement" class="custom-select">
            <option>---Select Doctor---</option>
            @foreach ($doctor1 as $doctors1)
            <option value="{{$doctors1->doctor_name}}">{{$doctors1->doctor_name}} - {{$doctors1->speciality}}</option>
            @endforeach
          </select>
          @error('doctor')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
    </form>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
 <!-- .banner-home -->
@include('user.footer')