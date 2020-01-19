@extends('posts.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Post </h3> <a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Title : </strong>
            {{ $post->bptitle}}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <strong>Author : </strong>
            {{ $post->bpauthor}}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <strong>Category : </strong>
            {{ $post->bpcategory}}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Content : </strong>
            {{ $post->bpcontent}}
        </div>
    </div>
</div>
@endsection