<ul>
    @foreach ($posts as $post)
        <li><a href="{{route('posts.show', $post->slug)}}"><h2>{{$post->title}}</h2></a></li>
        <li><small>Autore: {{$post->author}}</small></li>
        <li><p>{{$post->body}}</p></li>
        <li><img src="{{$post->img}}" alt="foto"></li>
        <li>Created: {{$post->created_at}}</li>
    @endforeach
</ul>
