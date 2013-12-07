<?php

/**
* 
*/
class DB 
{
	private $host='localhost';
	private $username='root';
	private $motDePass='';
	private $database='ecommerce';
	private $db;


	public function  __construct($host=null, $username=null, $motDePass=null, $database=null)
	{
		if($host !=null)
		{
			$this ->host = $host;
			$this ->username = $username;
			$this ->motDePass = $motDePass;
			$this ->database = $database;
		}
		try
		{
		$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->motDePass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8'));
			 
	    }
	    catch(PDOException $e)
	    {
	    	mysql_error();
	    

	    }
	}
	public function query($sql, $data = array())
	{
		$req =$this->db->prepare($sql);
		$req->execute($data);
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
}
?>