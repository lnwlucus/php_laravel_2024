<body style="background-color: #202020;color:yellow">
    <h3>Extends and implements</h3>


    <?php
    //สร้างคลาส

    interface ProductInterface
    {
        public function getInfo();
    }

    class ParentClass
    {
        public function getInfo()
        {
            return "Parent Class";
        }
    }

    class Product66 extends ParentClass implements ProductInterface
    {
        public function getInfo()
        {
            return "Product";
        }
    }


    $product = new Product66();
    echo $product->getInfo();

    ?>
</body>