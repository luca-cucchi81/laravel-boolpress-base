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
        <div class="container col-12">
            <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
                <div>
                    <label for="title" style="margin-top: 10px; font-weight: bold;">Titolo</label>
                    <div>
                        <input type="text" style="width: 15%;" placeholder="Inserisci il titolo" name="title" value="{{$post->title}}">
                    </div>
                </div>

                <div>
                    <label for="author" style="margin-top: 10px; font-weight: bold;">Autore</label>
                    <div>
                        <input type="text" style="width: 15%;" placeholder="Inserisci l'autore" name="author" value="{{$post->author}}">
                    </div>
                </div>

                <div>
                    <label for="img" style="margin-top: 10px; font-weight: bold;">Immagine</label>
                    <div>
                        <input type="text" style="width: 15%;" placeholder="Inserisci path immagine" name="img" value="{{$post->img}}">
                    </div>
                </div>

                <div>
                    <label for="body" style="margin-top: 10px; font-weight: bold;">Testo</label>
                    <div>
                        <textarea name="body" cols="50" rows="10">{{$post->body}}</textarea>
                    </div>
                </div>

                <div style="margin-top: 10px;">
                    <label for="published" style="margin-right: 10px;">Pubblicato</label>
                    <input type="radio" style="transform: scale(2);" id="published" name="published" value="1" {{($post->published == 1) ? 'checked' : ''}}>
                    <label for="not-published" style="margin: 0 10px;">Non Pubblicato</label>
                    <input type="radio" style="transform: scale(2);" id="not-published" name="published" value="0" {{($post->published == 0) ? 'checked' : ''}}>
                </div>

                <div style="margin: 20px 100px;">
                  <input style="transform: scale(1.5); width: 5%; background: lightgreen; border: 2px solid green; border-radius: 5px;"type="submit" value="Salva">
                </div>

            </form>
        </div>
    </body>
</html>
