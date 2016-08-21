<?php
($notDirect) or die("You can't access this page");

 include_once './templates/header.php';
 ?>
 <div class="navbar navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav navbar-right">   
                <li><a href='reports.php'>Reports</a></li>
                <li><a href='profile.php'>Profile</a></li> 
                <li><a href='logout.php'>Logout</a></li> 
    </ul>  
  </div>               
  </div>

        
        <div class="container info">
             <div class="row">
                <div class="col-md-3 form-group analyze">Enter the URL you want to analyze </div>                  
                <div class="col-md-5 form-group"><input class="form-control" id ="urli" type="text" name="url"></div>
                <div class="col-md-2 form-group"><button class="btn btn-primary color" id="run">Run</button></div>
             </div>
        </div>
        
        <div class="container menu">
          <ul class="nav nav-tabs">
              <li><a href="#">Mobile</a></li>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Menu 3</a></li>
          </ul>
        </div>

<?php
 include_once './templates/footer.php';
 ?>
