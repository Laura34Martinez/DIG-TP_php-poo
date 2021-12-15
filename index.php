<?php
include_once('Person.php');

$person1 = new person('Alfred', 'COSTE');
$person2 = new person('Gilbert', 'GARCIA');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>TP2. PHP-Programation orientée objet</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex align-items-center bg-dark">
  <div class="container d-flex align-items-center flex-column">
    
    <h1 class="text-white text-uppercase mb-3">Personnes</h1>
    
    <div class="row row-cols-4">
      <div class="card d-flex align-items-center text-center m-3 bg-dark person-1" style="width: 20rem;">
  			<img src="img/person.png" class="card-img-top rounded-circle bg-white w-25 m-3" alt="">
  				<div class="card-body">
    				<h2 class="card-title text-white"><?php echo $person1 -> getName();?></h2>
						<h2 class="card-text text-white"><?php echo $person1 -> getSurname();?></h2>
						<p class="text-secondary mt-3">" <?php echo $person1 -> sleep();?> "</p>
  				</div>
			</div>

      <div class="card d-flex align-items-center text-center m-3 bg-dark person-2" style="width: 20rem;">
  			<img src="img/person.png" class="card-img-top rounded-circle bg-white w-25 m-3" alt="">
  				<div class="card-body">
    				<h2 class="card-title text-white"><?php echo $person2 -> getName();?></h2>
						<h2 class="card-text text-white"><?php echo $person2 -> getSurname();?></h2>
						<p class="text-secondary mt-3">" <?php echo $person2 -> eat();?> "</p>
  				</div>
			</div>

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


