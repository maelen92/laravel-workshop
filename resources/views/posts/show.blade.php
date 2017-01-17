@extends('main')

@section('title','| Post')

@section('content')

<div class="row">
<div class="col-md-8">
	<h1>{{$post->title}}</h1>
	<p class="lead">{{$post->body}}</p>
	<span>Created: {{ date('d.F Y H:i',strtotime($post->created_at)) }} Updated: {{ date('d.m.Y H:i',strtotime($post->updated_at)) }}</span>
</div>
<div class="col-md-4">
	<div class="well">
		<div class="row">
			<div class="col-sm-6">
			{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
			</div>
			<div class="col-sm-6">
			{!! Form::open(['route' => ['posts.destroy',$post->id],'method' => 'DELETE']) !!}
			{!! Form::submit('Delete',array('class'=>'btn btn-danger btn-block')) !!}
			{!! Form::close() !!}
			</div>
			<div class="col-sm-12">
			{!! Html::linkRoute('posts.index','All Posts',array(),array('class'=>'btn btn-default')) !!}
			</div>
		</div>
	</div>	
</div>
</div>
@endsection