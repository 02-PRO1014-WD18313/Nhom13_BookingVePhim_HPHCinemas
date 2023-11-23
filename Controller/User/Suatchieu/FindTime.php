<?php
$times = [];
if(empty($_GET['time'])){
    $findTime = FindTime($_GET['id_phim']);

    if(!empty($findTime)){
        $changeTime = date('Y-m-d', strtotime( $findTime[0]['thoigianchieu']));
        $times = FindTimes($_GET['id_phim'], $changeTime);
        
    }




}else{

    $times = FindTimes($_GET['id_phim'], $_GET['time']);
}
?>