<!-- PAGE HEADER -->
<div class="page_header">
    <div class="bcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bcrumbs">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li>Login</li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SHOP CONTENT -->
<div class="inner-content">
    <div class="container">
        <div class="row shop-login">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="box-content">
                    <h3 class="uppercase text-center">Login</h3>
                    <div class="clearfix space40"></div>
                    <form class="logregform" action="" method="post">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Username or E-mail Address</label>
                                    <input type="text" name="username" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix space20"></div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <a class="pull-right" href="#">(Lost Password?)</a>
                                    <label>Password</label>
                                    <input type="password" name="password" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix space20"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="remember-box checkbox">
                                <label for="rememberme">
                                <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                </label>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" name="login" value="login" class="button btn-md pull-right"/>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                    $username = @$_POST['username'];
                    $password = @$_POST['password'];
                    $login = @$_POST['login'];

                    if($login){
                        $sql = mysqli_query($koneksi, "select * from admin where username ='$username' and password=md5('$password')") or die (mysqli_error());
                        $data = mysqli_fetch_array($sql);
                        $cek = mysqli_num_rows($sql);
                        if($cek>=1){
                            @$_SESSION['admin'] = $data['id_admin'];
                            ?>
                            <script type="text/javascript">
                            window.location.href="indexadmin.php";
                            </script>
                            <?php        
                        }else{
                            echo "<div class='alert alert-dismissable alert-danger'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Login Gagal !!!</strong> <a href='#' class='alert-link'>Username atau Password salah.
                        </div>";
                        }
                    }
                ?>
            </div>				
        </div>
    </div>
</div>