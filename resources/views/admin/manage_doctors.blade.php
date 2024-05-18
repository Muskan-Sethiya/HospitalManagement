<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-3 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0"></div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body card-margin">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ url('search/doctor') }}" method="GET">
                            <div class="input-group mb-3">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="search" name="query" id="form1" class="form-control input-color" placeholder="Search Doctor" value="{{ old('query', $query ?? '') }}" />
                                </div>
                                <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                                    <i class="fas fa-search"></i>Search
                                </button>
                            </div>
                        </form>
                        <h4 class="card-title">Manage Doctors</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="input-color font">Doctor Name</th>
                                    <th class="input-color font">Email</th>
                                    <th class="input-color font">Phone Number</th>
                                    <th class="input-color font">Speciality</th>
                                    <th class="input-color font">Room Number</th>
                                    <th class="input-color font">Image</th>
                                    <th class="input-color font">Update</th>
                                    <th class="input-color font">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data) && $data->isNotEmpty())
                                    @foreach($data as $doctor)
                                        <tr>
                                            <td>{{ $doctor->doctor_name }}</td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->phone }}</td>
                                            <td>{{ $doctor->speciality }}</td>
                                            <td>{{ $doctor->room_no }}</td>
                                            <td><img height="200" width="200" src="doctorimg/{{ $doctor->image }}"></td>
                                            <td>
                                                <div class="badge badge-outline-primary"><a href="{{ url('update_doctor', $doctor->id) }}">Update</a></div>
                                            </td>
                                            <td>
                                                <div class="badge badge-outline-danger"><a onclick="return confirm('Are you sure, you want to delete?')" href="{{ url('delete_doctor', $doctor->id) }}">Delete</a></div>
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
