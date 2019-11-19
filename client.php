<html>
<head>
    <title>Minha primeira página scripts</title>
    <h1 id = "demo"> teste </h1>
</head>
<body>
<?php
    


      $fp = fopen("./BASEPROJETO.txt", "r");
      $contator = 0;
      $time_start = microtime(true);
      while(!feof($fp)){
      //      $char = fgets($fp);
       //     $link = "http://192.168.1.103:888/server.php?CPF=".$char;        
      //      $curl = curl_init();
        //    curl_setopt($curl, CURLOPT_URL,  $link);
            $result = curl_exec($curl);            
        //    curl_close($curl);    
            $contator++;            
           $time_end = microtime(true);
           $time = $time_end - $time_start;

            echo $contator;


            if ($time >= 60000){
                echo "PAROU" . $contator;
               break;
           }   
      }

    echo "FECHOU ARQUIVO";
     fclose($fp); 
?>



</body>
</html>


