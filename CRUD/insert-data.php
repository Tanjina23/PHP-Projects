<?php

include('db-connect.php');

if(isset($_POST['add-students'])){
   
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $phone = $_POST['phone'];

    $query = "INSERT into `student`(`firstName`,`lastName`,`phone`) values ('$firstName','$lastName','$phone')";
    $result = mysqli_query($connect,$query);

    if(!$result){
        die("Insertion Failed");
    }

    else{
        header("location:index.php");
    }

}

?>