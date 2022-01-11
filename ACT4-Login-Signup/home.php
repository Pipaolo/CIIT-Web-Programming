<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3 - Home</title>
    <link rel="stylesheet" href="assets/styles/tailwind.css">
</head>

<body class="bg-slate-400 w-full flex h-screen p-4 items-center justify-center">
    <!-- Start loading the currently logged in user. -->
    <?php
    session_start();
    $email = $_SESSION["email"];
    ?>
    <div class="bg-white flex flex-col p-4 rounded-lg shadow-lg gap-4">
        <h4 class="text-2xl font-bold underline">
            Welcome
            <?php
            echo $email;
            ?>!
        </h4>

        <!-- Create the form that will handle the logout submission -->
        <form method="POST" class="flex items-center justify-center">
            <button type="submit" class="bg-slate-400 hover:shadow-lg px-4 py-2 rounded-lg ">
                <span class="font-bold text-slate-800">Logout</span>
            </button>
        </form>

    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $_SESSION["email"] = '';
        header("Location: index.php");
    }
    ?>
</body>

</html>