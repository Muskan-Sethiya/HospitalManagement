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
                  <div class="card">
                    <div class="card-body card-margin">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                          {{session()->get('message')}}
                        </div>
                        @endif
                      <h4 class="card-title">Order Status</h4>
                      <div class="">
                        <table class="table-style">
                          <thead align="center">
                            <tr>
                              <th class="input-color font"> Title</th>
                              <th class="input-color font">Topic</th>
                              <th class="input-color font">Description</th>
                              <th class="input-color font">Date</th>
                              <th class="input-color font">Image</th>
                              <th class="input-color font"> Update</th>
                              <th class="input-color font"> Delete</th>
                            </tr>
                          </thead>
                          <tbody style="color: #adadadb0;">
                            @foreach($data as $news)
                            <tr>
                              <td>{{$news->title}}</td>
                              <td>{{$news->topic}}</td>
                              <td>{{$news->description}}</td>
                              <td>{{$news->date}}</td>
                              <td><img height="200" width="200" src="newsimg/{{$news->image}}"></td>
                              <td>
                                <div class="badge badge-outline-primary"><a href="{{url('update_news',$news->id)}}">Update</a></div>
                              </td>
                              <td>
                                <div class="badge badge-outline-danger"><a onclick="return confirm('Are you sure, you want to delete?')" href="{{url('delete_news',$news->id)}}">Delete</a></div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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