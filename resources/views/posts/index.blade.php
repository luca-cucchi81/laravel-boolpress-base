<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{route('posts.show', $post->slug)}}"><h2>{{$post->title}}</h2></a>
                    <small>Autore: {{$post->author}}</small>
                    <div>
                        <img src="{{$post->img}}" alt="foto">
                    </div>
                    <p>{{$post->body}}</p>

                    <div>
                        <small>Created: {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
