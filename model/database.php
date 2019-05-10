<?php

$connectionId = mysqli_connect('localhost','root','mannat');
mysqli_select_db($connectionId, 'myapp');


function closeConnection($connectionId){
    
    mysqli_close($connectionId);
}
