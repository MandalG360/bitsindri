<?php include_once('header.php') ?>

<SCRIPT language="JavaScript" type="text/javascript">
    function validateForm()
    {
       var x=document.forms["form"]["pass"].value;
       var y=document.forms["form"]["repass"].value;
        if(x != y){
            alert("Confirm Password not matched!");
            return false;
        }else{
            return true;
        }
    }
</SCRIPT>

    <section id="blog" class="blog">

        <?php if(@$_GET['error']){?>
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #ff0000; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['error']; ?>
                </span></center>
        <?php }else if(@$_GET['done']){?>       
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #00ff00; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['done']; ?>
                </span></center>
        <?php }else{ echo ""; } ?>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form role="form" id="form" name="form" method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm(this.form)">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputDesn">Designation</label>
                                                        <select name="desn" id="inputDesn" class="form-control" required>
                                                            <option value="">...Select Designation...</option>
                                                            <?php 
                                                                  $run = mysqli_query($conn, "select * from designation");
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
                                                                  $run = mysqli_query($conn, "select * from department");
                                                                  while($rows = mysqli_fetch_array($run))
                                                                  {
                                                                    echo "<option value=".$rows['dept_id'].">".$rows['name']."</option>";
                                                                  }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Full Name</label>
                                                        <input name="name" class="form-control py-4" id="inputLastName" type="text" placeholder="Enter full name" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputMobile">Mobile</label>
                                                        <input name="mob" class="form-control py-4" id="inputMobile" type="text" placeholder="Enter mobile number" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input name="pass" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input name="repass" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <input class="btn btn-success btn-block" type="submit" name="save" value="Create Account" class="btn btn-success">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

<?php include_once('footer.php') ?>


<?php
    if(isset($_POST['save'])){
        $error = ""; $done = "";
        $desn = mysqli_real_escape_string($conn, $_POST['desn']);
        $dept = mysqli_real_escape_string($conn, $_POST['dept']);
        $name = ucwords(mysqli_real_escape_string($conn, $_POST['name']));
        $mob = mysqli_real_escape_string($conn, $_POST['mob']);
        $email = strtolower(mysqli_real_escape_string($conn, $_POST['email']));
        $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));
        $repass = mysqli_real_escape_string($conn, md5($_POST['repass']));
              
        $run = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' OR mobile='$mob'");
        $row = mysqli_num_rows($run);
        if($row >= 1){
            $error = "Try another email & mobile, these are not allowed!";
            echo "<script>window.open('signup.php?error=".$error."','_self');</script>";
            exit();
        }

        if($pass != $repass){
           $error = "Confirm Password not matched!";
           echo "<script>window.open('signup.php?error=".$error."','_self');</script>";
           exit();
        }

        $query = "INSERT INTO user(desn_fk,dept_fk,name,mobile,email,password) values('$desn','$dept','$name','$mob','$email','$pass')";
        
        $run = mysqli_query($conn, $query);

        if($run){
            $done = "You have Registred Successfully!";
            echo "<script>window.open('signup.php?done=".$done."','_self');</script>";
            exit();
        }
        else {
            $error = "Something is wrong!";
            echo "<script>window.open('signup.php?error=".$error."','_self');</script>";
            exit();
        }
    }
 ?>