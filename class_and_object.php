<body style="background-color: #202020;color:yellow">
    <h3>Classs and Object</h3>


    <?php
    //สร้างคลาส
    class Product
    {
        public $name;
        public $price;
    }
    //สร้างวัสถุ
    $product = new Product();
    $product->name = "product 1";
    $product->price = 100;

    echo $product->name;
    echo "<br>";
    echo $product->price;
    ?>

</body>