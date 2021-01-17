<?php
    session_start();
    $_SESSION['computer_num'] = isset($_SESSION['computer_num']) ? $_SESSION['computer_num'] : rand(1, 200);
    $_SESSION['num'] = isset($_SESSION['num']) ? $_SESSION['num'] : 1;
    $message = "";
    include "includes/check.php";
    if (isset($_POST['player_number'])) {
        $number= $_POST["number"];
        $result = check_number($number);
        if ($result == 0) {
            $message = 'Your number is Bigger than the compouters number';
            $_SESSION['num']++;
        }else if ($result == 1) {
            $message = 'Your number is smaller than the computers number';
            $_SESSION['num']++;
        }else {
            $message = $_SESSION['computer_num'] . ' You found it with ' . $_SESSION['num'] . ' tries!!!!!!!!';
            unset($_SESSION["computer_num"], $_SESSION['num']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Guess the number Game</title>
    </head>
    <body>
        <div class="box">
            <img src="images/logo.png" class="d-block mx-auto" alt="logo">
        </div>
        <div class="container">
            <H3> 
                The computer generates a number between 1 and 200 and the user tries to quess that number
            </H3>
            <form action="" method="post">
                <div class='form-group'>
                    <label for="title" class="for">Guess the Number (1 - 200)</label>
                    <input type="text" class="form-control" name="number">
                </div>
                <div class='form-group'>
                    <label for="title" class="for"><?php echo $message ?></label>
                </div>
                <div class='form-group'>
                    <input class = 'btn btn-primary' type = 'submit' name = 'player_number' value = 'Check Number'>
                    <input class = 'btn btn-primary' type = 'submit' name = 'info' value = 'About' onclick='about()'>
                </div>
            </form>
        </div>
        <div class="container">
            <footer class="bg-light text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © <?php echo date("Y"); ?> Created by Nikolaos Psaltakis
                </div>
            </footer>
        </div>
        <script>
            function about() {
                $message1 = "The computer generates a number betwwen 1 and 100.\n";
                $message2 = "The user tries to quess that number.\n";
                $message3 = "Programmer : Nikolaos Psaltakis";
                alert($message1 + $message2 + $message3);
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>