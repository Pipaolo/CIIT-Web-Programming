<?php
$fileName = $_GET['filename'] ?? 'home';
// Start routing the request to the different pages
switch ($fileName) {
    case '':
        include('features/home/index.php');
        break;
    case 'problem-1':
        include('features/problem-1/index.php');
        break;
    case 'problem-2':
        include('features/problem-2/index.php');
        break;
    case 'problem-3':
        include('features/problem-3/index.php');
        break;
    case 'problem-4':
        include('features/problem-4/index.php');
        break;
    case 'problem-5':
        include('features/problem-5/index.php');
        break;
    default:
        include('features/home/index.php');
        break;
}
