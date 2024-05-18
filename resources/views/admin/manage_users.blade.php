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
                    <div class="card-body">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                          {{session()->get('message')}}
                        </div>
                        @endif
                      <h4 class="card-title">Manage All User</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="input-color font"> Name </th>
                              <th class="input-color font">Email </th>
                              <th class="input-color font"> Phone Number</th>
                              <th class="input-color font"> Address</th>   
                              <th class="input-color font"> Update</th>
                              <th class="input-color font"> Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->address}}</td>
                                <td>
                                    <div class="badge badge-outline-primary"><a href="{{url('update_user',$user->id)}}">Update</a></div>
                                </td>
                                <td>
                                    <div class="badge badge-outline-danger"><a onclick="return confirm('Are you sure, you want to delete?')" href="{{url('delete_user',$user->id)}}">Delete</a></div>
                                </td>
                            </tr>
                        @endforeach
                        
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