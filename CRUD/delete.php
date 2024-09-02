<?php include('db-connect.php');?>

<?php
      if(isset($_GET['id'])){

       $id = $_GET['id'];

       $query = "delete from `student` where `id`='$id'";
       $result = mysqli_query($connect, $query);

       if(!$result){
        die("Failed to Delete Data".mysqli_error());
       }
       else{
            header("location:index.php");
       }

      }



?>