# CurlHelper
PHP Curl Helper

Usage:

	GET:
		
		$curl = new CurlHelper();

		$response = $curl->init()->response("http://example.com");


	POST:
		
		$curl = new CurlHelper();
		
		$arrayOfParams = array(
			'param1' => 'value1',
			'param2' => 'value2',
		);

		$response = $curl->init()->setPost($arrayOfParams)->response("http://example.com");
		
	PUT:
		
		$curl = new CurlHelper();
		
		$arrayOfParams = array(
			'param1' => 'value1',
			'param2' => 'value2',
		);

		$response = $curl->init()->setPost($arrayOfParams)->response("http://example.com");		
		

	How to set Header (optional):
	
		$curl = new CurlHelper();
		
		$headers = array(
			'Content-type: application/json',
			'Authorization: Auth123',
		);
		
		$response = $curl->setHeader($headers)->response("http://example.com");