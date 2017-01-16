<?php
    $input = $_GET["number"];
    $range = range(0, $input);
    $array = add_to_array($range);

    function add_to_array($fx_range)
    {
      foreach ($fx_range as $number) {
        $fx_array[] = $number;
      }
      return $fx_array;
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ping Pong</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Ping Pong Results</h1>
      <ul>
        <?php
            $numb1 = 3;
            $numb2 = 5;
            $word1 = "Ping";
            $word2 = "Pong";

            foreach ($array as $index) {
              if ($index != 0) {
                if (($index % $numb1 == 0) && ($index % $numb2 == 0)) {
                  echo "<li>" . $word1 . $word2 . "</li>";
                } elseif ($index % $numb2 == 0) {
                  echo "<li>" . $word2 . "</li>";
                } elseif ($index % $numb1 == 0) {
                  echo "<li>" . $word1 . "</li>";
                } else {
                  echo "<li>" . $index . "</li>";
                }
              }
            }
        ?>
      </ul>

    </div>


  </body>



</html>
