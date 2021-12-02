<!DOCTYPE html>
<html lang="en">

<?php $title = "Problem 3";
include("templates/header.php") ?>

<body class="flex justify-center w-full h-screen p-4 ">
    <!-- Content -->
    <div class="flex flex-col space-y-4">
        <a href="/home" class="flex items-center space-x-4 hover:underline">
            <img src="assets/icons/chevron-left.svg" alt="Back Icon" class="w-5 h-5">
            Back to home</a>
        <h2 class="text-2xl font-bold">Problem 3</h2>
        <hr>
        <p>
            Write a program that mimics a calculator. The program should take as input two integers
            and the operation to be performed. It should then output the number, the operator and the
            result. (For division, if the denominator is zero, output an appropriate message).
        </p>
        <div class="flex flex-col items-center flex-1">
            <div class="flex flex-col p-4 space-y-4 bg-blue-500 rounded-lg shadow-md">
                <!-- Build the calculator  -->
                <form id="calculator-form" class="flex flex-col space-y-4">
                    <div id="result" class="flex flex-col items-center col-span-2 p-4 bg-white rounded-lg">
                        <span>Please enter 2 numbers and the desired operation</span>
                    </div>
                    <div class="flex justify-center w-full space-x-4">
                        <input required name='firstNumber' value="0" id="first-number-input" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 " placeholder="Enter first number">
                        <select name="operation" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 ">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                        <input required name="secondNumber" value="0" id="second-number-input" class="p-2 transition duration-300 rounded-lg focus:outline-none focus:ring-1 ring-blue-300 " placeholder="Enter second number">
                    </div>
                    <button class="w-full col-span-2 p-4 bg-blue-300 rounded-lg ">
                        <span class="font-bold">
                            Calculate
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php include("templates/footer.php") ?>
</body>

</html>