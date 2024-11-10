<?php
    $title = 'APP zalogowany/a';
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

    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php 
                // ini_set('session.gc_maxlifetime', 10);
                session_start();
                // $_SESSION['teraz'] = time();
                // if ( isset($_SESSION['teraz']) && (time() - $_SESSION['teraz'] > 10) ) {
                    //     session_unset();
                    //     session_destroy();
                    // }
                if (isset($_SESSION['loginUser'])) {
                    echo "Witaj " . $_COOKIE["imie"] . " w sesji...";
                    
                    // Logout
                    if (isset($_POST['logout'])) {
                        session_destroy();
                        setcookie("logowanie", "", time()-3600, "/");
                        header("Location: index.php");
                    }
                ?>
                    <form action="index.php" method="post">
                        <button type="submit" class="btn btn-success" name="logout">Log out</button>
                    </form>
                <?php
                    } else {
                        header("Location: index.php");
                        exit;
                    }
                ?>
                    <h1>
                        <?php 
                            if (isset($_COOKIE['visitcount'])) {
                                echo "Byłeś/aś " . $_COOKIE['visitcount'] . " razy zalogowany/a.";
                            }
                        ?>
                    </h1>
                    
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 