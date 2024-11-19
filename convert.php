<body style="background-color: #202020;color:yellow">
    <h3>convert String To number</h3>

    <?php
    $string = '12345';
    $number = (int)$string;

    echo $number;

    ?>

    <h3>convert number To String</h3>
    <?php
    $number = '12345';
    $string = (string)$number;

    echo $string;

    ?>
</body>