<!DOCTYPE html>
<html lang="en">

<?php $title = "Problem 5";
include("templates/header.php") ?>

<body class="flex justify-center w-full h-screen p-4 ">
    <!-- Content -->
    <div class="flex flex-col space-y-4">
        <a href="/home" class="flex items-center space-x-4 hover:underline">
            <img src="assets/icons/chevron-left.svg" alt="Back Icon" class="w-5 h-5">
            Back to home</a>
        <h2 class="text-2xl font-bold">Problem 5</h2>
        <hr>
        <div class="">
            <p>
                Write a program that will input a single character and print out the corresponding digit on
                the telephone digits and letter on a telephone are associated as follows
            </p>
            <div class="flex flex-col ">
                <div class="flex items-center space-x-4">
                    <span>2 - ABC</span>
                    <span>6 - MN0</span>
                </div>
                <div class="flex space-x-4">
                    <span>3 - DEF</span>
                    <span>7 - PQRS</span>
                </div>
                <div class="flex space-x-4">
                    <span>4 - GHI</span>
                    <span>8 - TUV</span>
                </div>
                <div class="flex space-x-4">
                    <span>5 - JKL</span>
                    <span>9 - WXY</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center flex-1">
            <div class="flex flex-col p-4 space-y-4 bg-blue-500 rounded-lg shadow-md">

                <form id="telephone-form" class="flex flex-col space-y-4">
                    <div id="result" class="flex flex-col items-center col-span-2 p-4 bg-white rounded-lg">
                        <span>Please enter a character</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label class="font-bold text-white" for="character-input">Enter character:</label>
                        <input required name='characterInput' id="character-input" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 " placeholder="Enter character">
                    </div>

                    <button class="w-full col-span-2 p-4 bg-blue-300 rounded-lg ">
                        <span class="font-bold">
                            Check Telephone Number Equivalent
                        </span>
                    </button>
                </form>

            </div>
        </div>
    </div>
    <?php include("templates/footer.php") ?>
</body>

</html>