<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>


      <?php
        if (!isset($_POST['person'])){
          echo <<< FORMCOUNTPERSON
          <h3>Ilość osób w rodzinie</h3>
          <form method="post">
            <input type="number" name="person" placeholder="Ilość osób">
            <input type="submit" value="Zatwierdź">
          </form>
FORMCOUNTPERSON;
        }

        if (!empty($_POST['person'])) {
          echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
          echo <<< FORMCOUNTPERSON
            <form method="post">
FORMCOUNTPERSON;
              for ($i=1; $i <= ($_POST['person']); $i++) {
                echo "<input type='number' name='person$i' placeholder='Wiek osoby nr $i'><br><br>";
              }
          echo <<< FORMCOUNTPERSON
            <input type="submit" value="Zatwierdź">
          </form>
FORMCOUNTPERSON;
        }
      ?>
  </body>
</html>
