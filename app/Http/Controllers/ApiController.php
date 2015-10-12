<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
	/**
	 * Response array sent as a reply to a request.
	 * 
	 * @var array
	 */
	private $response = [];
	
	/**
	 * Sets the HTTP code for the current request.
	 * 
	 * @param int $code
	 * @throws \InvalidArgumentException
	 */
	public function setReponseCode($code)
	{
		if ( ! is_numeric($code))
		{
			throw new \InvalidArgumentException("Response code must be an integer, you have passed: $code");
		}
		
		$this->response['code'] = $code;
		
		return $this;
	}
	
	/**
	 * Sets the message that is returned with the HTTP response.
	 * 
	 * @param string $message
	 */
	public function setResponseMessage($message)
	{
		$this->response['message'] = $message;
		
		return $this;
	}
	
	/**
	 * Sets the data sent back with the HTTP reponse.
	 * 
	 * @param mixed $data
	 */
	public function setReponseData($data)
	{
		$this->response['data'] = $data;
		
		return $this;
	}
	
	/**
	 * Reponds with a generic HTTP 200.
	 * 
	 * @param mixed  $data
	 * @param string $message
	 */
	public function respondOk($data = null, $message = "")
	{
		$this->setReponseCode(200)
			 ->setReponseData($data)
			 ->setResponseMessage($message);
		
		return $this->getReponse();
	}
	
	/**
	 * Returns the reponse instance attribute.
	 * 
	 * @return array
	 */
	public function getReponse()
	{
		return $this->response;
	}
}