<?php

namespace ZeroMQ;

use ZMQContext;

class Server
{

	public function run()
	{
		$server = $this->createServer();
		while (true) {
			$message = $this->receive($server);
			$this->reply($server, $message);
		}
	}

    public function createContext()
    {
		return new ZMQContext;

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

    public function receive($server)
    {
        return $server->recv();
    }

	public function reply($server, $message)
	{
		return $server->send($message . ' World' . "\n");
	}
}

if (isset($argv[1])) {
	$server = new Server();
	$server->run();
}
