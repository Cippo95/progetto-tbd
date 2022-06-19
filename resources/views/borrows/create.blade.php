<!DOCTYPE html>
<html>
    <body>
        <h1>Inserimento del prestito</h1>
        <a href="/borrows">Torna ai prestiti.</a>
        <p>Compila i dati del prestito.</p>
        <form action="/borrows" method="post">
            @csrf
            <label for="student_id">ID_Studente:</label>
            <input type="text" id="student_id" name="student_id"><br>
            <label for="book_id">Libro:</label>
            <select name="book_id" id="book_id">
                @foreach ($books as $book)
                    <option value={{ $book->id }}>{{ $book->title }}</option>
                @endforeach
            </select>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>