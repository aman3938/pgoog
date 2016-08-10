<?php
($notDirect) or die("You can't access this page");

    include_once 'header.php';
 ?> 
    
      
        <div class="container log">
            <form action="index.php?page=processLogin" method="post" name="login_form" id="login_form" >
            <div class="row"><div class="col-md-6 form-group"> User Name<input class="form-control" type="text" name="username" placeholder="username"></div></div>
            <div class="row"><div class="col-md-6 form-group">Password<input class="form-control" type="password" name="password" placeholder="Password"></div></div>
            <div class="row col-md-3 put"><input type="submit" name="login" value="Login"></div>
            </form>
        </div>
   <?php
    include_once 'footer.php';
   ?>

