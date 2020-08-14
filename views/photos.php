<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bidule chouette</title>
  <link rel="icon" href="../assets/img/icon_rena.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="..\assets\css\style.css">
</head>

<body>

  <?php include("header.php") ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      </div>
    </div>

    <br><br>

    <div class="container">
      <div class="row">

        <?php
        $chatomg = "";
        for ($i = 0; $i < 6; $i++) {
          $chatomg = $chatomg . '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2"><article><a href="../assets/img/omgchat.jpg" target="_blank"><img class="img-fluid" src="../assets/img/omgchat.jpg" alt="OMG !"></a></article><p class="text-center"> <a href="#">view image</a></p></div>';
        }
        echo ($chatomg);
        ?>


        <?php // include("chatomg.php") 
        ?>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-4 " id="categories">
        <h3>Catégories</h3>
        <ul>
          <li>
            <a href="">Un lien se situe ici</a>
          </li>
          <li>
            <a href="">Un lien se situe ici</a>
          </li>
          <li>
            <a href="">Un lien se situe ici</a>
          </li>
          <li>
            <a href="">Un lien se situe ici</a>
          </li>
        </ul>
      </div>

    </div>








  </div> <!-- end container fluid -->

  <?php include("scripts.js.php") ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>