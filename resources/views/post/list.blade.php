@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{--            @foreach( App\Models\Post::all() as $post)--}}
                @foreach( App\Models\Post::orderBy('created_at','DESC')->get() as $post)
                    <div class="card">
                        <div class="card-header">
                            #{{$post->id}}
                            {{$post->title}} @ {{$post->created_at}}
                            <a href="{{ route('posts.edit',[$post->id]) }}">(Edit)</a>
                        </div>

                        <div class="card-body">
                            {!! nl2br($post->content) !!}
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
