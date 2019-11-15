<?php
class DbConnection{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $host = 'minggu9';
	protected $connection;
	public function _construct(){
		if (!isset($this->connection)) {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->minggu9);
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}
		}
		return $this->connection;
	}
}
?>