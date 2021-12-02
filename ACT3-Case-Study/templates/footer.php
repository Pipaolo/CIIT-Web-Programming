
<?php


function consoleLog($output, $withScripTags = true)
{
    $jsCode = 'console.log(' . json_encode($output) . ')';
    if ($withScripTags) {
        $jsCode = '<script>' . $jsCode . '</script>';
    }
    echo $jsCode;
}
// Start injecting the javascript
// Get the scripts directory
$pathname = "features/$fileName/js";
$files = scandir($pathname);

for ($x = 0; $x < count($files); $x++) {
    $file = $files[$x];
    if (str_ends_with($file, ".js") && !str_contains($file, "index")) {
        echo "<script src=\"$pathname/$file\"></script>";
    }
}
// Add the index.js last
echo "<script src=\"$pathname/index.js\"></script>";

?>