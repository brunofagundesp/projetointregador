<?php include('./db/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/css/materialize.min.css">
      <link rel="stylesheet" href="http://github.hubspot.com/odometer/themes/odometer-theme-default.css" />
      
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/js/materialize.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="./public/css/estilo.css">

      <!-- Title -->
      <title>FOXTROT - OS MELHORES SERVIÇOS</title>

      <!-- Icon -->
      <link rel="icon" href="./public/images/fox.png">
</head>
<body>

    <section>
        <article>
            <div id="login">
                <img id="img1" src="./public/images/2.jpg" alt="">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                    <div id="cardLog" class="card white">
                        <div id="title" class="card-action teal darken-1 z-depth-5">
                            <div class="center">
                                <img src="./public/images/fox.png" alt="">
                            </div>
                        </div>
                        <div class="card-content white-text">
                            <div class="row">
                                <form class="col s12" method="post" action="/projetointregador/">
                                    <div class="row">
                                    <div class="input-field col s10 offset-s1">
                                        <input id="login_input" type="text" name="user" class="validate black-text text-darken-1">
                                        <label for="login_input">Login</label>
                                    </div>
                                    <div class="input-field col s10 offset-s1">
                                        <input id="pass" type="password" name="password" class="validate orange-text">
                                        <label for="pass">Senha</label>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="center">
                                        <button type="submit" class="btn waves-effect waves-darken z-depth-3 orange darken-1" type="submit" name="action">entrar</button>
                                    </div>
                                </form>
                            </div>                
                        </div>
                        <div class="center">
                        <?php 
                            if (isset($msg)) { ?>
                                <p class="red white-text" style="font-family: sans-serif;">Login ou senha inválidos!</p>
                           <?php } ?>
                        </div>
                    </div>
                    </div>
                </div>                
            </div>
        </article>
    </section>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://github.hubspot.com/odometer/odometer.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <!-- FadeIn clientes 1 -->
  <script src="./public/javascript/init.js"></script>
</body>
</html>

