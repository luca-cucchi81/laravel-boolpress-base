<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Create Posts</title>
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
            <h1 class="display-4 font-weight-bold text-center" style="margin-bottom: 30px;">New Post</h1>
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                @method('POST')
              <div class="form-group">
                <label for="title" class="font-weight-bold">Titolo</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title">
              </div>

              <div class="form-group">
                <label for="author" class="font-weight-bold">Author</label>
                <input type="text" class="form-control" placeholder="Enter Author" name="author">
              </div>

              <div class="form-group">
                <label for="img" class="font-weight-bold">Image</label>
                <input type="text" class="form-control" placeholder="Enter Image Path" name="img">
              </div>

              <div class="form-group">
                <label for="body" class="font-weight-bold">Body</label>
                <textarea class="form-control text-justify" cols="50" rows="10">Inserisci il testo</textarea>
              </div>

              <div class="form-check">
                <input type="radio" class="form-check-input" id="published" name="published" value="1">
                <label class="form-check-label font-italic" for="published">Published</label>
              </div>

              <div class="form-check">
                <input type="radio" class="form-check-input" id="published" name="published" value="0">
                <label class="form-check-label font-italic" for="published">Not Published</label>
              </div>

              <div style="text-align: center; padding-top: 20px;">
                  <button type="submit" class="btn btn-primary w-50">CREATE</button>
              </div>
            </form>
        </div>
    </body>
</html>
