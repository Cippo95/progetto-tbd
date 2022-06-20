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
        <h1>Prestiti degli studenti</h1>
        <a href="/">Home</a>
        <p>Per tornare agli studenti <a href="/students">clicca qui</a></p>
        <table>
            <tr>
                <th>ID_Prestito</th>
                <th>ID_Studente</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Libro</th>
                <th>Elimina</th>
            </tr>
            @forelse($studentBorrows as $studentBorrow)
                <tr>
                    <td>{{ $studentBorrow->id }}</td>
                    <td>{{ $studentBorrow->student_id }}</td>
                    <td>{{ $studentBorrow->name }}</td>
                    <td>{{ $studentBorrow->surname }}</td>
                    <td>{{ $studentBorrow->title }}</td>
                    <td>
                        <form action="/borrows/{{ $studentBorrow->id }}" method="post">
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