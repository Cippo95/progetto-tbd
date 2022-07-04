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
        <h1>Studenti</h1>
        <a href="/">Home</a>
        <p>Per inserire un nuovo studente <a href="/students/create">clicca qui</a>.</p>
        <p>Per vedere i prestiti di uno studente clicca sul suo ID.</p>
        <table>
            <tr>
                <th>ID_Studente</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Aggiorna</th>
                <th>Elimina</th>
            </tr>
            @forelse($students as $student)
                <tr>
                    <td><a href="/students/{{ $student->id }}/borrows">{{ $student->id }}</a></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td><a href="/students/{{ $student->id }}/edit">Aggiorna</a></td>
                    <td>
                        <form action="/students/{{ $student->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @empty
                <li>
                    Non ci sono studenti da mostrare.
                </li>
                <br>                
            @endforelse
        </table>
    </body>
</html>