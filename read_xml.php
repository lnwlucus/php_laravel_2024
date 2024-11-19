<body style="background-color: #202020;color:yellow">
    <h3>Read XML </h3>


    <?php
    $xml = simplexml_load_file('product.xml');

    ?>

    <h3>Product List</h3>
    <table border="1">
        <tr>
            <th>name</th>
            <th>price</th>
        </tr>
        <?php foreach($xml->products->product  as $product) { ?> 
        <tr>
            <td><?php echo $product->name;?></td>
            <td><?php echo $product->price;?></td>
        </tr>

        <?php } ?>
    </table>

</body>