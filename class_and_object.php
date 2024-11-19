<body style="background-color: #202020;color:yellow">
    <h3>Classs and Object</h3>


    <?php
    //สร้างคลาส
    class Product3
    {
        public $name;
        public $price;
    }
    //สร้างวัสถุ
    $product = new Product3();
    $product->name = "product 1";
    $product->price = 100;

    echo $product->name;
    echo "<br>";
    echo $product->price;
    echo "<br>";

    $product1 = new Product3();
    $product1->name = "product2";
    $product1->price = 200;

    echo $product1->name;
    echo "<br>";
    echo $product1->price;
    ?>

</body>