<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Modifica autore</h1>
        <a href="/authors">Clicca qui per tornare agli autori.</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cognome</th>
            </tr>
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->surname }}</td>
            </tr>
        </table>
        <p>Inserisci nuovo id e nome.</p>
        <form action="/authors/{{ $author->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="id">ID_Autore:</label>
            <input type="text" id="id" name="id"><br>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name"><br>
            <label for="surname">Cognome:</label>
            <input type="text" id="surname" name="surname"><br>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>