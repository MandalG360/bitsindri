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
                    <legend class="w-auto px-2"><b>Upload New Videos</b></legend>

                    <form role="form" id="form" name="form" method="post" action="" enctype="multipart/form-data">
                        
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Videos Title</label>
                                    <textarea name="title" rows="2" class="form-control py-4" id="inputMsg" type="text" placeholder="Write title for videos..." required /></textarea> 
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputLink">Link <sub>Consider first</sub></label>
                            <input name="link" class="form-control py-4" id="inputLink" type="text" placeholder="Past link here..." />
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
                VideosTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Videos Title</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                $query = mysqli_query($conn, "SELECT * FROM video ORDER BY video_id DESC");
                                while(@$row = mysqli_fetch_array($query)){
                                  $video_id = $row['video_id'];
                                  $title = $row['title']; 
                                  $link = $row['link']; 
                            ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><a onclick='return Confirm();' href="delete_video.php?id=<?php echo $video_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
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

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
          
        if($link !=""){
            $run = mysqli_query($conn, "INSERT INTO video(title,link) values('$title', '$link')");

            if($run){
                echo "<script>window.open('video.php?done=Saved successfully.','_self');</script>";
                exit();
            }else {
                $error = "Something is wrong!";
                echo "<script>window.open('video.php?error=".$error."','_self');</script>";
                exit();
            }
        }
        else {
            $error = "Something is wrong!";
            echo "<script>window.open('video.php?error=".$error."','_self');</script>";
            exit();
        }
    }
 ?>