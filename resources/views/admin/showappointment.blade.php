<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-3 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body card-margin">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                          {{session()->get('message')}}
                        </div>
                        @endif
                        <form action="{{ url('search/patient') }}" method="GET">
                          <div class="input-group mb-3">
                              <div class="form-outline" data-mdb-input-init>
                                  <input type="search" name="query" id="form1" class="form-control input-color" placeholder="Search Doctor" value="{{ old('query', $query ?? '') }}" />
                              </div>
                              <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                                  <i class="fas fa-search"></i>Search
                              </button>
                          </div>
                      </form>
                      <h4 class="card-title">Appointmet Status</h4>
                      <div class="table-responsive">
                        <table class="table-style" style="line-height: 3.5">
                          <thead>
                            <tr>
                              <th class="input-color font"> Patient Name </th>
                              <th class="input-color font">Email </th>
                              <th class="input-color font"> Appointment Date</th>
                              <th class="input-color font"> Phone Number</th>
                              <th class="input-color font">Doctor Name</th>
                              <th class="input-color font">Message</th>
                              <th class="input-color font"> Status </th>
                              <th class="input-color font"> Approve</th>
                              <th class="input-color font"> Cancel</th>
                            </tr>
                          </thead>
                          <tbody style="color: #adadadb0;">
                            @if(isset($data) && $data->isNotEmpty())
                            @foreach($data as $appoint)
                            <tr>
                              <td>{{$appoint->name}}</td>
                              <td>{{$appoint->email}}</td>
                              <td>{{$appoint->date}}</td>
                              <td>{{$appoint->phone}}</td>
                              <td>{{$appoint->doctor}}</td>
                              <td>{{$appoint->message}}</td>
                              <td>{{$appoint->status}}</td>
                              <td>
                                <div class="badge badge-outline-success"><a href="{{url('approved',$appoint->id)}}">Approved</a></div>
                              </td>
                              <td>
                                <div class="badge badge-outline-danger"><a href="{{url('cancelled',$appoint->id)}}">Cancel</a></div>
                              </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">No results found for '{{ $query }}'</td>
                            </tr>
                        @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         
          </div>
          <!-- partial -->
        <!-- main-panel ends -->
    <!-- container-scroller -->
   @include('admin.js')
  </body>
</html>