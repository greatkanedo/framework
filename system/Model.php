<?php
namespace system;

class Model extends \Illuminate\Database\Eloquent\Model {

	public $db = null;

	static private $instance;

	public function __construct() {
		$this->db = $this->getConfig()->getConnect();
		$this->db->setAsGlobal();
		$this->db->bootEloquent();
	}

	public function getConnect() {
		$db = new \Illuminate\Database\Capsule\Manager;
		$db->addConnection($this->config);
		return $db;
	}

	public function getConfig() {
		$this->config = [
		    'driver'    => 'mysql',
		    'host'      => 'localhost',
		    'database'  => 'test',
		    'username'  => 'root',
		    'password'  => 'root',
		    'charset'   => 'utf8',
		    'collation' => 'utf8_unicode_ci',
		    'prefix'    => 'ez_'
		];
		return $this;
	}

}