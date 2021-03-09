<?php

include_once('header_admin.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM teacher_contact WHERE tchr_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $mob = $row['mob'];
    $email = $row['email'];
    $desn_fk = $row['desn_fk'];
    $dept_fk = $row['dept_fk'];
}

?>

<script type="text/javascript">
    function Confirm() {
        if (confirm("Are you sure to Delete")) {
            return true;
        } 
        else {
            return false;
        }
    }
</script>

<div id="layoutSidenav_content">
    <main>
        <?php if(@$_GET['error']){?>
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #ff0000; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['error']; ?>
                </span></center>
        <?php }else if(@$_GET['done']){?>       
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #00ff00; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['done']; ?>
                </span></center>
        <?php }else{ echo ""; } ?>

        <div class="container-fluid">
            <div class="row">
                
                <fieldset class="form-group border p-3 w-100">
                    <legend class="w-auto px-2"><b>Edit teacher Contact</b></legend>

                    <form role="form" id="form" name="form" method="post" action="" enctype="multipart/form-data">
                        
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputName">Name</label>
                                    <input name="name" value="<?php echo $name; ?>" class="form-control py-4" id="inputName" type="text" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputMobile">Mobile</label>
                                    <input name="mob" value="<?php echo $mob; ?>" class="form-control py-4" id="inputMobile" type="text" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmail">Email</label>
                                    <input name="email" value="<?php echo $email; ?>" class="form-control py-4" id="inputEmail" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputDesn">Designation</label>
                                    <select name="desn" id="inputDesn" class="form-control" required>
                                        <option value="<?php echo $desn_fk; ?>"><?php echo mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM designation WHERE desn_id=$desn_fk"))['type']; ?></option>
                                        <?php 
                                              $run = mysqli_query($conn, "SELECT * FROM designation WHERE desn_id LIMIT 2,5");
                                              while($rows = mysqli_fetch_array($run))
                                              {
                                                echo "<option value=".$rows['desn_id'].">".$rows['type']."</option>";
                                              }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputDept">Department</label>
                                    <select name="dept" id="inputDept" class="form-control" required>
                                        <option value="<?php echo $dept_fk; ?>"><?php echo mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM department WHERE dept_id=$dept_fk"))['name']; ?></option>
                                        <?php 
                                              $run = mysqli_query($conn, "SELECT * FROM department");
                                              while($rows = mysqli_fetch_array($run))
                                              {
                                                echo "<option value=".$rows['dept_id'].">".$rows['name']."</option>";
                                              }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <input class="btn btn-success float-right" type="submit" name="save" value="Save" class="btn btn-success">
                        </div>
                    </form>
                </fieldset>
            </div>

    </div>
</main>
<?php include_once('footer_admin.php'); ?>

<?php
    if(isset($_POST['save'])){
        $error = ""; $done = "";

        $usr_fk = $_SESSION['session_id'];
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $mob = mysqli_real_escape_string($conn, $_POST['mob']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $desn_fk = mysqli_real_escape_string($conn, $_POST['desn']);
        $dept_fk = mysqli_real_escape_string($conn, $_POST['dept']);

        $run = mysqli_query($conn, "UPDATE teacher_contact SET name='$name',mob='$mob',email='$email',desn_fk='$desn_fk',dept_fk='$dept_fk',usr_fk='$usr_fk' WHERE tchr_id=$id");

        if($run){
            echo "<script>window.open('teacher_contact.php?done=Updated successfully.','_self');</script>";
            exit();
        }else {
            $error = "Something is wrong!";
            echo "<script>window.open('teacher_contact.php?error=".$error."','_self');</script>";
            exit();
        }
    }
 ?>