<?php include('header.php');?>
<?php include('db-connect.php');?>


<div class="box-1">
  <h2 class="bg-secondary text-white">All Students Details</h2>
  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     ADD Students
</button>

</div>
<table class="table table-hover table-bordered table-striped">
          <thead>
             <tr>
                 <th>ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Phone</th>
                 <th>Update</th>
                 <th>Delete</th>
             </tr>
            
          </thead>
    
          <tbody>

          <?php 
            $query = "select * from `student`";

            $result = mysqli_query($connect,$query);

            if(!$result){
              echo "Query Failed";
            }

            else{
                while($row = mysqli_fetch_assoc($result)){
                  ?>

                  <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['firstName'];?></td>
                  <td><?php echo $row['lastName'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                  <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>

                  </tr>
  
                  <?php
                }
               
            }
            ?>
                
          </tbody>
    
        </table>
   
     <!-- Modal -->
     <form action="insert-data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Up The Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" required>
             </div>
             <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" required>
             </div>
             <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control" required>
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" name="add-students" class="btn btn-success" value="ADD"></input>
            </div>
          </div>
        </div>
      </div>
    </form>


<?php include('footer.php');?>