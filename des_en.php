
<?php
class des
{
	

	function des_key_generation() { 
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$randomString = ''; 
	  
		for ($i = 0; $i < 8; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 
	  
		return "6789abcd"; 
	} 
	function encrypt($key_value, $plain_text)
	{
		$encrypted_text  = mcrypt_ecb(MCRYPT_DES, $key_value, $plain_text, MCRYPT_ENCRYPT);
		return $encrypted_text;
	}
	function decrypt($key_value, $plain_text)
	{
		$decrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $plain_text, MCRYPT_DECRYPT);
		return $decrypted_text;
	}
	
}
?>