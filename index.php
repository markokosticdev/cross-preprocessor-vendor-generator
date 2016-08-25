<?php
require "function.php";

//settings
$preprocessor = "stylus"; //sass, less, stylus
$syntax = "minimal"; //minimal(without {,}),normalcss(with {,} or sass,scss(only for sass preprocessor))
$vendor = "add"; //add,apply
if ($preprocessor == "less" && $syntax == "minimal") exit("LESS doesn't have minimal syntax!");
else if (($preprocessor == "less" || $preprocessor == "stylus") && ($syntax == "sass" || $syntax == "scss")) exit(strtoupper($preprocessor) . " doesn't have " . $syntax . " syntax!");

$inFile = (empty($_GET["in"]) ? "listOfProperties.txt" : $_GET["in"]);
$outFile = (empty($_GET["out"]) ? "listOfMixins.txt" : $_GET["out"]);

$conInFile = fopen($inFile, "r") or exit("Unable to open IN file!");
$conOutFile = fopen($outFile, "w") or exit("Unable to open OUT file!");
if ($conInFile && $conOutFile) {

    echo "<h2>" . heading($preprocessor) . " <small>(" . $syntax . " syntax)</small></h2>";
    $br = 0;
    while (($property = fgets($conInFile)) !== false) {
        $property = trim($property);
        $mixin = array();
        $mixin = generate($preprocessor, $syntax, $vendor, $property);
        if ($br == 0 && $vendor == "add") {
            echo "<strong>vendor:</strong><br/>" . nl2br($mixin['vendor']);
            file_put_contents($outFile, $mixin['vendor'], FILE_APPEND);
        }
        echo "<strong>" . $property . ":</strong><br/>" . nl2br($mixin['mixin']);
        file_put_contents($outFile, $mixin['mixin'], FILE_APPEND);
        $br++;

    }
    echo "<br/><strong>Mixins created:</strong>" . $br;
    fclose($conInFile);
    fclose($conOutFile);
}
?>









