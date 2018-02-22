@extends('master')

@section('content')

	<h1>Add Article</h1>
		<form action="/article" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div>
					<label for="name">Title:</label>
					<input type="text" id="title" name="title">
			</div>
			<div>
					<label for="name">Body:</label>
					<input type="textarea" id="body" name="body">
			</div>
			<div class="button">
				 <button type="submit">Add Article</button>
			</div>
		</form>

@endsection
