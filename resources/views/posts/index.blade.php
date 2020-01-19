@extends('posts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>CRUD laravel</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success" href="{{ route('posts.create' )}}">Create New Post</a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-succes">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-boredered">
        <tr>
            <th>#</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>CATEGORY</th>
            <th>CONTENT</th>
            <th width="300px">ACTIONS</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $post->bptitle }}</td>
            <td>{{ $post->bpauthor }}</td>
            <td>{{ $post->bpcategory }}</td>
            <td>{{ $post->bpcontent }}</td>
            <td>
                <a class="btn btn-xs btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                <a class="btn btn-xs btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Delete',['class' => 'btn btn-xs btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}
@endsection