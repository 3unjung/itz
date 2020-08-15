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
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo ("<br>");
        }
        ?>
        <div class="container">
            <div class="row">
                <?php /*
                $video = "";
                for ($i = 0; $i < 12; $i++) {
                    $video = $video . ' <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="../assets/img/omgchat.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Chat trop mignon choqué omg</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                echo ($video);
                */
                ?>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12 block-video">


                    <video controls width="250">

                        <source class="img-fluid" src="../assets/img/68631474_2369999263080424_1236980280946851840_n.mp4" type="video/webm">

                        <source class="img-fluid" src="../assets/img/68631474_2369999263080424_1236980280946851840_n.mp4" type="video/webm">

                        Sorry, your browser doesn't support embedded videos.
                    </video>



                </div>


            </div>


        </div>

        <div class="bg-dark" id="categories">
            <h3>Tag</h3>
            <?php
            $tag = "";
            for ($i = 0; $i < 33; $i++) {
                $tag = $tag . ' <ul class="navbar-nav"><li><a class="nav-item" href="">Un lien se situe ici</a></li>';
            }
            echo ($tag);

            ?>
        </div>

        <!--<div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;"><img src="..." class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">Card title</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div>
            </div>
        </div>-->






    </div>
    <?php include("scripts.js.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>