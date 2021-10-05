<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="submit" value="Zatwierdź">
    </form>
    <?php
      // if (!empty($_POST['name']) && !empty($_POST['surname'])) {
        if (!empty($_POST['name'] AND $_POST['surname'])) {
        echo <<< L
        Imię: {$_POST['name']}<br>
        Nazwisko: $_POST[surname]<br>
L;
      }else{
        echo "Wypełnij wszystkie dane ;)";
      }
     ?>
  </body>
</html>
