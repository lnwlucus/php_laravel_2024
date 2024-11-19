<body style="background-color: #202020;color:yellow">
    <h3>Casting Object</h3>


    <?php
    //สร้างคลาส
    class Product77
    {
        public $name;
        public $price;

        public function __toString()
        {
            return "Name : {$this->name} Price:{$this->price}";
        }
    }

    class Product2
    {
        public $name;
        public $price;
    }

    //สร้างวัสถุ
    $product = new Product77();
    $product->name = 'iphone';
    $product->price = 1000;

    $array = (array) $product;
    print_r($array);

    echo "<br>";

    echo (string)$product;
    echo "<br>";

    $product2 = new Product2();
    $product2 = (object) $array; //casting array to object

    print_r($product2);
    ?>
</body>