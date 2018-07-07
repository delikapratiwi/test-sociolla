<?php    

        function fnEncrypt($sValue, $sSecretKey)
        {
            $t = rtrim(
                base64_encode(
                    mcrypt_encrypt(
                        MCRYPT_RIJNDAEL_256,
                        $sSecretKey, $sValue, 
                        MCRYPT_MODE_ECB, 
                        mcrypt_create_iv(
                            mcrypt_get_iv_size(
                                MCRYPT_RIJNDAEL_256, 
                                MCRYPT_MODE_ECB
                            ), 
                            MCRYPT_RAND)
                        )
                    ), "\0"
                );
            var_dump($t);exit();
        }

        function fnDecrypt($Value, $secretKey)
        {

           				$data 	   = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,$secretKey,base64_decode($Value),MCRYPT_MODE_ECB,mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256,MCRYPT_MODE_ECB),MCRYPT_RAND)), "\0");

           				return $data;
        }


        /**
        * aes_decrypt()
        *
        * Decrypt the string into AES decrypted (plain) form
        * Returning the decrypted value, so can be parsed securely in the front side
        *
        * @param   string $string
        *
        * @return    string $dec_pin
        */
        if(! function_exists('aes_encrypt'))
        {

        function aes_encrypt($string = '')
        {

          $CI         = & get_instance();

          $CI->encryption->initialize(
              array(
                    'cipher' => 'aes-256',
                    'mode'   => 'ecb',
                    )
              );
          $ciphertext = $CI->encryption->encrypt($string);
          //$ciphertext = $CI->encryption->decrypt($string);

          return $ciphertext;
        }

  }

?>
