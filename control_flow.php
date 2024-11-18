<body style="background-color: #202020;color:yellow">
<div> IF ELSE</div>
<?php
$x = 10;
if ($x > 0) {
    echo "Positive";
} else {
    echo "Negative";
}
?>
<div>Switch</div>
<?php
switch ($x) {
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "Unknown";
}
?>
</body>