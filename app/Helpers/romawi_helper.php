<?php 
function romawi($bulan){
    if($bulan == '01'){
        $bulan = 'I';
    }elseif($bulan == '02'){
        $bulan = 'II';
    }elseif($bulan == '03'){
        $bulan = 'III';
    }elseif($bulan == '04'){
        $bulan = 'IV';
    }elseif($bulan == '05'){
        $bulan = 'V';
    }elseif($bulan == '06'){
        $bulan = 'VI';
    }elseif($bulan == '07'){
        $bulan = 'VII';
    }elseif($bulan == '08'){
        $bulan = 'VIII';
    }elseif($bulan == '09'){
        $bulan = 'IX';
    }elseif($bulan == '10'){
        $bulan = 'X';
    }elseif($bulan == '11'){
        $bulan = 'XI';
    }elseif($bulan == '12'){
        $bulan = 'XII';
    }
    return $bulan;
}
?>