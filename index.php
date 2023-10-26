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
        <!-- <div>
          <label class="form-label">Solo con parcheggio</label>
          <select  class="form-select" aria-label="Default select example">
            <option value="1" selected>No</option>
            <option value="2">Si</option>
          </select>
        </div> -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="check" value=false id="flexCheckDefault">
          <label class="form-check-label" for="check">
            Solo con Parcheggio
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </div>

  <div class="row">
    <?php foreach($hotels as $hotel){ ?>
    <?php $check = (isset($_GET['check']) == null) ? true : false; ?>
    <?php if($check || $hotel['parking']){ ?>
    <div class="col-4 mb-4 d-flex">
      <div class="card w-100">
        <ul class="my-3">
          <li class="list-group-item">Nome: <?php echo $hotel['name'] ?></li>
          <li class="list-group-item">Descrizione: <?php echo $hotel['description'] ?></li>
          <li class="list-group-item">Parcheggio: <?php  echo $hotel['parking'] ? 'Si' : 'No' ?></li>
          <li class="list-group-item">Voto: <?php echo $hotel['vote'] ?></li>
          <li class="list-group-item">Distanza dal centro: <?php echo $hotel['distance_to_center']?> metri</li>
        </ul>
      </div>
    </div>
    <?php } ?>
    <?php } ?>
  </div>
</div>


  
</body>
</html>