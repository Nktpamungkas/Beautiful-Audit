<?php
    include_once 'connection/connection.php';
    $id = $_GET['id'];
    
    $dataDok = mysql_query("SELECT * FROM user WHERE id='$id'");
    if(mysql_num_rows($dataDok) == 0){
        echo '<script>window.history.back()</script>';
    }else{
        $EditData = mysql_fetch_assoc($dataDok);   
    }
?>
<?php
    if(isset($_POST['submit'])){
        include_once 'connection/connection.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $hak_akses = $_POST['hak_akses'];

            if($password==$repassword){
                $Save = mysql_query("UPDATE user SET username='$username',password='$password',hak_akses='$hak_akses'
                                                WHERE id='$id'");
                if($Save) {
                    header("Location: ?BA=DataStaff");
                } else {
                    echo "QUERY ERROR";
                }
            }else{
                $pesanError = 'Password does not match the confirm password.';
            }
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>::Beautiful Produk Audit | Dashboard</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- HEADER END-->
    <?php include_once 'MenuBar.php'; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Data Staff</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Staff
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; overflow-y:scroll">
                                    <thead>
                                        <tr>
                                            <th width="40">No</th>
                                            <th>Username</th>
                                            <th>Hak Akses</th>
                                            <th># Opsi #</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once 'connection/connection.php';
                                            $dataDok = mysql_query("SELECT * FROM user");
                                            while ($fetchDataDok = mysql_fetch_array($dataDok)){
                                        ?>
                                        <tr>
                                            <td><?php echo $fetchDataDok['id']; ?></td>
                                            <td><?php echo $fetchDataDok['username']; ?></t>
                                            <td><?php echo $fetchDataDok['hak_akses']; ?></td>
                                            <td>
                                                <a href="?BA=EditUser&id=<?php echo $fetchDataDok['id']; ?>">
                                                    <span class="label label-primary">Edit</span></a>
                                                 <a href="?BA=DeleteUser&id=<?php echo $fetchDataDok['id']; ?>">
                                                    <span class="label label-danger">Drop</span></a>
                                            </td>
                                        </tr>
                                        <?php }?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Data Staff
                        </div>
                        <form action="" method="post">
                            <div class="panel-body">
                            <label>Enter Username :</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $EditData['username']; ?>" required>
                            <label>Enter Password :</label>
                            <?php
                                if (isset($pesanError)) {
                                echo '<b style=color:red>' . $pesanError . '</b>';
                                }
                            ?>
                            <input type="password" class="form-control" name="password" value="<?php echo $EditData['password']; ?>" required>
                            <label>Re-Enter Password :</label>
                             <?php
                                if (isset($pesanError)) {
                                echo '<b style=color:red>' . $pesanError . '</b>';
                                }
                            ?>
                            <input type="password" class="form-control" name="repassword" required>
                            <label>Hak Akses :</label>
                            <select class="form-control" name="hak_akses" required>
                                <option value="<?php echo $EditData['hak_akses']; ?>"><?php echo $EditData['hak_akses']; ?></option>
                                <option value="Staff">Staff</option>
                                <option value="Admin">Admin</option>
                                <option value="IT">IT</option>
                            </select>
                            <hr />
                            <button class="btn btn-success" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span>  Save</button>
                            </div>
                            <div class="panel-footer text-muted">
                                <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include_once "Footer.php"; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
