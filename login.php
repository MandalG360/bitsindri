<?php include_once('header.php') ?>

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
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">User ID</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter email or mobile" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input name="pass" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="forget.php">Forgot Password?</a>
                                                <input type="submit" class="btn btn-success" value="Login" name="login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
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

    if(isset($_POST['login'])){ 

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $run = mysqli_query($conn, "SELECT * FROM user WHERE (mobile='".$email."' AND password='".md5($pass)."') OR (email='".$email."' AND password='".md5($pass)."') ");

        while($row = mysqli_fetch_array($run)){
            $name = $row['name'];
            $usr_id = $row['usr_id'];
            $desn_id = $row['desn_fk'];
        }
        
        if(mysqli_num_rows($run)>0){
            $_SESSION['session_name'] = $name;
            $_SESSION['session_id'] = $usr_id;
            $_SESSION['session_desn_id'] = $desn_id;

            echo "<script>window.open('admin/dashboard.php','_self')</script>";
        }
        else{
            $error = "Incorrect User ID or Password!";
            echo "<script>window.open('login.php?error=".$error."','_self');</script>";
            exit();
        }
    }
?>