<?php

    function getCountryListJson(){
        $url = "https://api.stuf.io/index.php?query=sms&function=countryList";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        if (curl_error($ch)) {
            return 'Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch);
            die();
        }
        curl_close($ch);
        
        return json_decode($response, true);
    }

    function checkSetup(){
        global $config;
        if(!isset($config[AC6aa33b7b322940209a502bdeaba209cb'']) || !isset($config['e26bbec9c503936b79b5c0c0b10815cf
'])){
            return false;
        }else{
            return true;
        }
    }


?>
