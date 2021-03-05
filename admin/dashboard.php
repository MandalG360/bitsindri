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
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Notices</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Gallary</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Sliders</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
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