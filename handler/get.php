<?php
    include '../databasebroker.php';
    include '../model/komadodece.php';


    if(isset($_POST['prikazid']) ){
        $rez = KomadOdece::vratiKomadOdecePoID($_POST['prikazid'],$conn);

        $response = array();
        while($red=mysqli_fetch_assoc($rez)){
            $response = $red;
        }
   
        echo json_encode($response);

    }else{
        $response['status']=200; //status OK
        $response['message']="Data not found";
    }

 








?>