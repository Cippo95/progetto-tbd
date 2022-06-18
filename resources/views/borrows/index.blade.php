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
                <th>ID_Libro</th>
                <th>Elimina</th>
            </tr>
            @forelse($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->id }}</td>
                    <td>{{ $borrow->student_id }}</td>
                    <td>{{ $borrow->book_id }}</td>
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