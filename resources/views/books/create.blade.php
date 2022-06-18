<!DOCTYPE html>
<html>
    <body>
        <h1>Inserimento libri</h1>
        <a href="/books">Torna ai libri.</a>
        <p>Compila i dati del libro.</p>
        <form action="/books" method="post">
            @csrf
            <label for="id">ID_Libro:</label>
            <input type="text" id="id" name="id"><br>
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title"><br>
            <label for="author">Autore:</label>
            <input type="text" id="author_id" name="author_id"><br>
            <label for="genre">Genere:</label>
            <input type="text" id="genre_id" name="genre_id"><br>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>