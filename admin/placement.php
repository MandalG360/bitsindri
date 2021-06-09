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
            <h1 class="mt-4">Placement Record</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Placement</li>
            </ol>

            <div class="row">
                <fieldset class="form-group border p-3 w-100">
                    <legend class="w-auto px-2">Upload New Placement Data</legend>

                    <form role="form" id="form" name="form" method="post" action="" enctype="multipart/form-data">
                        
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Company name</label>
                                    <input name="cname" rows="2" class="form-control py-4" id="inputMsg" type="text" placeholder="Write title for notice..." required /></textarea> 
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="small mb-1" for="inputLink">Name <sub></sub></label>
                            <input name="name" class="form-control py-4" id="inputLink" type="text" placeholder="Please enter the Name of student..." />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFile">File</label>
                                    <input name="file" class="form-control b-none" id="inputFile" type="file" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputDept">Department</label>
                                    <select name="dept" id="inputDept" class="form-control" required>
                                        <option value="">...Select Branch...</option>
                                        <?php 
                                              $run = mysqli_query($conn, "SELECT * FROM department");
                                              while($rows = mysqli_fetch_array($run))
                                              {
                                                echo "<option value=".$rows['dept_id'].">".$rows['name']."</option>";
                                              }
                                        ?>
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputLink">CTC <sub>In LPA</sub></label>
                            <input name="CTC" class="form-control py-4" id="inputLink" type="number" step="0.01" placeholder="Enter the package....." />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputStartDateTime">Selection Date</label>
                                    <input name="startDateTime" class="form-control py-4" id="inputStartDateTime" type="datetime-local" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputStartDateTime">Batch</label>
                                    <input name="batch" class="form-control py-4" id="inputStartDateTime" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <input class="btn btn-success float-right" type="submit" name="save" value="Add & Published" class="btn btn-success">
                        </div>
                    </form>
                </fieldset>
            </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                PlacementTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Name</th>
                                <th>Branch</th>
                                <th>Company</th>
                                <th>Selection Date</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                $cdt = date('Y-m-d H:i:s');
                                $query = mysqli_query($conn, "SELECT * FROM placement ORDER BY placement_id DESC");
                                while(@$row = mysqli_fetch_array($query)){
                                  $id = $row['placement_id'];
                                  $name = $row['name'];
                                  $branch = $row['branch'];
                                  $file = $row['image']; 
                                  $c_name = $row['c_name']; 
                                  $sdt = $row['selection_date'];
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $branch; ?></td>
                                <td><?php echo $c_name; ?></td>
                                <td><?php echo $sdt; ?></td>

                                <td><a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> </a></td>
                                <td><a onclick='return Confirm();' href="delete_notice.php?id=<?php echo $notice_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
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

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $startDateTime = strtolower(mysqli_real_escape_string($conn, $_POST['startDateTime']));
        $branch = mysqli_real_escape_string($conn, $_POST['dept']);
        $CTC = mysqli_real_escape_string($conn, $_POST['CTC']);
        $batch = mysqli_real_escape_string($conn, $_POST['batch']);
        $type = $_FILES['file']['type'];

        function compress_image($source_url, $destination_url, $quality, $date)
       {
          $info = getimagesize($source_url);

          if ($info['mime'] == 'image/jpeg')
          $image = imagecreatefromjpeg($source_url);

          elseif ($info['mime'] == 'image/gif')
          $image = imagecreatefromgif($source_url);

          elseif ($info['mime'] == 'image/png')
          $image = imagecreatefrompng($source_url);

          imagejpeg($image, $destination_url, $quality, $date);
          return $date.'.jpg';
        }
                  
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/jpg")){
                if ($_FILES["file"]["error"] > 0) {
                  $error = $_FILES["file"]["error"];
                  echo "<script>window.open('placement.php?error=".$error."','_self');</script>";
                  exit();
                }

                $run = mysqli_query($conn, "INSERT INTO placement(name,image,selection_date,c_name,branch,ctc,batch) values('$name','".compress_image($_FILES["file"]["tmp_name"], '../assets/placement/'.date('dmYHis').'.jpg', 40, date('dmYHis'))."','$startDateTime','$cname','$branch','$CTC','$batch')");

                if($run){
                    echo "<script>window.open('placement.php?done=Saved successfully.','_self');</script>";
                    exit();
                }else {
                    $error = "Problem on uploading image!";
                    echo "<script>window.open('placement.php?error=".$error."','_self');</script>";
                    exit();
                }
            }
           /* else if(($type == "application/pdf") || ($type == "text/plain") || ($type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")){

                    $file = date('dmYHis').$_FILES['file']['name'];
                    $tmp = $_FILES['file']['tmp_name']; 

                    $run = mysqli_query($conn, "INSERT INTO notice(msg,file,start_date_time,end_date_time,usr_id) values('$msg','$file','$startDateTime','$endDateTime','$usr_id')");
                    if($run){
                        move_uploaded_file($tmp,"../assets/notice/$file");
                        echo "<script>window.open('notice.php?done=Saved successfully.','_self');</script>";
                        exit();
                    }else {
                        $error = "Problem on uploading file!";
                        echo "<script>window.open('notice.php?error=".$error."','_self');</script>";
                        exit();
                    }
            }*/
            else {
                $error = "Something is wrong!";
                echo "<script>window.open('placement.php?error=".$error."','_self');</script>";
                exit();
            }
       
    }
 ?>