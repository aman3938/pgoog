<?php
$connectionId = mysqli_connect('localhost','root','mannat');
mysqli_select_db($connectionId, 'myapp');


function closeConnection(){
    
mysqli_close($connectionId);
}
