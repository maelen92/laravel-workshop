@extends('main')

@section('title','| new Post')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>New Post</h1>
		<hr>
		{!! Form::open(['route' => 'posts.store']) !!}
		    {{ Form::label('title','Title:') }}
		    {{ Form::text('title',null,array('class' => 'form-control')) }}

		    {{ Form::label('body','Message:') }}
		    {{ Form::textarea('body',null,array('class' => 'form-control','maxlength' => '255')) }}

		    {{ Form::submit('Create Post',array('class' => 'btn-success btn-lg btn-block','style' => 'margin-top:20px')) }}
		{!! Form::close() !!}
	</div>
</div>

@endsection