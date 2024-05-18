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
              @foreach ($doctor as $doctors)
              <option value="{{$doctors->doctor_name}}">{{$doctors->doctor_name}} - {{$doctors->speciality}}</option>
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
    </div>
  </div>