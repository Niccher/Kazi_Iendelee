<?php
	class Mod_crypt extends CI_Model{

        public function Enc_String( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            $enc_val = openssl_encrypt($value, $cipher_algo, $crypt_key, $options, $crypt_iv); 

            //return( $this->encryption->encrypt(base64_encode($enc_val)));
            return( (base64_encode($enc_val)));
        }

        public function Dec_String( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            //$value_clean = base64_decode($this->encryption->decrypt($value));
            $value_clean = base64_decode($value);

            $dec_val=openssl_decrypt ($value_clean,  $cipher_algo, $crypt_key, $options, $crypt_iv); 

            return( $dec_val);
        }

	}
?>