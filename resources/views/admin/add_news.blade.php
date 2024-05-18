<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
    .custom-textarea {
        width: 810px;
        height: 170px;
    }
</style>
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
         
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add News</h4>
                <p class="card-description">
                  @if(session()->has('message'))
                
                      <div class="alert alert-success">
                        {{-- <button type="button" class="close" data-dismiss="alert">
                          x
                        </button> --}}
                          {{ session('message') }}
                      </div>
                    
                  @endif
              </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">News Title</label>
                    <input type="text" name="title" class="form-control input-color" id="exampleInputName1" placeholder="Enter Title Here">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">News Topic</label>
                    <input type="text" name="topic" class="form-control input-color" id="exampleInputEmail3" placeholder="Enter News Topic">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Description</label>
                  
                  <textarea type="text" name="description" rows="10" cols="10" class="form-control input-color custom-textarea" id="exampleInputPassword4" placeholder="Write Your Description Here"></textarea>
                  
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Date</label>
                    <input type="date" class="form-control input-color" name="newsdate">
                  </div> 

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="img" >
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
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