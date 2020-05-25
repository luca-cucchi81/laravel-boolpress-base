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
    <div class="container col-11" style="text-align: center; margin: 20px;">
        <h2 class="display-4 font-weight-bold text-uppercase">Luca's Blog</h2>
    </div>

    @foreach ($published as $post)
        <div class="container-fluid col-11>
            <div class="row">
                <div style="margin-bottom: 20px; padding: 10px; background: lightgrey; border-radius: 10px;">
                    <h2>{{$post->title}}</h2>
                    <small><b>Author:</small> {{$post->author}}</b><br>
                    <small><b>Created: {{$post->created_at}}</b></small>
                    <div class="container-fluid" style="padding: 15px 0;">
                        <img src="{{$post->img}}" style="padding: 15px 0;" alt="foto">
                    </div>
                    <p>{{$post->body}}</p>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
