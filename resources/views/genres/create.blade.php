<!DOCTYPE html>
<html>
    <body>
    <h1>Inserimento genere letterario</h1>
    <a href="/genres">Torna ai generi letterari.</a>
    <p>Compila i dati del genere letterario.</p>
    <form action="/genres" method="post">
        @csrf
        <label for="id">ID_Genere:</label>
        <input type="text" id="id" name="id"><br>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br>
        <p>Cliccare "Invio" per confermare.</p>
        <input type="submit" value="Invio">
    </form>
    </body>
</html>