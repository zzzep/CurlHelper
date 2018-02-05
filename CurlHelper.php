<?php
/**
 * Description of CurlHelper
 *
 * Simple helper with Curl request
 *
 * @author Giuseppe Dezute Fechio <giuseppe.fechio@hotmail.com>
 *
 * Version: 1.0.1
 */
class CurlHelper {

    public $ch;

    public function response($url) {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        $resposta = curl_exec($this->ch);
        curl_close($this->ch);
        return $resposta;
    }

    public function init() {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_HEADER, 0);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
        return $this;
    }

    public function setPut($data) {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        return $this;
    }

    public function setPost($data) {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        return $this;
    }
	
	public function setHeader($headers){
		curl_setopt($this->ch, CURLOPT_HTTPHEADER , http_build_query($headers) );
		return $this;
	}

}
