<?php

namespace ZeroMQ;

class Server
{

    public function createContext()
    {
		return new \ZMQContext;

    }

    public function createServer()
    {
		$server = new \ZMQSocket(
			$this->createContext(), 
			\ZMQ::SOCKET_REP
		);
		$server->bind('tcp://*:5454');
		return $server;
    }
}
