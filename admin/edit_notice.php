<?php include_once('header_admin.php');

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM notice WHERE notice_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $msg = $row['msg'];
    $old_file = $row['file']; 
    $link = $row['link']; 
    $sdt = $row['start_date_time'];
    $edt = $row['end_date_time'];
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
                    <legend class="w-auto px-2"><b>Update Old Notice</b></legend>

                    <form role="form" id="form" name="form" method="post" action="" enctype="multipart/form-data">
                        
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Message / Title</label>
                                    <textarea name="msg" rows="2" class="form-control py-4" id="inputMsg" type="text" placeholder="Write title for notice..." required /><?php echo $msg; ?></textarea> 
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFile">File</label>
                                    <input name="file" class="form-control b-none" id="inputFile" type="file" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLink">Link <sub>Consider first</sub></label>
                            <input name="link" class="form-control py-4" id="inputLink" type="text" placeholder="Past link here..." value="<?php echo $link; ?>"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputStartDateTime">Start DateTime <sub style="color: red;"><?php echo $sdt; ?></sub></label>
                                    <input name="startDateTime" class="form-control py-4" id="inputStartDateTime" type="datetime-local" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEndDateTime">End DateTime <sub style="color: red;"><?php echo $edt; ?></sub></label>
                                    <input name="endDateTime" class="form-control py-4" id="inputEndDateTime" type="datetime-local" required />
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
                NoticeTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Notice</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                $cdt = date('Y-m-d H:i:s');
                                $query = mysqli_query($conn, "SELECT * FROM notice ORDER BY notice_id DESC");
                                while(@$row = mysqli_fetch_array($query)){
                                  $notice_id = $row['notice_id'];
                                  $msg = $row['msg'];
                                  $file = $row['file']; 
                                  $link = $row['link']; 
                                  $sdt = $row['start_date_time'];
                                  $edt = $row['end_date_time'];
                                  $dcs_days = intval((strtotime($cdt)-strtotime($sdt))/(60*60*24));
                                  $dce_days = intval((strtotime($cdt)-strtotime($edt))/(60*60*24));
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $msg; ?></td>

                                <?php if($dcs_days < 0){ ?>
                                    <td><a class="btn btn-warning btn-xs"> Pending </a></td>
                                <?php }else if($dce_days > 7){ ?>
                                    <td><a class="btn btn-danger btn-xs"> Closed </a></td>
                                <?php }else{ ?>
                                    <td><a class="btn btn-success btn-xs"> Running... </a></td>
                                <?php } ?>

                                <td><a href="edit_notice.php?id=<?php echo $notice_id; ?>" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> </a></td>

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

        $usr_id = $_SESSION['session_id'];
        $msg = mysqli_real_escape_string($conn, $_POST['msg']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        $startDateTime = strtolower(mysqli_real_escape_string($conn, $_POST['startDateTime']));
        $endDateTime = mysqli_real_escape_string($conn, $_POST['endDateTime']);
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
          
        if($link !=""){
            $run = mysqli_query($conn, "UPDATE notice SET msg='$msg',link='$link',start_date_time='$startDateTime',end_date_time='$endDateTime',usr_id='$usr_id' WHERE notice_id=$id");

            if($run){
                echo "<script>window.open('notice.php?done=Updated successfully.','_self');</script>";
                exit();
            }else {
                $error = "Something is wrong!";
                echo "<script>window.open('notice.php?error=".$error."','_self');</script>";
                exit();
            }
        }
        else
        {
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/pjpeg")){
                if ($_FILES["file"]["error"] > 0) {
                  $error = $_FILES["file"]["error"];
                  echo "<script>window.open('notice.php?error=".$error."','_self');</script>";
                  exit();
                }

                $run = mysqli_query($conn, "INSERT INTO notice(msg,file,start_date_time,end_date_time,usr_id) values('$msg','".compress_image($_FILES["file"]["tmp_name"], '../assets/notice/'.date('dmYHis').'.jpg', 40, date('dmYHis'))."','$startDateTime','$endDateTime','$usr_id')");

                $run = mysqli_query($conn, "UPDATE notice SET msg='$msg',file='".compress_image($_FILES["file"]["tmp_name"], '../assets/notice/'.date('dmYHis').'.jpg', 40, date('dmYHis'))."',start_date_time='$startDateTime',end_date_time='$endDateTime',usr_id='$usr_id' WHERE notice_id=$id");

                if($run){
                    echo "<script>window.open('notice.php?done=Updated successfully.','_self');</script>";
                    exit();
                }else {
                    $error = "Problem on uploading image!";
                    echo "<script>window.open('notice.php?error=".$error."','_self');</script>";
                    exit();
                }
            }
            else if(($type == "application/pdf") || ($type == "text/plain") || ($type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")){

                    $file = date('dmYHis').$_FILES['file']['name'];
                    $tmp = $_FILES['file']['tmp_name']; 

                    $run = mysqli_query($conn, "UPDATE notice SET msg='$msg',file='$file',start_date_time='$startDateTime',end_date_time='$endDateTime',usr_id='$usr_id' WHERE notice_id=$id");

                    if($run){
                        move_uploaded_file($tmp,"../assets/notice/$file");
                        echo "<script>window.open('notice.php?done=Saved successfully.','_self');</script>";
                        exit();
                    }else {
                        $error = "Problem on uploading file!";
                        echo "<script>window.open('notice.php?error=".$error."','_self');</script>";
                        exit();
                    }
            }
            else {
                $error = "Something is wrong!";
                echo "<script>window.open('notice.php?error=".$error."','_self');</script>";
                exit();
            }

            //delete Previous file
            if($file !=""){
                array_map('unlink', glob("../assets/notice/$old_file"));
            }
       }
    }
 ?>