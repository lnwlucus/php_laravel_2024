<body style="background-color: #202020;color:yellow">
    <h3>Try Catch</h3>


    <?php
    try {
        $x = 10 / 'hel';
    } catch (DivisionByZeroError $e) {
        echo "เกิดข้อผิดพลาด ไม่สามารถหารด้วย 0 ได้";
    } catch (TypeError $e) {
        echo "เกิดข้อผิดพลาด ไม่สามารถหารด้วยอักษรได้";
    } catch (Throwable $e) {
        echo "เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้";
    }

    ?>

</body>