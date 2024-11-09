<?php
    $title = 'APP';

    session_start();
    $login = "janek";
    $pass = "1234";
    if(isset($_POST["submit"])) {
        if(isset($_POST["login"]) && isset($_POST["password"])) {
            if($login == $_POST["login"] && $pass == $_POST["password"]) {
                echo "Logowanie z sukcesem !!!";
                echo session_id();
                $_SESSION["loginUser"] = session_id();
            }else{
                echo "BŁĘDNY LOGIN LUB HASŁO";
            }
        }
        echo $_POST["login"] . " " . $_POST["password"];
    }

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- <h1><?php echo $title; ?></h1> -->

    <div class="app-login-start">
        <?php
            if(isset($_SESSION["loginUser"])) {
        ?>
            <form action="index.php" method="post">
                <button type="submit" class="btn btn-success" name="logout">Log out</button> 
            </form>
        <?php    
            } else {
        ?>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </form>
        <?php
            }     
        ?>
    </div><!--end-app-login-start-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 