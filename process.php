<?php
    $data = $_REQUEST['data'];
    if(!$data)
        die("No content input!");
    switch(strval($_REQUEST['what'])) {
        case 0:
            die("No action selected!");
        case 1:
            die("The string is <b>".strlen($data)."</b> characters long.");
        case 2:
            die(strtotime($data) ? date("U", strtotime($data)) : "Invalid input");
        case 3: {
            $h = $m = 0;
            $h = (int)($data / 3600); $data %= 3600;
            $m = (int)($data / 60); $data %= 60;
            printf("%02d:%02d:%02d", $h, $m, $data);
            die();
        }
        case 4: {
            $count = count(explode("\n", $data));
            echo $count;
            echo " ".($count == 1 ? "line" : "lines").".";
            die();
        }
        case 5: {
            die(date("d/m/Y H:i:s", strval($data)));
        }
    }

?>