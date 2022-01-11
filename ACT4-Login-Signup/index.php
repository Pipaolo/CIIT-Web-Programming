<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/tailwind.css">
    <title>Activity 3 - Paolo Tolentino</title>
</head>

<body class="bg-slate-400 w-full flex h-screen p-4 ">
    <div class="flex-1 rounded-lg p-4 flex flex-col justify-center items-center text-slate-700">
        <h4 class="font-bold text-3xl">
            SolStella Authentication System
        </h4>
        <p>
            Welcome to SolStella's authentication system!
        </p>
    </div>
    <div class="flex-1 flex flex-col  rounded-lg items-center  justify-center">
        <div class="bg-white shadow-xl rounded-lg p-4 flex flex-col gap-4 w-full">
            <h5 class="font-bold text-3xl ">Login</h5>
            <hr>
            <form class="flex flex-col gap-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="flex flex-col gap-2 ">
                    <label for="emailInput" class="font-bold">Email</label>
                    <input type="text" id="emailInput" name="email" class="rounded-lg bg-slate-400 p-2 text-white">
                </div>
                <div class="flex flex-col gap-2 ">
                    <label for="passwordInput" class="font-bold">Password</label>
                    <input type="password" id="passwordInput" name="password" class="rounded-lg bg-slate-400 p-2 text-white">
                </div>
                <input type="submit" class="rounded-lg bg-white cursor-pointer hover:shadow-lg px-4 py-2 font-bold transition duration-300" />
            </form>
        </div>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        // Start adding form handling
        $email = isset($_POST["email"]) ?  $_POST["email"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';

        // Put the received form values into a Session Variable
        $_SESSION["email"] = $email;

        header("Location: home.php");
    }

    ?>
</body>

</html>