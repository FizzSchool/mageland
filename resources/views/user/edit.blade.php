@extends('index')


@section('container')
	<div class="container zerogrid">

	<div class="post">
		<h1> Create user</h1>
		{{ Form::model($user, ['method'=> 'PATCH', 'action'=> ['UserController@update', $user-> user_id]]) }}	

			<!-- Username form -->
			<p>
			{{ Form:: label('Username')}}
			{{ Form:: text('username', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}
			</p>

			<!-- Password form -->
			<p>
			{{ Form:: label('Password')}}
			{{ Form:: text('password', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}
			</p>

			<!-- Email form -->
			<p>
			{{ Form:: label('Email')}}
			{{ Form:: text('email', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}
			</p>

			<!-- Submit -->
			{{ Form:: submit('submit', ['class'=> 'form-control'])}}

		{{ Form::close() }}	

		@if($errors->any())
			@foreach($errors->all() as $error)
				<li>
				{{ $error }}
				</li>
			@endforeach
		@endif

	</div>
	</div>	
	


@stop