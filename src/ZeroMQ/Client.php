<?php

namespace ZeroMQ;

use ZMQ;
use ZMQContext;
use ZMQSocket;

class Client
{

	public function createClient()
	{
		$req = new ZMQSocket($this->createContext(), ZMQ::SOCKET_REQ);
		$req->connect('tcp://localhost:5454');
		return $req;
	}

	public function createContext()
	{
		return new ZMQContext();
	}

	public function send($what) 
	{
		$client = $this->createClient();
		$client->send($what);
		print($client->recv());
	}
	
}

if (isset($argv[1])) {
	$client = new Client;
	$client->send($argv[1]);
}
