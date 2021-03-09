<?php include_once('header_admin.php'); ?>

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
                    <legend class="w-auto px-2"><b>Add New teacher Contact</b></legend>

                    <form role="form" id="form" name="form" method="post" action="" enctype="multipart/form-data">
                        
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputName">Name</label>
                                    <input name="name" class="form-control py-4" id="inputName" type="text" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputMobile">Mobile</label>
                                    <input name="mob" class="form-control py-4" id="inputMobile" type="text" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmail">Email</label>
                                    <input name="email" class="form-control py-4" id="inputEmail" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputDesn">Designation</label>
                                    <select name="desn" id="inputDesn" class="form-control" required>
                                        <option value="">...Select Designation...</option>
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
                                        <option value="">...Select Department...</option>
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                TeacherContactTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Edit</th>.
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                $query = mysqli_query($conn, "SELECT teacher_contact.tchr_id as 'tchr_id', teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) ORDER BY teacher_contact.tchr_id DESC");
                                while(@$row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['desn']; ?></td>
                                <td><?php echo $row['dept']; ?></td>
                                <td><?php echo $row['mob']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="edit_teacher_contact.php?id=<?php echo $row['tchr_id']; ?>" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> </a></td>
                                <td><a onclick='return Confirm();' href="delete_teacher_contact.php?id=<?php echo $row['tchr_id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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

        $run = mysqli_query($conn, "INSERT INTO teacher_contact(name,mob,email,desn_fk,dept_fk,usr_fk) values('$name','$mob','$email','$desn_fk','$dept_fk','$usr_fk')");

        if($run){
            echo "<script>window.open('teacher_contact.php?done=Saved successfully.','_self');</script>";
            exit();
        }else {
            $error = "Something is wrong!";
            echo "<script>window.open('teacher_contact.php?error=".$error."','_self');</script>";
            exit();
        }
    }
 ?>