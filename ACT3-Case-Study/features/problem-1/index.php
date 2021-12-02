<!DOCTYPE html>
<html lang="en">

<?php $title = "Problem 1";
include("templates/header.php") ?>

<body class="flex justify-center w-full h-screen p-4 ">
    <!-- Content -->
    <div class="flex flex-col space-y-4">
        <a href="/home" class="flex items-center space-x-4 hover:underline">
            <img src="assets/icons/chevron-left.svg" alt="Back Icon" class="w-5 h-5">
            Back to home</a>
        <h2 class="text-2xl font-bold">Problem 1</h2>

        <hr>
        <p>
            There are some techniques that Mathematician use to know if a number is divisible by
            another number. Some rules are stated below.
            2 The last digit of the number must be divisible by 2.
            3 The sum of the digits when added must be divisible by 3 (works for at least 2 digit
            numbers).
            5 The last digit must end with 0 or 5.
            With the rules above, write a program that allow a user to enter a numeric value higher than 9 and less
            than 10,000 (maximum of 4 digits only) and will identify if that number is divisible by 2, 3 and/or
        </p>
        <div class="flex flex-col items-center flex-1">
            <div class="flex flex-col p-4 space-y-4 bg-blue-500 rounded-lg shadow-md">
                <div class="flex flex-col space-y-2">
                    <label for="number-input" class="font-bold text-white">Enter a number: </label>
                    <input id="number-input" type="text" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 " placeholder="Enter a number">
                </div>
                <!-- Results -->
                <div id="results-content" class="flex flex-col space-y-4 text-white">
                </div>
            </div>
        </div>
    </div>
    <?php include("templates/footer.php") ?>
</body>

</html>