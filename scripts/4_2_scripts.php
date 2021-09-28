<?php
  echo "<pre>";
    print_r($_POST);
  echo "</pre>";
  if (!empty($_POST['name']) && !empty($_POST['geometricfigure'])){
    switch ($_POST['geometricfigure']) {
      case 'kwadrat':
        header("location: ./square.php");
        break;
      case 'prostokat':
        echo "prostokąt";
        break;


    }
  }
  else {
    ?>
    <script>
      history.back();
    </script>

    <?php
  }
?>
