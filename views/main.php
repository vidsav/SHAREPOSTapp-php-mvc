<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sharepost</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Sharepost</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Share</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Welcome <?php echo $_SESSION['user_data']['name']; ?> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
          </li>    
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </li>
        <?php endif; ?>
        </ul>
      </div>
    </nav>
        <div class="container">      
            <div class="row">
                <?php Messages::display(); ?>
                <?php require($view); ?>
            </div>    
        </div>
    </body>
</html>
