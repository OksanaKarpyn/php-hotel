<!-- Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->


<?php 
 $hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
$hotel = $_GET['nomeHotel'];
$voto = $_GET['votoHotel'];

$search= array_search($voto, $hotels);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="container mt-5">

       <!-- <ul>
        <?php 
    
            foreach( $hotels as $elem ){
                echo "<li>".$elem['name']."</li>";
                echo "<li>".$elem['description']."</li>";
                echo "<li>".$elem['parking']."</li>";
                echo "<li".$elem['vote']."</li>";
                echo "<li>".$elem['distance_to_center']."</li>";
            }
            ?>
        </ul> -->
        <form action="index.php" method="GET">
            <label for="primo">Nome Hotel</label>
            <input type="text" name="nomeHotel" placeholder="inserisci  nome hotel" id="primo">
            <label for="secondo">Voto da 1 a 5</label>
            <input type="number" id="secondo" name="votoHotel" placeholder="inserisci numero">
            <button type="submit">invia</button>
        </form>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione Hotel</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Stelle</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
        <?php
  foreach( $hotels as $elem ){
         echo "<tr>"."<td>".$elem['name']. "</td>". "<td>".$elem['description']."</td>" . "<td>".$elem['parking']."</td>". "<td>".$elem['vote']."</td>"."<td>".$elem['distance_to_center']."</td>"."</tr>";
            }
         ?>
  </tbody>
</table>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>