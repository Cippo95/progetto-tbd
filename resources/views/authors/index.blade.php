<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Autori</h1>
        <a href="/">Home</a>
        <p>Per inserire un nuovo autore <a href="/authors/create">clicca qui</a>.</p>
        <table>
            <tr>
                <th>ID_Autore</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Aggiorna</th>
                <th>Elimina</th>
            </tr>
            @forelse($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->surname }}</td>
                    <td><a href="/authors/{{ $author->id }}/edit">Aggiorna</a></td>
                    <td>
                        <form action="/authors/{{ $author->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @empty
                <li>
                    Non ci sono autori da mostrare.
                </li>
                <br>                
            @endforelse
        </table>
    </body>
</html>