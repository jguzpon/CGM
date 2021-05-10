<?php


class HttpRequest {
	/**
	 * @var string url
	 * URL
	 */
	public $url = "";

	/**
	 * @var string method
	 * HTTP method ( GET, POST, etc )
	 */
	public $method = "GET";

	/**
	 * @var Array headers
	 * Associative array of "http header name" => "value"
	 */
	public $headers = array();

	/**
	 * @var Array urlParams
	 * Associative array of parameters added to URL
	 * <url>?param1=value1&param2=value2
	 */
	public $urlParams = array();

	/**
	 * @var Array postPayload
	 * Associative array of parameters passed in the request body
	 */
	public $postPayload = array();

	/**
	 * @var string body
	 * 
	 */
	public $body = null;


	function __construct( $url, $method = "GET", $urlParams = array(), $postPayload = array(), $headers = array() ) {
		$this->url = $url;
		$this->urlParams = $urlParams;
		$this->postPayload = $postPayload;
		$this->method = $method;
		$this->headers = $headers;
		if( !is_array( $this->postPayload ) ) {
			$this->postPayload = array();
		}
		if( !is_array( $this->urlParams ) ) {
			$this->urlParams = array();
		}
		if( !is_array( $this->headers ) ) {
			$this->headers = array();
		}
	}

	function getUrl() {
		return prepareUrl( $this->url, $this->urlParams );
	}

	function addBasicAuthorization( $username, $password ) {
		$this->headers["Authorization"] = "Basic " . base64_encode( $username . ':' .$password );
	}

	/** 
	 * 	Return unique identifier of request for caching.
	 *  Null to prohibit caching
	 */ 
	function getRequestKey() {
		if( $this->postPayload ) {
			return null;
		}
		return $this->getUrl();
	}

}

?>