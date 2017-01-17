@extends('main')

@section('title','| Edit Post')

@section('content')

<div class="row">
{!! Form::model($post,['route' => ['posts.update',$post->id],'method' => 'PUT']) !!}
<div class="col-md-8">
	{!! Form::label('title','Titel:') !!}
	{!! Form::text('title',null,["class" => "form-control"]) !!}
	{!! Form::label('body','Message:') !!}
	{!! Form::textarea('body',null,["class" => "form-control"]) !!}
</div>
<div class="col-md-4">
	<div class="well">
		<div class="row">
			<div class="col-sm-6">
			{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-block btn-danger')) !!}
			</div>
			<div class="col-sm-6">
			{!! Form::submit('Save',array('class'=>'btn btn-success btn-block')) !!}
			</div>
		</div>
	</div>	
</div>
{!! Form::close() !!}
</div>
@endsection