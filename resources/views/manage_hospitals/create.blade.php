<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>Add Student Form - Laravel 9 CRUD</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

</head>

<body>

<div class="container mt-2">

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left mb-2">

<h2>اضافة مستشفى</h2>

</div>

<div class="pull-right">

<a class="btn btn-primary" href="{{ route('manage_hospital.index') }}"> Back</a>

</div>

</div>

</div>

@if(session('status'))

<div class="alert alert-success mb-1 mt-1">

{{ session('status') }}

</div>

@endif

<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="row">

<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>First Name:</strong>

<input type="text" name="first_name" class="form-control" placeholder="First Name">

@error('first_name')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>

<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>Last Name:</strong>

<input type="text" name="last_name" class="form-control" placeholder="Last Name">

@error('last_name')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>

<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>Student Email:</strong>

<input type="email" name="email" class="form-control" placeholder="Student Email">

@error('email')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>

<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>Phone:</strong>

<input type="number" name="phone_number" class="form-control" placeholder="Enter Phone">

@error('phone_number')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>



<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>DOB:</strong>

<input type="date" name="date_of_birth" class="form-control" placeholder="Enter dob">

@error('date_of_birth')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>

<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>Gender:</strong>

  <label> <input type="radio" name="gender" value="1" >Male</lable>

  <label> <input type="radio" name="gender" value="2">Female</lable>

@error('gender')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>

<div class="col-xs-6 col-sm-6 col-md-6">

<div class="form-group">

<strong>State:</strong>

<select name="state" class="form-control">

    <option value="">Select State</option>

    <option value="Andhra Pradesh">Andhra Pradesh</option>

    <option value="Arunachal Pradesh">Arunachal Pradesh</option>

    <option value="Assam ">Assam </option>

</select>

@error('state')

<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

@enderror

</div>

</div>

<div class="col-xs-6 col-sm-6 col-md-6">

    <button type="submit" class="btn btn-primary ml-3">Submit</button>

</div>

</div>

</form>

</body>

</html>