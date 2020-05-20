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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{$post->title}}</h2>
                <small><b>Autore: {{$post->author}}</b></small>
                <div>
                    <small><b>Created: {{$post->created_at}}</b></small>
                </div>
                <div class="col-4 offset-4">
                    <img src="{{$post->img}}" alt="{{$post->title}}">
                </div>

                <div>
                    {{$post->body}}
                </div>

            </div>
        </div>
    </div>


</body>
</html>
