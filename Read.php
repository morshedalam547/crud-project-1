
<?php 

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Crud Test 1</title>
</head>
<body>
   
    <h1 class="container text-center bg-success text-light p-3 rounded-4 my-4">CRUD APPLICATION IN PHP</h1>

    <!--Alert Start  -->
  <?php  
  /* failed Alert start  */
   if(isset($_GET['alert']))
   {
      
         if($_GET['alert']=='add_failed')
         {
           echo<<<alert
         <div class=" container alert alert-danger alert-dismissible text-center" role="alert">
            <strong>Cannot Add Product! Server Down</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         alert;
           }
           if($_GET['alert']=='remove_failed')
           {
             echo<<<alert
           <div class=" container alert alert-danger alert-dismissible text-center" role="alert">
              <strong>Cannot Remove Product! Server Down</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           alert;
             }
      }
  /* failed Alert End  */


    /* Success Alert start  */
      else if(isset($_GET['success']))
      {
      
       if($_GET['success']=='added')
       {
         echo<<<alert
       <div class=" container alert alert-success alert-dismissible text-center" role="alert">
          <strong>Students name  Added</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       alert;
       }
       if($_GET['success']=='removed')
       {
         echo<<<alert
       <div class=" container alert alert-danger alert-dismissible text-center" role="alert">
          <strong>Students id removed</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       alert;
       }
      }
        /* success Alert End  */
        ?>
<!-- Alert End -->

    <div class="container border border-primary bg-dark text-light p-3  rounded-4 my-4">
        <div class= "d-flex justify-content-between px-3 ">
        <h2 class ="text-white ">All students</h2>
        <button type="button" class="btn btn-primary fs-6" data-bs-toggle="modal" data-bs-target="#addstudents"><i class="bi bi-plus" ></i>Add Students</button>
    </div>
    </div>
    <div class="container bg-light p-3">
    <table class=" table table-border table-hover ">
        <thead class="table-dark text-center">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
               <th >Action</th>
           
            </tr>
        </thead>
        <tbody class="text-center" >
            <?php 
            
            $query = "SELECT * FROM students";

            $result = mysqli_query($conn,$query);

      
                    
                while($row = mysqli_fetch_assoc($result)){
                  //or 
                  //foreach( $result as $row ){
            ?>
        <tr>
            <td><?php echo $row ["id"]; ?></td>
            <td><?php echo $row ["first_name"]; ?></td>
            <td><?php echo $row ["last_name"]; ?></td>
            <td><?php echo $row ["age"]; ?></td>
            <td>
            <a href="update.php?update_id=<?php echo $row ["id"]; ?>" class="btn btn-success me-2 "><i class="bi bi-pencil-square"></i></a> 
            <a href="Delete.php?delete_id=<?php echo $row ["id"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure delete this name?')"><i class="bi bi-trash"></i></a>
            </td>
       </tr>

    <?php 
            }
    
      ?>

        </tbody>
    </table>
    </div>
   <!-- Create or Add Start -->
  
    <form action="create.php" method="post">
    <div class="modal fade" id="addstudents" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
            <div class="form_group">
                <label for="fname">First Name</label>
                <input type="text" name="f_name" class="form-control" required/>
            </div>
            <div class="form_group">
            <label for="lname">Last Name</label>
            <input type="text" name="l_name" class="form-control"/>
            </div>
            <div class="form_group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" />
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD."/>
      </div>
    </div>
  </div>
</div>
</form>
   <!-- Create or Add End -->
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>