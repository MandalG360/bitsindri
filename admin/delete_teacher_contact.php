<?php 
    include("./connect_db.php");
    if(isset($_POST)){
        
        $id = $_GET['id'];
        $query = "DELETE FROM teacher_contact WHERE tchr_id='$id'";

        if(mysqli_query($conn, $query)){
            echo "<script>window.open('teacher_contact.php?done=Data deleted successfully.','_self')</script>";
        }
    	else{
    			
    		echo "<script>window.open('teacher_contact.php?error= File not Deleted.','_self');</script>";
    	}
    }

?>