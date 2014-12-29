<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Página da Annie</title>
      
      <!-- Bootstrap -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         <h1>Hello, Tibbers!</h1>
         <p>Você viu meu ursinho Tibbers?</p>
         <p>
            <a href="?name=xixi" class="btn btn-primary btn-lg">Xixi</a>
            <a href="?name=Rayman" class="btn btn-danger">Jogo</a>
         </p>
      </div>
      <div class="container">
         <h1>Nárnia Quiz</h1>
         <?php require('app/core.php') ?>
      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>