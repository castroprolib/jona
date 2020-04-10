@extends('layouts.app')



@section('content')



<div class="offset-2 col-10">

	<br>
	<br>

	<div class="col-6 bg-primary">

		<h1 class="text-white">Users</h1>

	</div>

	<div class="col-6">

		<p class="text-info">Usuarios registrados en la plataforma</p>

	</div>
	<hr>


	@if(count($users) > 0)

	@foreach($users as $user)


	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Country</th>
				<th>State</th>
				<th>Created_at</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->role->role}}</td>
				<td>{{$user->country->country}}</td>
				<td>{{$user->state->state}}</td>
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