<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Prestiti</h1>
        <a href="/">Home</a>
        <p>Per inserire un nuovo prestito <a href="/borrows/create">clicca qui</a>.</p>
        <table>
            <tr>
                <th>ID_Prestito</th>
                <th>ID_Studente</th>
                <th>Nome Studente</th>
                <th>Cognome Studente</th>
                <th>ID_Libro</th>
                <th>Titolo Libro</th>
                <th>Elimina</th>
            </tr>
            @forelse($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->id }}</td>
                    <td>{{ $borrow->students_id }}</td>
                    <td>{{ $borrow->students_name }}</td>
                    <td>{{ $borrow->students_surname }}</td>
                    <td>{{ $borrow->books_id }}</td>
                    <td>{{ $borrow->title }}</td>
                    <td>
                        <form action="/borrows/{{ $borrow->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @empty
                <li>
                    Non ci sono prestiti da mostrare.
                </li>
                <br>                
            @endforelse
        </table>
    </body>
</html>