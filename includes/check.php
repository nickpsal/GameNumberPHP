<?php
    function check_number($number) {
        $result = -1;
        $computer_num = $_SESSION['computer_num'];
        if (isset($computer_num)) {
            if ($number > $computer_num) {
                $result = 0;
                return $result;
            }else if ($number < $computer_num) {
                $result = 1;
                return $result;
            }else if ($number == $computer_num) {
                $result = 2;
                return $result;
            }
        }
    }
?>