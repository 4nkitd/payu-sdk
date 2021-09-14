<?php

namespace PayU\Sdk;

class Card extends Api
{

    private $endpoint = "_payment";
    
    private $type = "POST";

    private $headers = [
        "Content-Type"=> "application/x-www-form-urlencoded"
    ];

    /* 
    *   Key	        Mandatory/Conditonal	Refer only for Conditional
    *   key	        Mandatory	-
    *   command	    Mandatory	-
    *   hash	    Mandatory	-
    *   var1	    Mandatory	-
    *   var2	    Mandatory	-
    *   var3	    Mandatory	-
    *   var4	    Mandatory	-
    *   var5	    Mandatory	-
    *   var6	    Mandatory	-
    *   var7	    Mandatory	-
    *   var8	    Mandatory	-
     */
    public function create(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }

    /* 
    
    Key	Mandatory/Conditonal	Refer only for Conditional
    key	Mandatory	-
    command	Mandatory	-
    hash	Mandatory	-
    var1	Mandatory	-

    */
    public function fetch(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }


        /* 
     * Key	Mandatory/Conditonal	Refer only for Conditional
     * key	Mandatory	-
     * command	Mandatory	-
     * hash	Mandatory	-
     * var1	Mandatory	-
    * */
    public function cardBankStatus(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }

    public function icCardDomestic(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }


}