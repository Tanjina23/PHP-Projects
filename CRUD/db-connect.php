<?php

$connect = mysqli_connect("localhost","root","","crud_operation");

if(!$connect){
     die("Connection Failed!".mysqli_connect_error());
}
// else{
//       echo "Succesfully Connected";
// }

?>