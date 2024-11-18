<body style="background-color: #202020;color:yellow">
    <h3>Query Params</h3>

    <?php
    if (isset($_GET['name'])) { // name = Mj
        echo $_GET['name'];
    }

    ?>
</body>