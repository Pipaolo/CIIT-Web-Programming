<!DOCTYPE html>
<html lang="en">

<?php $title = "Problem 4";
include("templates/header.php") ?>

<body class="flex justify-center w-full h-screen p-4 ">
    <!-- Content -->
    <div class="flex flex-col space-y-4">
        <a href="/home" class="flex items-center space-x-4 hover:underline">
            <img src="assets/icons/chevron-left.svg" alt="Back Icon" class="w-5 h-5">
            Back to home</a>
        <h2 class="text-2xl font-bold">Problem 4</h2>
        <hr>
        <p>
            Write a program that prompts the user to input the x-y coordinate of a point in a Cartesian
            plane. The program should then output a message indicating whether the point is the origin point,
            is located on the x (or y) axis, or appears in a particular quadrant.
        </p>
        <div class="flex flex-col items-center flex-1">
            <div class="flex flex-col p-4 space-y-4 bg-blue-500 rounded-lg shadow-md">

                <form id="cartesian-form" class="grid grid-cols-2 gap-4">
                    <div id="result" class="flex flex-col items-center col-span-2 p-4 bg-white rounded-lg">
                        <span>Please enter a x and y coordinate</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label class="font-bold text-white" for="x-input">Enter X:</label>
                        <input name='x' value="0" type="number" id="x-input" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 " placeholder="Enter X">
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label class="font-bold text-white" for="y-input">Enter Y:</label>
                        <input name="y" value="0" type="number" id="y-input" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 " placeholder="Enter Y">
                    </div>
                    <button class="w-full col-span-2 p-4 bg-blue-300 rounded-lg ">
                        <span class="font-bold">
                            Check Coordinate
                        </span>
                    </button>
                </form>

            </div>
        </div>
    </div>
    <?php include("templates/footer.php") ?>
</body>

</html>