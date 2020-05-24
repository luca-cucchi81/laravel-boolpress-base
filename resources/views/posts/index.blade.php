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
          <li class="nav-item">
            <a class="nav-link" href="{{route('posts.published')}}">Published Posts</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link btn btn-success font-weight-bold" style="color: white;" href="{{route('posts.create')}}">New Post</a>
            </li>
        </ul>
      </div>
    </nav>

    @foreach ($posts as $post)
        <div class="container-fluid col-11 position-relative" style="top: 70px;">
            <div class="row">
                <div style=" margin-bottom: 20px; padding: 10px; background: lightgrey; border-radius: 10px;">
                    <h2>{{$post->title}}</h2>
                    <small><b>Author:</small> {{$post->author}}</b><br>
                    <small><b>Created: {{$post->created_at}}</b></small>
                <div class="container-fluid" style="padding: 15px 0;">
                    <img class="img-fluid" src="{{$post->img}}" alt="foto">
                    <p>{{$post->body}}</p>
                </div>
                    <div style="display: inline-block;">
                        <form style="float: left; margin-right: 15px" action="{{route('posts.show', $post->slug)}}">
                            <button class="btn btn-primary" type="submit">Visualizza</button>
                        </form>

                        <form style="float: left; margin-right: 15px" action="{{route('posts.edit', $post->id)}}">
                            <button class="btn btn-secondary" type="submit">Modifica</button>
                        </form>

                        <form style="float: left;" action="{{route('posts.destroy', $post->id)}}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Cancella</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
