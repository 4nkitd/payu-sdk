<?php

namespace PayU\Sdk;

class Refund extends Api
{

    private $endpoint = "_payment";
    
    private $type = "POST";

    private $headers = [
        "Content-Type"=> "application/x-www-form-urlencoded"
    ];

    /* 
    * Key	Mandatory/Conditonal	Refer only for Conditional
    * key	Mandatory	-
    * command	Mandatory	-
    * hash	Mandatory	-
    * var1	Mandatory	-
    * var2	Mandatory	-
    * var3	Mandatory	-
    * */
    public function create(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }

    /* 
    * Key	Mandatory/Conditonal	Refer only for Conditional
    * key	Mandatory	-
    * command	Mandatory	-
    * hash	Mandatory	-
    * var1	Mandatory	-
    */
    public function fetch(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }

}