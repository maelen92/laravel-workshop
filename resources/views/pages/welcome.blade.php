@extends('main')

@section('title','| Homepage')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="well">
        <h1 class="text-center">Welcome on my Blog</h1>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    @foreach($posts as $p)
      <div class="post">
        <h3>{{$p->title}}</h3>
        <p>{{$p->body}}</p>
      </div>
      <hr>
    @endforeach
    </div>
</div>
@endsection