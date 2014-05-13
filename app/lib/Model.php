<?php
/**
 * Model class. All models will extend this class
 *
 * @package    phpMVC_Scaffold
 * @author     Raphael Santos <raph.snts@gmail.com>
 * @copyright  2014 Raphael Santos
 * @license    http://opensource.org/licenses/MIT 	The MIT License (MIT)
 * @link       http://github.com/raphsnts/phpMVC_Scaffold
 */
class Model
{
	private $_connection;
	private $_result;
	private $_classRef;


	/**
	 * Constructor
	 * @param string $classRef
	 */
	function __construct($classRef) {
		$this->_classRef = $classRef;
		$this->connect();
	}


	/**
	 * Connects to the database
	 */
	private function connect()
	{
		try {
			$dsn = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
			$this->_connection = new PDO($dsn, DB_USER, DB_PASS,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
			$this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die('Cannot connect to database: ' . $e->getMessage());
		}
	}


	/**
	 * Returns all the elements from the table associated to the model
	 * @return Item
	 */
	function getAll()
	{
		$this->_result = $this->_connection->query('SELECT * FROM ' . get_called_class());
		return $this->_result->fetchAll(PDO::FETCH_OBJ);
	}


	/**
	 * Returns the element "id" from the table associated to the model
	 * @param int $id 
	 * @return array
	 */
	function getById($id)
	{
		$sql = 'SELECT * FROM ' . get_called_class() . ' WHERE id = ?';
		$query = $this->_connection->prepare($sql);
		$query->execute(array($id));
		$this->_result = $query->fetch(PDO::FETCH_OBJ);
		return $this->_result;
	}
}
