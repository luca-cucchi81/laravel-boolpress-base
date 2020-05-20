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
    @foreach ($published as $post)
        <div class="container col-11">
            <div class="row">
                <div>
                    <a href="{{route('posts.show', $post->slug)}}"><h2>{{$post->title}}</h2></a>
                    <small>Autore: {{$post->author}}</small>
                    <div>
                        <small>Created: {{$post->created_at}}</small>
                    </div>
                    <div class="col-4 offset-4">
                        <img src="{{$post->img}}" alt="foto">
                    </div>
                    <p>{{$post->body}}</p>


                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
