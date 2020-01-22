<?php

 
 $cu_ya = NULL ;
 $cu_tidak = NULL ;
 $st = NULL ; 
if ($_POST["cuaca"]=="cerah"){
          $cu_ya = 0.16 ;
          $cu_tidak = 0.5;
    }
    elseif ($_POST["cuaca"]=="mendung"){
        $cu_ya = 0.5 ;
        $cu_tidak = 0;
    }
    elseif($_POST["cuaca"]=="hujan"){
        $cu_ya = 0.33 ;
        $cu_tidak = 0.5;
    }

$tmp_ya = NULL ;
 $tmp_tidak = NULL ;
if ($_POST["temperatur"]=="panas"){
          $tmp_ya = 0.16 ;
          $tmp_tidak = 0.25;   
    }
    elseif ($_POST["temperatur"]=="sedang"){
        $tmp_ya = 0.5 ;
        $tmp_tidak = 0.25;
    }
    elseif($_POST["temperatur"]=="dingin"){
        $tmp_ya = 0.33 ;
        $tmp_tidak = 0.25;
    }
    
    $klb_ya = NULL ;
    $klb_tidak = NULL ;
if ($_POST["kelembapan"]=="kelembapan_normal"){
          $klb_ya = 0.5 ;
          $klb_tidak = 0.25;   
    }
    elseif ($_POST["kelembapan"]=="kelembapan_tinggi"){
        $klb_ya = 0.5 ;
        $klb_tidak = 0.75;
    }
    // elseif($_POST["kelembapan"]=="tidak_ada"){
    //     $klb_ya = 0 ;
    //     $klb_tidak = 0.33;
    // }
    
    $angin_ya = NULL ;
    $angin_tidak = NULL ;
if ($_POST["angin"]=="angin_kecil"){
          $angin_ya = 0.5 ;
          $angin_tidak = 0.25;   
    }
    elseif ($_POST["angin"]=="angin_besar"){
        $angin_ya = 0.5 ;
        $angin_tidak = 0.75;
    }
    // elseif($_POST["angin"]=="tidak_ada"){
    //     $angin_ya = 0.75 ;
    //     $m_tidak = 0.16;
    // }



$cuaca_ya = $cu_ya;
$temperatur_ya = $tmp_ya;
$kelembapan_ya = $klb_ya;
$angi_ya = $angin_ya;
$total_ya = 0.6;

$cuaca_tidak = $cu_tidak;
$temperatur_tidak = $tmp_tidak;
$kelembapan_tidak = $klb_tidak;
$angi_tidak = $angin_tidak;
$total_tidak = 0.4;

$hitung_ya = $cuaca_ya * $temperatur_ya * $kelembapan_ya * $angi_ya * $total_ya ;
$hitung_tidak = $cuaca_tidak * $temperatur_tidak * $kelembapan_tidak * $angi_tidak * $total_tidak ;

if ($hitung_ya > $hitung_tidak){
    header('location:index.php?proses=1');
	// break;
}else{
    header('location:index.php?proses=2');
	// break;
}
// header('location:../index.php?proses=1');
?>