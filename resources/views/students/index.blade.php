<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Studenti</h1>
        <a href="/">Home</a>
        <p>Per inserire un nuovo studente <a href="/students/create">clicca qui</a>.</p>
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
                    <td>{{ $student->id }}</td>
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