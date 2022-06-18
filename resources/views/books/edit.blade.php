<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Modifica studente</h1>
        <a href="/students">Clicca qui per tornare agli studenti.</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
            </tr>
        </table>
        <p>Inserisci nuova matricola e nome.</p>
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="id">Matricola:</label>
            <input type="text" id="id" name="id"><br>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name"><br>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>
