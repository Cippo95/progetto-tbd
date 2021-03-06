<!DOCTYPE html>
<html>
    <head>
        <style>
        table {
        border-collapse: collapse;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        </style>
    </head>
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
                <th>Autore.Nome</th>
                <th>Autore.Cognome</th>
                <th>Genere</th>
                <th>Elimina</th>
            </tr>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->authors_name }}</td>
                    <td>{{ $book->authors_surname }}</td>
                    <td>{{ $book->genres_name }}</td>
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