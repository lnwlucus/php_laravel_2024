<body style="background-color: #202020;color:yellow">
    <h3>Upload File</h3>


    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    </form>
    <?php
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_destination = 'uploads/' . $file_name;

        move_uploaded_file($file_tmp, $file_destination);
        echo "File uploads successfully!";
    }

    ?>
</body>