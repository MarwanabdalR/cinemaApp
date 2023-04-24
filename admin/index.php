<?php 
    session_start();
    $noNavbar='';
    if (isset($_SESSION['Username'])) {
        # code...
        header('Location: dashboard.php');

    }
    include "init.php";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        # code...
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $hashedPass = sha1($password);

        $stmt = $con->prepare("SELECT Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1");
        $stmt-> execute(array($username, $hashedPass));
        $count = $stmt->rowCount();

        if ($count > 0) {
            # code...
            $_SESSION['Username'] = $username;
            header('Location: dashboard.php');
            exit();
        }
    }
?> 
    <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h4 class="text-center"> Admin Login</h4>
        <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
        <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password" />
        <input class="btn btn-primary btn-block" type="submit" value="Login"/>
    </form> 
<?php include $tpl . 'footer.php'; ?>