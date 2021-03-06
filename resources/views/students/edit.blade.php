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
        <h1>Modifica studente</h1>
        <a href="/students">Clicca qui per tornare agli studenti.</a>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
            </tr>
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->surname }}</td>
            </tr>
        </table>
        <p>Inserisci nome e cognome.</p>
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name"><br>            
            <label for="surname">Cognome:</label>
            <input type="text" id="surname" name="surname"><br>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>
