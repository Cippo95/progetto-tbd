<!DOCTYPE html>
<html>
    <body>
        <h1>Inserimento autore</h1>
        <a href="/authors">Torna agli autori.</a>
        <p>Compila i dati dell'autore.</p>
        <form action="/authors" method="post">
            @csrf
            <label for="id">ID_Autore:</label>
            <input type="text" id="id" name="id"><br>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name"><br>
            <label for="name">Cognome:</label>
            <input type="text" id="surname" name="surname"><br>
            <p>Cliccare "Invio" per confermare.</p>
            <input type="submit" value="Invio">
        </form>
    </body>
</html>