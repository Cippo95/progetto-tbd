<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Libri</h1>
        <a href="/">Home</a>
        <p>Per inserire un nuovo libro <a href="/books/create">clicca qui</a>.</p>
        <table>
            <tr>
                <th>ID_Libro</th>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Genere</th>
                <th>Elimina</th>
            </tr>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author_id }}</td>
                    <td>{{ $book->genre_id }}</td>
                    <td>
                        <form action="/books/{{ $book->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @empty
                <li>
                    Non ci sono libri da mostrare.
                </li>
                <br>                
            @endforelse
        </table>
    </body>
</html>