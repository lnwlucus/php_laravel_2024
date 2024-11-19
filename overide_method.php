<body style="background-color: #202020;color:yellow">
    <h3>Overide Method</h3>


    <?php
    //สร้างคลาส
    class ParentClass
    {
        public function getInfo()
        {
            return "Parent Class";
        }
    }

    class Product555 extends ParentClass
    {
        public function getInfo()
        {
            return "Product Class";
        }
    }

    $product = new Product555();
    echo $product->getInfo();
    ?>
</body>