<?php
    // $data = [10, 50, 30, 70, 80, 60, 20, 90, 40];

    $data = [10, 20, 30, 40, 50, 60, 70, 80, 90];
    $find = 80;

    //menghitung jumlah keseluruhan nilai
    $high = count($data);

    //nilai dasar yang di tetapkan pada isi data
    $low = 0;

    //ketika nilai data terkecil lebih kecil dari data keseluruhan nilai
    while ($low <= $high) {

        //menghitung nilai tengah dari keselurhan data
        $med = round($low + $high) / 2;
        
        //kondisi untuk membandingkan data yang di cari dengan nilai yang di tengah
        if ($find == $data[$med]) {
            echo $find ." ditemukan pada indeks ". floor($med);
            // $status = TRUE;
            break;
        } else {

            //kondisi yang di jalankan ketika data yang dicari lebih besar dari nilai tengah
            if ($find > $data[$med]) {
                
                //kondisi untuk memasukan nilai tengah + 1 ke dalam  $low
                $low = $med + 1;
            } else {
                //kondisi untuk memasukan nilai tengah + 1 ke dalam  $high
                $high = $med - 1;
            }
        }
    }


?>