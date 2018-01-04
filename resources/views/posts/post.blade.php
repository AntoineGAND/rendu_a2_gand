<div class="blog-post">

    <h2 class="blog-post-title">
        <a href="{{'posts/'}}{{$post->id}}">
            {{$post->title}}
        </a>
    </h2>


        <button type="button" class="btn btn-primary">
            Likes <span class="badge badge-light">{{ $post->likes()->count() }}</span>
            <span class="sr-only"></span>
        </button>

    <!-- @foreach ($post->likes as $user)
        {{ $user->name }} likes this !
    @endforeach -->

    @if ($post->isLiked)
        <a href="{{ route('post.like', $post->id) }}"><span class="badge badge-danger">Unlike</span></a>
    @else
        <a href="{{ route('post.like', $post->id) }}"><span class="badge badge-info">Like</span></a>
    @endif

    <p class="blog-post-meta">

    @isset($post->user->name)
        {{$post->user->name}} on
     @else
        {{'Unknow'}} on
    @endisset


    {{$post->created_at->toFormattedDateString()}}
    </p>

    {{$post->body}}

</div><!-- /.blog-post -->