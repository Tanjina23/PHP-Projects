<?php include('header.php');?>
<?php include('db-connect.php');?>


 <?php
   if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "select * from `student` where `id` = '$id'";

            $result = mysqli_query($connect,$query);

            if(!$result){
              echo "Query Failed";
            }

            else{
                  $row = mysqli_fetch_assoc($result);


            }
   }

?>


  <?php
   if(isset($_POST['update-students'])){

    if(isset($_GET['id_new'])){
        $id_new = $_GET['id_new'];
    }
      
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $phone = $_POST['phone'];

    $query = "update `student` set `firstName` = '$firstName', `lastName` = '$lastName', `phone` = '$phone' where `id` = '$id_new'";
    $result = mysqli_query($connect, $query);

    if(!$result){
         die("Failed to Update Data!".mysqli_error());
    }

    else{
            header("location: index.php");

    }


   }

?> 


        <form action="update.php?id_new=<?php echo $id ; ?>" method="post">
           <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstName'];?>">
             </div>
             <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control"  value="<?php echo $row['lastName'];?>">
             </div>
             <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control"  value="<?php echo $row['phone'];?>">
             </div>

             <input type="submit" name="update-students" class="btn btn-success" value="UPDATE"></input>
        </form>


<?php include('footer.php');?>