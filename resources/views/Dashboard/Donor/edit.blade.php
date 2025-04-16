<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>Update Student Form - Laravel 9 CRUD</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

</head>

<body>

<div class="container mt-2">

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left mb-2">

<h2>Update request</h2>

</div>

<div class="pull-right">

<a class="btn btn-primary" href="{{ route('donor_request.index') }}"> Back</a>

</div>

</div>

</div>

@if(session('status'))

<div class="alert alert-success mb-1 mt-1">

{{ session('status') }}

</div>

@endif

<form action="{{ route('donor_request.update',$donor_request->id) }}" method="POST" enctype="multipart/form-data">

@csrf

@method('PUT')

<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">
        
        <strong>Blood group:</strong>
        
        <select name="state" class="form-control">
        
            <option value="">Select group</option>
        
            <option value="A+"  <?php echo ($blood_bank_request->blood_group_id == 'A+' ? 'selected':''); ?> >A+</option>
        
            <option value="A"  <?php echo ($blood_bank_request->blood_group_id == 'A' ? 'selected':''); ?> >A</option>
        
            <option value="B+"  <?php echo ($blood_bank_request->blood_group_id == 'B+' ? 'selected':''); ?>>B+</option>
           
            <option value="B"  <?php echo ($blood_bank_request->blood_group_id == 'B' ? 'selected':''); ?>>B </option>
           
            <option value="O+"  <?php echo ($blood_bank_request->blood_group_id == 'O+' ? 'selected':''); ?>>O+ </option>
            
            <option value="O"  <?php echo ($blood_bank_request->blood_group_id == 'O' ? 'selected':''); ?>>O </option>
            
            <option value="AB+"  <?php echo ($blood_bank_request->blood_group_id == 'AB+' ? 'selected':''); ?>>AB+ </option>
            
            <option value="AB"  <?php echo ($blood_bank_request->blood_group_id == 'AB' ? 'selected':''); ?>>AB </option>
        
        </select>
        
        @error('state')
        
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        
        @enderror
        
        </div>
        
        </div>


<div class="col-xs-6 col-sm-6 col-md-6">

    <button type="submit" class="btn btn-primary ml-3">Update</button>

</div>

</div>

</form>

</body>

</html>