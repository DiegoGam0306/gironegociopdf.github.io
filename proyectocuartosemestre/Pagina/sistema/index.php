<?php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to Coffee bike community chat,";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' you cant access the chat if you are not logged in';

  echo <<<_END
      </div><br>
     </div>
     <div data-role="footer">
       <h4>Web App from <i><a href='http://localhost/socialred_v5'
       target='blank'>Web Development</a></i></h4>
     </div>
     <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
     <script src="bootstrap/popper.min.js"></script>
     <script src="bootstrap/bootstrap.min.js"></script>
   </body>
 </html>
 _END;
?>  
  