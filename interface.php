<body style="background-color: #202020;color:yellow">
    <h3>Interface</h3>


    <?php
    interface ProductInterface
    {
        public function getInfo();
    }

    class Product44 implements ProductInterface
    {
        public function getInfo()
        {
            return "Product";
        }
    }

    $product = new Product44();
    echo $product->getInfo();
    ?>
</body>