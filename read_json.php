<body style="background-color: #202020;color:yellow">
    <h3>Read JSON </h3>


    <?php
    $json = file_get_contents('product.json');
    $data = json_decode($json, true);

    ?>


    <h3>Product List</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>price</th>

        </tr>
        <?php foreach ($data as $item) { ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price']; ?></td>
            </tr>

        <?php } ?>
    </table>

    <h3>Product Type</h3>
    <?php
    $json = file_get_contents('productType.json');
    $data = json_decode($json, true);
    ?>
    <table border="1">
        <?php foreach ($data['productType'] as $type) { ?>
            <tr>
                <td><?php echo $type['name']; ?></td>
                <td>
                    <table border="1">
                        <?php foreach ($type['products'] as $product) { ?>
                            <tr>
                                <td>
                                    <div> <?php echo $product['id']; ?></div>
                                    <div> <?php echo $product['name']; ?></div>
                                    <div> <?php echo $product['price']; ?></div>

                                </td>
                            </tr>

                        <?php } ?>
                    </table>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>