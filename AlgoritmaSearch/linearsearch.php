<?php
    $data = [10, 50, 30, 70, 80, 60, 20, 90, 40];
    $find = 20;

    //penggunaan linear search dengan build in function php array_filter
    /*
        print_r(array_filter($input,function($v) use ($find)
            {
                //penentuan menggunakan operator ternary
                // return $v == $find ? $v:0;

                //penentuan kondisi menggunakan if
                if($v == $find){
                    return $v;
                }
        }));
    */


    //penggunaan linear search menggunakan for
    /*
        for ($i = 0; $i < count($data); $i++) { 
            if ($data[$i] == $find) {
                echo $i;
                break;
            }
        }
    */

    //penggunaan linear search dengan do while
    /*
        $i = 0;
        do {
            if ($data[$i] == $find) {
                echo 'lokasi data berada pada indeks '. $i;
                break;
            }
            $i++;
        } while ( $i <= $find);
    */

    // penggunaan linear search dengan while
    /*
        $i = 0;
        while ($i <= $find) {
            if ($data[$i] == $find) {
                echo 'lokasi data berada pada indeks '. $i;
                break;
            }
            $i++;
        }
    */

    // penggunaan linear search dengan foreach   
    /*
        foreach ($data as $key => $value) {
            if($value == $find) {
                echo 'lokasi data berada pada indeks '. $key;
            }
        }
    */
    
?>