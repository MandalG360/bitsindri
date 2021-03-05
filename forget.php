<?php include_once('header.php') ?>

    <section id="blog" class="blog">
        <?php if(@$_GET['error']){?>
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #ff0000; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['error']; ?>
                </span></center>
        <?php }else if(@$_GET['done']){?>       
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #00ff00; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['done']; ?>
                </span></center>
        <?php }else{ echo ""; } ?>

        <?php
            //if "email" variable is filled out, send email
              if (isset($_REQUEST['send']))  {
                function generatePassword(){
                    $array = array('0','1','2','3','4','5','6','7','8','9');
                    
                    $password="";
                    for($i=0;$i<6;$i++){
                        $index = rand(0,count($array)-1);
                        $password.=$array[$index];
                    }
                    return $password;
                }
              
              //Email information                           
              $from = mysqli_real_escape_string($conn, $_POST['email']);
              $to = mysqli_real_escape_string($conn, $_POST['email']);
                                       
              $run = mysqli_query($conn, "SELECT email FROM user WHERE email='$to'");
              $row = mysqli_num_rows($run);                         
              if($row == 0){
                $error = "This email id is not Registered!";
                echo "<script>window.open('forget.php?error=".$error."','_self');</script>";
                exit();
              }else{
                $pass = generatePassword();
                $incrpass = md5($pass);
                $subject = "Forgot Password | BIT SIndri, Dhanbad";
                $comment = "Your New Password is ".$pass." Please use this password and login. This is auto generated password. you may update this password for best Security. NOTE: Don't share user_id and password fron anyone.";
                mysqli_query($conn, "UPDATE user SET password='$incrpass'  WHERE email='$to'");
              }              
              
              //send email
              mail($to, "$subject", $comment, "From:" . $from);
              
              //Email response
              $done = "New Password sent your registred email id.";
              echo "<script>window.open('forget.php?done=".$done."','_self');</script>";
              exit();
              }
              
              //if "email" variable is not filled out, display the form
              else  {
            ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Return to login</a>
                                                <input type="submit" class="btn btn-success" value="Reset Password" name="send">
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
    <?php } ?>

    </section>
<?php include_once('footer.php') ?>
