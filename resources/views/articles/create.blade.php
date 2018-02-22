@extends('master')

@section('content')

	<h1>Add Article</h1>
		<form action="article" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

			<div>
				<label for="name">Category:</label>
				<select class="dropdown" name="category" onchange="">
				<option value="fcgroningen">FC Groningen</option>
				<option value="cryptovaluta">Cryptovaluta</option>
				<option value="trump">Trump</option>
				</select>
			</div>
			<div>
					<label for="name">Title:</label>
					<input type="text" id="title" name="title">
			</div>
			<div>
					<label for="name">Blog:</label>
					<input type="textarea" id="body" name="body">
			</div>
			<div class="button">
				 <button type="submit">Add Article</button>
			</div>
		</form>

@endsection
