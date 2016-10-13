@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>Tags</h3>
		<br>
		<a href="{{ route('admin.tags.create') }}">Create Tag</a>

		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($tags as $tag)
				<tr>
					<td>{{$tag->id}}</td>
					<td>{{$tag->name}}</td>
					<td>
						<a href="{{ route('admin.tags.edit', ['id'=>$tag->id]) }}" class="btn btn-primary">Edit</a>
						<a href="{{ route('admin.tags.destroy', ['id'=>$tag->id]) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection