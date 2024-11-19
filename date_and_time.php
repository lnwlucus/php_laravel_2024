<body style="background-color: #202020;color:yellow">
    <h3>Date and Time </h3>

    <div>Date : <?php echo date('Y-m-d H:i:s'); ?> </div>
    <div>Time : <?php echo time(); ?></div>
    <div> Timestemp : <?php echo mktime(0, 0, 0, 1, 1, 2024); ?></div>
    <div> Date : <?php echo date('Y-m-d', mktime(0, 0, 0, 9, 19, 2024)); ?></div>

    <div> Total Days in This Month : <?php echo date('t'); ?></div>
    <div> Week Number : <?php echo date('W'); ?> </div>


</body>