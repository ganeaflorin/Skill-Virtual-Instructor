<?php
namespace app\core;
class Curl {
    public array $HOST_ADDRESSES= [
        "origami" => "localhost:8999/api.php",
        "tie" => "localhost:8998/api.php",
        "meals" => "localhost:8997/api.php"
    ];

    public function getResponse($path) {
        $HOST_ADDRESS = $this->HOST_ADDRESSES[$path];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $HOST_ADDRESS);
        $result=curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function getPostResponse($path, $postBody) {
        if($path) {
        $HOST_ADDRESS = $this->HOST_ADDRESSES[$path];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $HOST_ADDRESS);
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postBody);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    }

}
?>