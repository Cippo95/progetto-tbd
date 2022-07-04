<!DOCTYPE html>
<html>
    <body>
    <h1>Inserimento studente</h1>
    <a href="/students">Torna agli studenti.</a>
    <p>Compila i dati dello studente.</p>
    <form action="/students" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br>
        <label for="name">Cognome:</label>
        <input type="text" id="surname" name="surname"><br>
        <p>Cliccare "Invio" per confermare.</p>
        <input type="submit" value="Invio">
    </form>
    </body>
</html>