<body style="background-color: #202020;color:yellow">
    <h3>Classs and Object</h3>


    <?php
    //สร้างคลาส
    class Product4
    {
        public $name;
        public $price;
    }
    //สร้างวัสถุ
    $p1 = new Product4();
    $p1->name = "product 1";
    $p1->price = 100;

    $p2 = new Product4();
    $p2->name = "product 2";
    $p2->price = 200;

    $p3 = new Product4();
    $p3->name = "product 3";
    $p3->price = 300;

    $products = [$p1, $p2, $p3];


    ?>
    <table border="1">
        <tr>
            <th>name</th>
            <th>price</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product->name; ?></td>
                <td><?php echo $product->price; ?></td>
            </tr>
        <?php } ?>

    </table>



</body>