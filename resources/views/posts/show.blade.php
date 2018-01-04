@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>

        <p class="blog-post-meta">

            @isset($post->user->name)
                {{$post->user->name}} on
            @else
                {{'Unknow'}} on
            @endisset


            {{$post->created_at->toFormattedDateString()}}
        </p>

        {{$post->body}}

        <hr>

        <div class="comments">
            <ul class="list-group">
            @foreach($post->comments as  $comment)
                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}}:
                    </strong>
                    {{$comment->body}}
                </li>
            @endforeach
            </ul>
        </div>

        <br>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="{{$post->id}}{{'/comments'}}">

                {{csrf_field()}}

                <div class="form-group">
                    <textarea name="body" placeholder="Your comment." class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add your comment</button>
                </div>

                @include('layouts.errors')

            </form>

        </div>
    </div>


</div>

@endsection
