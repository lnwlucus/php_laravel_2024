<body style="background-color: #202020;color:yellow">
    <h3>Classs and constructor</h3>


    <?php
    //สร้างคลาส
    class Product
    {
        public $name;
        public $price;

        function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }
    }


    //สร้างวัสถุ
    $product1 = new Product('Product 1', 100);

    echo $product1->name;
    echo "<br>";
    echo $product1->price;


    ?>
</body>