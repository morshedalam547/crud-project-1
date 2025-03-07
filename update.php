<?php 
include "db.php";

if (isset($_GET['update_id'])) {
    $id = $_GET['update_id'];

    $query = "SELECT * FROM students WHERE id = $id";

    $result = mysqli_query($conn,$query);

    if(isset($result)){
        $row = mysqli_fetch_assoc($result);
    
    }else{
        die("query failed");
    
       }
//  or
   // if(!$result){
//     die("query failed");
// }else{
//     $row = mysqli_fetch_assoc($result);
//    }
}

if(isset($_POST['update_students'])){
    $fname = $_POST['f_name'];
    $lname= $_POST['l_name'];
    $age = $_POST['age'];

    $query = "UPDATE students SET first_name='$fname', last_name = '$lname', age = '$age' WHERE id = $id";
 
    $result = mysqli_query($conn,$query);

if(mysqli_query($conn,$query)){

    header("location: Read.php?success=added");
}else{
    header("location: Read.php?alert=add_failed");
   }

}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container text-center ">
<header class="d-block m-auto bg-success text-white rounded-4 border border-danger p-2 my-4 w-75 " >
<h1 class=>UPDATE STUDENTS</h1>
</header>
</div>
    <form action="update.php?update_id=<?php echo $row['id']; ?>" method="POST">
 
           <div class="container w-50">
                <label for="fname">First Name</label>
                <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>"required/>
            </div>
            <div class="container w-50">
            <label for="lname">Last Name</label>
            <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']; ?>" />
            </div>
            <div class="container w-50">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="<?php echo $row['age']; ?>"/>
            <input type="submit" class="btn btn-primary mt-2" name="update_students" value="Update">
            </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>





<!-- or -->


<?php

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $query = "SELECT * FROM students WHERE id = $id";
//     $result = mysqli_query($conn,$query);


//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//     } else {
//         echo "No contact found.";
//         exit();
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $fname = $_POST['f_name'];
//     $lname= $_POST['l_name'];
//     $age = $_POST['age'];

//     $sql = "UPDATE students SET first_name='$fname', last_name = '$lname', age = '$age' WHERE id = $id";

//     if ($conn->query($sql) === TRUE) {
//         header("location: Read.php?success=added");
//         exit();
//     } else {
//         header("location: Read.php?alert=add_failed");
// }

//  }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="container text-center bg-dark text-light p-3 rounded my-4">CRUD APPLICATION IN PHP</h1>

    <form action="update.php?id=<?php echo $row['id']; ?>" method="POST">
 
           <div class="container w-50">
                <label for="fname">First Name</label>
                <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>"required/>
            </div>
            <div class="container w-50">
            <label for="lname">Last Name</label>
            <input type="text" name="l_name" class="form-control" class="form-control"value="<?php echo $row['last_name']; ?>" />
            </div>
            <div class="container w-50">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" value="<?php echo $row['age']; ?>"/>
            <input type="submit" class="btn btn-success" value="Update">
            </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html> -->
