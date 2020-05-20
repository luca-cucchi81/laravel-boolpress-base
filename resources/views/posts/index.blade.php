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
    <div class="container col-12">
        <div class="col-8 offset-5">
            <h1 style="padding: 30px 0;">Luca's Blog</h1>
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="container col-11">
            <div class="row">
                <div style="margin-top: 20px; padding: 10px; background: lightgrey; border-radius: 10px;">
                    <a href="{{route('posts.show', $post->slug)}}"><h2>{{$post->title}}</h2></a>
                    <small><b>Autore: {{$post->author}}</b></small>
                    <div>
                        <small><b>Created: {{$post->created_at}}</b></small>
                    </div>
                    <div class="col-4 offset-4">
                        <img src="{{$post->img}}" style="padding: 30px 0;" alt="foto">
                    </div>
                    <p>{{$post->body}}</p>


                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
