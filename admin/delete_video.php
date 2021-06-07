<?php 
    include("./connect_db.php");
    if(isset($_POST)){
        
        $id = $_GET['id'];

        $query = "DELETE FROM video WHERE video_id='$id'";

        if(mysqli_query($conn, $query)){

            echo "<script>window.open('video.php?done=Record deleted successfully.','_self')</script>";
        }
    	else{
    			
    		echo "<script>window.open('video.php?error= Record not Deleted.','_self');</script>";
    	}
    }

?>