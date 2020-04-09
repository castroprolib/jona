@extends('layouts.app')



@section('content')

<br>
<br>
<br>
<br>


<div class="offset-2 col-8">

	<h1 class="text-center">Users</h1>
	<hr>

	@if(count($users) > 0)

	@foreach($users as $user)


	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created_at</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->created_at}}</td>
				<td>
					<a href="{{$user->id}}" class="btn btn-primary">View</a>
					<a href="{{$user->id}}" class="btn btn-success">Edit</a>
					<a href="{{$user->id}}" class="btn btn-danger">Delete</a>

				</td>
			</tr>

		</tbody>
	</table>


	@endforeach

	@endif

</div>

@endsection