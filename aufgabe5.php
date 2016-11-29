<!doctype html>
<html lang="de">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Zufallszahlen</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <?php
  function zufzahl($max, $anzahl, $stellen)
  {
    echo "<th> Zufallszahl </th>";
    for($j=1; $j<=$stellen; $j++)
    {
      echo "<th>".($j).". Stelle</th>";
    }
    for($i=1; $i<=$anzahl; $i++)
    {
      $zzahl = rand(1,$max);
      echo "<tr>";
      echo "<td>$zzahl</td>";
      for($k=1; $k<=$stellen; $k++)
      {
        echo "<td>" .abschneiden($zzahl, $k). "</td>";
      }
      echo "</tr>";
    }
  }
  function abschneiden($zahl,$k)
  {
    $base = pow(10,$k);
    return $zahl - ($zahl % $base);
  }
  ?>
</head>
<body>
  <div class="container">
    <h1>Zufallszahlen</h1>
    <div class="row">
      <div class="three column">
        <table class="u-full-width">
          <thead>In einer Tabelle runden an der ...</thead>
          <tbody>
            <?php zufzahl(20000, 20, 5); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
