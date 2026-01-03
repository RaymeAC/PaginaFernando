<?php
try{
    //$mysqli =  mysqli_connect("localhost","root","123456","corpmarkos");
    //$mysqli=  mysqli_connect("161.132.46.35","z0l5p7a9_corpmarkos","corpmarkos2023","z0l5p7a9_corpmarkos");
    $mysqliprueba =  mysqli_connect("161.132.57.249","ycxbvmqe_admin","xn51loki-","ycxbvmqe_corpmarkos");
    /*
    if(!$mysqliprueba){
        echo "Error";
        die();     
    }else{
    echo "Success";
    }*/
} catch (Exception $e) {
    print "Error: " . $e->getMessage();
}
?>