<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class URL {

	var $skey 	= "evoframework@123"; // you can change it
	
  public  function safe_b64encode($string) {
    $data = base64_encode($string);
    $data = str_replace(array('+','/','='),array('-','_',''),$data);
    return $data;
  }

	public function safe_b64decode($string) {
    $data = str_replace(array('-','_'),array('+','/'),$string);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    return base64_decode($data);
  }
	
  public  function encode($value){ 
    if(!$value){return false;}
      $text = $value;
      $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
      $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
      $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->skey, $text, MCRYPT_MODE_ECB, $iv);
      return trim($this->safe_b64encode($crypttext)); 
  }
  
  public function decode($value){
      if(!$value){return false;}
      $crypttext = $this->safe_b64decode($value); 
      $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
      $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
      $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->skey, $crypttext, MCRYPT_MODE_ECB, $iv);
      return trim($decrypttext);
  }

  public function shortURL($nom_tag,$slug="-") {
    $string = strtolower($nom_tag);
    // Código ASCII das vogais
    $ascii['a'] = range(224, 230);
    $ascii['e'] = range(232, 235);
    $ascii['i'] = range(236, 239);
    $ascii['o'] = array_merge(range(242, 246), array(240, 248));
    $ascii['u'] = range(249, 252);
 
    // Código ASCII dos outros caracteres
    $ascii['b'] = array(223);
    $ascii['c'] = array(231);
    $ascii['d'] = array(208);
    $ascii['n'] = array(241);
    $ascii['y'] = array(253, 255);
 
    foreach ($ascii as $key=>$item) {
        $acentos = '';
        foreach ($item AS $codigo) $acentos .= chr($codigo);
        $troca[$key] = '/['.$acentos.']/i';
    }
 
    $string = preg_replace(array_values($troca), array_keys($troca), $string);
 
    // Slug?
    if ($slug) {
        // Troca tudo que não for letra ou número por um caractere ($slug)
        $string = preg_replace('/[^a-z0-9]/i', $slug, $string);
        // Tira os caracteres ($slug) repetidos
        $string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);
        $string = trim($string, $slug);
    }
    return $string;
  }
}