@include('user.header')

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> with a doctors</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>One</span>-Health Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>One</span>-Health Pharmacy</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
          <div class="text-lg">
            <p>Our state-of-the-art facility is equipped with the latest medical technologies and amenities to offer you the highest standards of medical treatment. Whether you're seeking routine check-ups, specialized treatments, or emergency care, you can trust us to deliver excellence in healthcare.</p>
            <p>At Your Health Center, we believe in empowering our patients with knowledge and support to make informed decisions about their health. From preventive care and wellness programs to advanced medical treatments, we offer comprehensive services to promote your overall well-being.</p>
            <P>Whether you are visiting us for a routine appointment or seeking specialized medical care, we welcome you to Your Health Center with open arms. Trust us to be your partner in health and wellness, and together, we can achieve optimal health outcomes for you and your loved ones.</P>
          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
          <div class="row justify-content-center">
            @foreach($latestdoctor as $latestdoctors)
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{URL::asset('doctorimg/'.$latestdoctors->image)}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{$latestdoctors->doctor_name}}</p>
                  <span class="text-sm text-grey">{{$latestdoctors->speciality}}</span>
                </div>
              </div>
            </div>
        @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- .banner-home -->

 @include('user.footer')