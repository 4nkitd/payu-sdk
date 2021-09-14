<?php

namespace PayU\Sdk;

class Payment extends Api
{

    private $endpoint = "_payment";
    
    private $type = "POST";

    private $headers = [
        "Content-Type"=> "application/x-www-form-urlencoded"
    ];

    /* 
    *   Key	Mandatory/Conditonal	Refer only for Conditional
    *   key                     	Mandatory	-
    *   txnid                       Mandatory	-
    *   amount                      Mandatory	-
    *   productinfo                 Mandatory	-
    *   hash                        Mandatory	-
    *   api_version                 Mandatory	-
    *   firstname                   Mandatory	-
    *   email                       Mandatory	-
    *   phone                       Mandatory	-
    *   surl                        Mandatory	-
    *   pg                          Mandatory	-
    *   bankcode                    Mandatory	-
    *   txn_s2s_flow                Mandatory	-
    *   s2s_client_ip               Mandatory	-
    *   s2s_device_info             Mandatory	-
    *   decoded_s2s_response        Mandatory	-
    *   ccnum                       Conditional	Mandatory for all types of card transactions
    *   ccname                      Conditional	Mandatory for all types of card transactions
    *   ccvv                        Conditional	Mandatory for all types of card transactions
    *   ccexpmon                    Conditional	Mandatory for all types of card transactions
    *   ccexpyr                     Conditional	Mandatory for all types of card transactions
    *   vpa                     	Conditional	Mandatory for UPI collect transactions
    *   si_details                  Conditional	Mandatory for SI transaction
    *   beneficiarydetail           Conditional	Mandatory for Recurring Netbanking Transactions
    *   auth_only                   Conditional	Mandatory for separating authentication and authorization
    *   termUrl                     Conditional	Mandatory for auth_only
    *   si                      	-	-
    *   lastname                    -	-
    *   address1                    -	-
    *   address2                    -	-
    *   city                        -
    *   state                       -
    *   country                     -
    *   zipcode                     -	-
    *   udf1                        -	-
    *   udf2                        -	-
    *   udf3                        -	-
    *   udf4                        -	-
    *   udf5                        -	-
    *   offer_key                   -	-
    *   additional_charges          -	-
    *   store_card                  -
    *   user_credentials            -	-
    *   furl                        -	-
    */
    public function create(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }


    /* 
    *   Key	    Mandatory/Conditonal	Refer only for Conditional
    *   key	        Mandatory	                    -
    *   command	    Mandatory	                    -
    *   hash	    Mandatory	                    -
    *   var1	    Mandatory	                    -
    *   var2	    Mandatory	                    -
    *   var3	       -	                        -
    */

    public function capturePayment(Array $body)
    {
        $this->request( $this->type, $this->apiUri.$this->endpoint, $body , $this->headers);
    }

}