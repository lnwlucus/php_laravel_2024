<body style="background-color: #202020;color:yellow">
    <h3>Operating System</h3>


    <?php
    class OperatingSystem
    {
        public function getDiskSpace()
        {
            $disk_path = PHP_OS_FAMILY === 'Windows' ? 'C:' : '/';
            $total_space = disk_total_space($disk_path);
            $free_space = disk_free_space($disk_path);
            $used_space = $total_space - $free_space;


            $total_gb = round($total_space / 1024 / 1024 / 1024, 2);
            $free_gb = round($free_space / 1024 / 1024 / 1024, 2);
            $used_gb = round($used_space / 1024 / 1024 / 1024, 2);

            return [
                'total' => $total_gb . 'GB',
                'free' => $free_gb . 'GB',
                'used' => $used_gb . 'GB',
            ];
        }
    }

    $os = new OperatingSystem();
    $disk_info = $os->getDiskSpace();

    echo "Total Space : {$disk_info['total']} <br/>";
    echo "Free Space : {$disk_info['free']} <br/>";
    echo "used Space : {$disk_info['used']} <br/>";
    ?>
</body>