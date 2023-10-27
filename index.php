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

$check = (isset($_GET['check']) == null) ? true : false;
$voteSelect = (isset($_GET['vote']) == null) ? 0 : $_GET['vote'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>PHP Hotel</title>
</head>
<body>

<div class="container my-5">
  <h1 class="mb-5 text-center">Hotel</h1>

  <div class="row mb-4">
    <div class="offset-3 col-6">
      <form action="index.php" method="GET">
        <div>
          <select class="form-select mb-3" name="vote" aria-label="Default select example">
            <option value=0 selected>Seleziona un voto minimo</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
          </select>
        </div> 
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" name="check" value=false id="flexCheckDefault">
          <label class="form-check-label" for="check">
            Solo con Parcheggio
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </div>

  <table class="table my-3">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Parcheggio</th>
        <th scope="col">Voto</th>
        <th scope="col">Distanza dal centro</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($hotels as $hotel){ ?>
      <?php if(($check || $hotel['parking']) && $voteSelect <= $hotel['vote']){ ?>
      <tr>
        <td><?php echo $hotel['name'] ?></td>
        <td><?php echo $hotel['description'] ?></td>
        <td><?php  echo $hotel['parking'] ? 'Si' : 'No' ?></td>
        <td><?php echo $hotel['vote'] ?></td>
        <td><?php echo $hotel['distance_to_center']?> metri</td>
      </tr>
      <?php } ?>
      <?php } ?>
    </tbody>

  </table>
</div>


  
</body>
</html>