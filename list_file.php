<body style="background-color: #202020;color:yellow">
    <h3>Write File</h3>

    <?php
   $array = scandir('.');

    ?>
    <ul>
        <?php
        foreach($array as $item){
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</body>