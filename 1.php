<?php
  echo "ZSK<br>";
  echo "ZSK";

  $name="Janusz";
  echo '<br>Twoje imię: $name'; //Twoje imię: $name
  echo "<br>Twoje imię: $name"; //Twoje imię: Janusz

  $x='x';
  $y='y';

// konkatencja .
  echo $x.$y;

// typy danych
// logiczny
  $prawda=true;
  $fałsz=false;
  echo $prawda; //1
  echo $fałsz; //nic nie wyświetla

// całkowity
  $calkowita=10;
  $bin=0b1011; //11
  $oct=011; //9
  $hex=0x11; //17

  echo "<hr>$hex";

// zmiennorzecinkowa
  $x = 10.5;

  echo gettype($x); //double
  echo gettype($bin); //integer
  echo gettype($prawda)."<hr>"; //boolean

// heredoc
  $surname="Nowak";
  echo <<< E
    Imię i nazwisko:
    Janusz $surname <hr>
    Poznań
E;

  $text = <<< E
    Imię i nazwisko:
    Janusz $surname <hr>
    Poznań
E;

  echo $text;

// nowdoc
  echo <<< 'E'
      <hr><hr>
      Imię i nazwisko:
      Janusz $surname <hr>
      Poznań
  E;

echo "<br>Nazwa zmiennej surname: \$surname";

  ?>
