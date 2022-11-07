<a href="{{ url('home/editcomment/'.$post->id) }}">create a new comment</a>

<h1>{{$post->title}}</h2>
<h3>{{$post->content}}</h3>

@foreach($comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach

