<?php



class Model {

    function insertion_sort(&$a) {


        for ($i = 1; $i < count($a); $i++) {
            $x = $a[$i];
            for ($j = $i - 1; $j >= 0 && $a[$j] > $x; $j--) {
                /* сдвигаем элементы вправо, пока выполняется условие
                $a[$j] > $a[$i] */
                $a[$j + 1] = $a[$j];
            }
// на оставшееся после сдвига место, ставим $a[$i]
            $a[$j + 1] = $x;
        }


    }


    function bubble_sort(&$arr) {

        $t = true;
        while ($t) {
            $t = false;
            for ($i = 0; $i < count($arr) - 1; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $temp = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $temp;
                    $t = true;
                }
            }
        }

}

    function ShellSort($elements,$length) {


        $k=0;
        $gap[0] = (int) ($length / 2);

        while($gap[$k] > 1) {
            $k++;
            $gap[$k]= (int)($gap[$k-1] / 2);
        }//end while

        for($i = 0; $i <= $k; $i++){
            $step=$gap[$i];

            for($j = $step; $j < $length; $j++) {
                $temp = $elements[$j];
                $p = $j - $step;
                while($p >= 0 && $temp < $elements[$p]) {
                    $elements[$p + $step] = $elements[$p];
                    $p= $p - $step;
                }//end while
                $elements[$p + $step] = $temp;
            }
        }



    }
    function quicksort(&$array, $l=0, $r=0) {


        if($r === 0) $r = count($array)-1;
        $i = $l;
        $j = $r;
        $x = $array[($l + $r) / 2];
        do {
            while ($array[$i] < $x) $i++;
            while ($array[$j] > $x) $j--;
            if ($i <= $j) {
                if ($array[$i] > $array[$j])
                    list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
                $i++;
                $j--;
            }
        } while ($i <= $j);
        if ($i < $r) $this->quicksort ($array, $i, $r);
        if ($j > $l) $this->quicksort ($array, $l, $j);


    }
}
?>