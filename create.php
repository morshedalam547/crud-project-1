<?php 
include "db.php";

if(isset($_POST['add_students'])){
    $fname = $_POST['f_name'];
    $lname= $_POST['l_name'];
    $age = $_POST['age'];


    $fname=filter_input(INPUT_POST, 'f_name',FILTER_SANITIZE_STRING);
    $lname=filter_input(INPUT_POST, 'l_name',FILTER_SANITIZE_STRING);

  
$query = "INSERT INTO students (first_name, last_name, age) VALUES ('$fname', '$lname','$age')";

$result = mysqli_query($conn,$query);

if(isset($result)){

    header("location: Read.php?success=added");
}else{
    header("location: Read.php?alert=add_failed");
}


}

     

//         or


// if(isset($_POST['add_students'])){
//     $fname = $_POST['f_name'];
//     $lname= $_POST['l_name'];
//     $age = $_POST['age'];


//     $fname=filter_input(INPUT_POST, 'f_name',FILTER_SANITIZE_STRING);
//     $lname=filter_input(INPUT_POST, 'l_name',FILTER_SANITIZE_STRING);



// $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$fname', '$lname','$age')";


// if(mysqli_query($conn,$query)){

//     header("location: Read.php?success=added");
// }else{
//     header("location: Read.php?alert=add_failed");
// }


// }

//         or

// if(isset($_POST['add_students'])){
//     $fname = $_POST['f_name'];
//     $lname= $_POST['l_name'];
//     $age = $_POST['age'];


//     $fname=filter_input(INPUT_POST, 'f_name',FILTER_SANITIZE_STRING);
//     $lname=filter_input(INPUT_POST, 'l_name',FILTER_SANITIZE_STRING);



// $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$fname', '$lname','$age')";

// $result = mysqli_query($conn,$query);

// if(!$result){
//     header("location: Read.php?alert=add_failed");
// }else{
//     header("location: Read.php?success=added");
//     }


// }

