
<?php

class ConfigDB
{
	public $m_dbServer;
	public $m_dbName;
	public $m_userName;
	public $m_password;

	public function __construct()
	{
		$this->m_dbServer= 'localhost';
		$this->m_dbName= 'social';
		$this->m_userName= 'root';
		$this->m_password= 'root';
	}


	
}


?>

