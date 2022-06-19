<!DOCTYPE html>
<html>
    <body>
        <h1>Inserimento libri</h1>
        <a href="/books">Torna ai libri.</a>
        <p>Compila i dati del libro.</p>
        <form action="/books" method="post">
            @csrf
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title"><br>
            <label for="author">Autore:</label> 
            <select name="author_id" id="author_id">
                @foreach ($authors as $author)
                    <option value={{ $author->id }}>{{ $author->name }} {{ $author->surname }}</option>
                @endforeach
            </select>
            <br>
            <label for="genre">Genere:</label>
            <select name="genre_id" id="genre_id">
                @foreach ($genres as $genre)
                    <option value={{ $genre->id }}>{{ $genre->name }}</option>
                @endforeach
            </select>
            <br>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>