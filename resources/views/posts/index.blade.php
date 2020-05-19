<ul>
    @foreach ($posts as $post)
        <li><h2>{{$post->title}}</h2></li>
        <li><small>Autore: {{$post->author}}</small></li>
        <li><img src="{{$post->img}}" alt="foto"></li>
        <li><p>{{$post->body}}</p></li>
        <li>Created: {{$post->created_at}}</li>
    @endforeach
</ul>
