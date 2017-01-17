@extends('main')

@section('title','| All Post')

@section('content')

<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2 well">
		{!! Html::linkRoute('posts.create','Create',array(),array('class'=>'btn btn-primary btn-block')) !!}
	</div>
	<div class="col-md-12"><hr></div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
			</thead>
			<tbody>
			@foreach($posts->all() as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{!! Html::linkRoute('posts.show',$p->title,array($p->id)) !!}</td>
				<td>{{substr($p->body,0,50)}}{{strlen($p->body) > 50 ? "..." : ""}}</td>
				<td>{{ date('d.F Y H:i',strtotime($p->created_at)) }}</td>
				<td>{!! Html::linkRoute('posts.edit','Edit',array($p->id),array('class'=>'btn btn-primary btn-block')) !!}{!! Form::open(['route' => ['posts.destroy',$p->id],'method' => 'DELETE']) !!}
				{!! Form::submit('Delete',array('class'=>'btn btn-danger btn-block')) !!}
				{!! Form::close() !!}</td>
			</tr>
			</tbody>
			@endforeach
		</table>
	</div>
</div>

@endsection