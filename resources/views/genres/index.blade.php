<!DOCTYPE html>
<html>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <h1>Generi Letterari</h1>
        <a href="/">Home</a>
        <p>Per inserire un nuovo genere letterario <a href="/genres/create">clicca qui</a>.</p>
        <table>
            <tr>
                <th>ID_Genere</th>
                <th>Nome</th>
                <th>Elimina</th>
            </tr>
            @forelse($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>
                        <form action="/genres/{{ $genre->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @empty
                <li>
                    Non ci sono generi da mostrare.
                </li>
                <br>                
            @endforelse
        </table>
    </body>
</html>