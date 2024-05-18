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
                      <h4 class="card-title">All Contacts</h4>
                      <div>
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="input-color font"> Name </th>
                              <th class="input-color font">Email </th>
                              <th class="input-color font"> Subject</th>   
                              <th class="input-color font">Message</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($contactinfo as $contact)
                            <tr>
                              <td>{{$contact->fullName}}</td>
                              <td>{{$contact->email}}</td>
                              <td>{{$contact->subject}}</td>
                              <td>{{$contact->message}}</td>
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