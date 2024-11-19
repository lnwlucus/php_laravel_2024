<body style="background-color: #202020;color:yellow">
    <h3>Memory Usage</h3>


    <?php
    //สร้างคลาส
    //set php.ini memory unlimited
    ini_set('memory_limit', '3200M'); // 32BG

    class MemoryUsage
    {
        public function getMemoryUsage()
        {
            $current_memory = memory_get_usage();
            $peak_memory = memory_get_peak_usage();
            $memory_limit = ini_get('memory_limit');

            $current_mb = round($current_memory / 1024 / 1024, 2); // convert to MB
            $peak_mb = round($peak_memory / 1024 / 1024, 2); // convert to MB

            return [
                'current' => $current_mb . 'MB',
                'peak' => $peak_mb . 'MB',
                'limit' => $memory_limit,
            ];
        }
    }

    $memoryUsage = new MemoryUsage();
    $memory_info = $memoryUsage->getMemoryUsage();

    echo "Current Memory Usage : {$memory_info['current']} <br/>";
    echo "Peak Memory Usage : {$memory_info['peak']} <br/>";
    echo "Memory Limit : {$memory_info['limit']} <br/>";
    ?>
</body>