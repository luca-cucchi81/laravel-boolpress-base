<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Edit Posts</title>
    </head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <h1 class="display-4 font-weight-bold text-center" style="margin-bottom: 30px;">Edit Post</h1>
            <form action="{{route('posts.update', $post->id)}}" method="post">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label for="title" class="font-weight-bold">Titolo</label>
                <input type="text" class="form-control" placeholder="Enter Title" value="{{$post->title}}">
              </div>

              <div class="form-group">
                <label for="author" class="font-weight-bold">Author</label>
                <input type="text" class="form-control" placeholder="Enter Author" value="{{$post->author}}">
              </div>

              <div class="form-group">
                <label for="img" class="font-weight-bold">Image</label>
                <input type="text" class="form-control" placeholder="Enter Image Path" value="{{$post->img}}">
              </div>

              <div class="form-group">
                <label for="body" class="font-weight-bold">Body</label>
                <textarea class="form-control text-justify" cols="50" rows="10">{{$post->body}}</textarea>
              </div>

              <div class="form-check">
                <input type="radio" class="form-check-input" id="published" value="1" {{($post->published == 1) ? 'checked' : ''}}>
                <label class="form-check-label font-italic" for="published">Published</label>
              </div>

              <div class="form-check">
                <input type="radio" class="form-check-input" id="published" value="0" {{($post->published == 0) ? 'checked' : ''}}>
                <label class="form-check-label font-italic" for="published">Not Published</label>
              </div>

              <div style="text-align: center; padding-top: 20px;">
                  <button type="submit" class="btn btn-primary w-50">SAVE CHANGES</button>
              </div>
            </form>
        </div>
    </body>
</html>
