<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create Posts</title>
    </head>
    <body>
        <form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')

            <div>
                <label for="title">Titolo</label>
                <input type="text" placeholder="Inserisci il titolo" name="title">
            </div>

            <div>
                <label for="author">Autore</label>
                <input type="text" placeholder="Inserisci l'autore" name="author">
            </div>

            <div>
                <label for="img">Immagine</label>
                <input type="text" placeholder="Inserisci path immagine" name="img">
            </div>

            <div>
                <label for="body">Testo</label>
                <textarea name="body" cols="30" rows="10">Inserisci il testo</textarea>
            </div>

            <div>
                <label for="published">Pubblicato</label>
                <input type="radio" id="published" name="published" value="1">
                <label for="not-published">Non Pubblicato</label>
                <input type="radio" id="not-published" name="published" value="0">
            </div>

            <div>
              <input type="submit" value="Salva">
            </div>

        </form>
    </body>
</html>
