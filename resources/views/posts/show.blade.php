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
    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-10">
        <div class="row">
            <div style="margin-top: 20px; padding: 10px; background: lightgrey; border-radius: 10px;">
                <h2>{{$post->title}}</h2>
                <small><b>Autore: {{$post->author}}</b></small>
                <div>
                    <small><b>Created: {{$post->created_at}}</b></small>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="{{$post->img}}" style="width: 100%; padding: 30px 0;" alt="{{$post->title}}">
                </div>

                <div>
                    {{$post->body}}
                </div>

            </div>
        </div>
    </div>


</body>
</html>
