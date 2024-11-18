<?php
$name = "John";
?>

<h3>String Functions </h3>
<div>Count : <?php echo strlen($name); ?></div>
<div>Index Of: <?php echo strpos($name, "o"); ?></div>
<div>Upper Case : <?php echo strtoupper($name); ?></div>
<div>Lower Case : <?php echo strtolower($name); ?></div>
<div> Replace : <?php echo str_replace("John", "jane", $name); ?></div>
<div>Substring : <?php echo substr($name, 0, 3); ?></div>