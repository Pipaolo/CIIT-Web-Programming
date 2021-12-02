<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "Home Page";
    include("templates/header.php") ?>
</head>

<body class="flex flex-col items-center justify-center w-full h-screen">
    <div class="flex flex-col max-w-md space-y-4">
        <h4 class="text-2xl font-bold">SolStella's Activity 2</h4>
        <!-- Route Cards -->
        <a href="/problem-1" class="p-4 text-center transition duration-300 transform bg-white rounded-lg shadow-lg hover:bg-pastel-pink hover:scale-105 hover:text-black">Problem 1</a>
        <a href="/problem-2" class="p-4 text-center transition duration-300 transform bg-white rounded-lg shadow-lg hover:bg-pastel-pink hover:scale-105 hover:text-black">Problem 2</a>
        <a href="/problem-3" class="p-4 text-center transition duration-300 transform bg-white rounded-lg shadow-lg hover:bg-pastel-pink hover:scale-105 hover:text-black">Problem 3</a>
        <a href="/problem-4" class="p-4 text-center transition duration-300 transform bg-white rounded-lg shadow-lg hover:bg-pastel-pink hover:scale-105 hover:text-black">Problem 4</a>
        <a href="/problem-5" class="p-4 text-center transition duration-300 transform bg-white rounded-lg shadow-lg hover:bg-pastel-pink hover:scale-105 hover:text-black">Problem 5</a>
    </div>
</body>

</html>