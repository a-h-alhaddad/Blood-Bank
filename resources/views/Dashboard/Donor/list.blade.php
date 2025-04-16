<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

        <div class="container mt-2">

        <div class="row">

        <div class="col-lg-12 margin-tb">

        <div class="pull-left">

        <h2>Laravel 9 CRUD Example Tutorial</h2>

        </div>

        <div class="pull-right mb-2">

        <a class="btn btn-success" href="{{ route('donor_request.create') }}"> Request </a>

        </div>

        </div>

        </div>

        @if ($message = Session::get('success'))

        <div class="alert alert-success">

        <p>{{ $message }}</p>

        </div>

        @endif

        <table class="table table-bordered">

        <tr>

        <th>Request number</th>

        <th>Blood group</th>
        
        <th>Date</th>

        

        <th width="280px">Action</th>

        </tr>

        @foreach ($Donor_request as $d)

        <tr>

        <td>{{ $d->id }}</td>

        <td>{{ $d->blood_group_id }}</td>

        <td>{{ $d->date }}</td>

        <td>

        <form action="{{ route('donor_request.destroy',$d->id) }}" method="Post">

        <a class="btn btn-primary" href="{{ route('donor_request.show',$d->id) }}">show</a>

        <a class="btn btn-primary" href="{{ route('donor_request.edit',$d->id) }}">Edit</a>

                @csrf

                 @method('DELETE')

                 <button type="submit" class="btn btn-danger">Delete</button>

        </form>

        </td>

        </tr>

        @endforeach

        </table>

</body>
</html>