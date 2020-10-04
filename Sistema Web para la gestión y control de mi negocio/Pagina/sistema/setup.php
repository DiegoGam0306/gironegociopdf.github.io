<!DOCTYPE html>
<html>
  <head>
    <title>Procesando</title>
  </head>
  <body>

    <h3>Espera un momento....</h3>

<?php
  require_once 'functions.php';

  createTable('users',
              'user VARCHAR(16),
              pass VARCHAR(16),
              INDEX(user(6))');

  createTable('messages',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              auth VARCHAR(16),
              recip VARCHAR(16),
              pm CHAR(1),
              time INT UNSIGNED,
              message VARCHAR(4069),
              INDEX(auth(6)),
              INDEX(recip(6))');
              
  createTable('friends',
              'user VARCHAR(16),
              friend VARCHAR(16),
              INDEX(user(6)),
              INDEX(friend(6))');

  createTable('profiles',
              'user VARCHAR(16),
              text VARCHAR(4069),
              INDEX(user(6))');

  createTable('productos',
              'producto VARCHAR(16),
              tipo VARCHAR(16),
              cantidad INT(6),
              precio INT(6)');

  createTable('admin',
              'access VARCHAR(16),
              adminpass VARCHAR(16)');            
?>
    <br>Completado!.
  </body>
</html>