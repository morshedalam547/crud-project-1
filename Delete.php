<?php

include "db.php";


if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $query = "DELETE FROM students WHERE id = $id";

    $result = mysqli_query($conn,$query);

    if(isset($result)){

        header("location: Read.php?success=removed");
    }else{
        header("location: Read.php?alert=removed_failed");
       }
    
    }
    
                
    //         or


    // if (isset($_GET['delete_id'])) {
    //     $id = $_GET['delete_id'];
    
    //     $query = "DELETE FROM students WHERE id = $id";
        
    //     if(mysqli_query($conn,$query)){
    
    //         header("location: Read.php?success=removed");
    //     }else{
    //         header("location: Read.php?alert=removed_failed");
    //        }
        
    //     }
        

    //                 or

    //     if (isset($_GET['delete_id'])) {
    //         $id = $_GET['delete_id'];

    //         $query = "DELETE FROM students WHERE id = $id";

    //         $result = mysqli_query($conn,$query);
        
    //         if(!$result){
    //             header("location: Read.php?alert=removed_failed");
            
    //         }else{
    //             header("location: Read.php?success=removed");
    //            }
            
    //         }