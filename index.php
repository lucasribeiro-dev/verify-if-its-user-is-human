<?php
session_start();
$n1 = rand(0,99);
$n2 = rand(0,99);

$_SESSION['v'] = $n1 + $n2;
?>

<!-- Layout -->

<html>
    <head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
        <div class="container">
        <div class="row " style="display: flex; padding-top: 25%;">
        <div class="col-lg-10 col-xl-9 mx-auto ">
            <div class="card card-signin flex-row my-5">
           
            <div class="card-body">
                <h5 class="card-title text-center ">Humans Verify</h5>

                <div class="form-group">
                    <form method="POST" action="verify.php">
                        <strong><?php echo "$n1 + $n2"?> </strong>
                        <input type="text"  class="form-control"  placeholder ="Resposta" name ="answer"/>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Calculate</button>

                    </form>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>