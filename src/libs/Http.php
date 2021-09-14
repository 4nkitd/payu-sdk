<?php

namespace PayU\Sdk;

class Http {


    public function request( $type = 'POST', $uri, $body, $headers) {

        $this->instance = curl_init();

        curl_setopt_array($this->instance, [
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $type,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $headers
        ]);

        $response = curl_exec($this->instance );

        curl_close($this->instance);

        return $response;

    }
    
}