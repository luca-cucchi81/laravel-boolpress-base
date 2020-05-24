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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 70px">
      <a class="navbar-brand font-weight-bold" href="#">Luca's Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('posts.index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    @foreach ($published as $post)
        <div class="container-fluid col-11 position-relative" style="top: 70px;">
            <div class="row">
                <div style="margin-bottom: 20px; padding: 10px; background: lightgrey; border-radius: 10px;">
                    <h2>{{$post->title}}</h2>
                    <small><b>Author:</small> {{$post->author}}</b><br>
                    <small><b>Created: {{$post->created_at}}</b></small>
                    <div class="container-fluid" style="padding: 15px 0;">
                        <img src="{{$post->img}}" alt="foto">
                    </div>
                    <p>{{$post->body}}</p>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
