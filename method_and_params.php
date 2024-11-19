<body style="background-color: #202020;color:yellow">
    <h3>method and Params</h3>


    <?php
    //สร้างคลาส
    class Product3
    {
        function getInfo($name, $price)
        {
            return "Name :" . $name . '-' . "Price :" . $price;
        }
    }


    //สร้างวัสถุ
    $product1 = new Product3();
    echo $product1->getInfo('Product1', 200);
    echo "<br>";



    ?>
</body>