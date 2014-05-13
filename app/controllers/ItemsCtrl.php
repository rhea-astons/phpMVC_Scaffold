<?php
/**
 * Items Controller
 *
 * @package    phpMVC_Scaffold
 * @author     Raphael Santos <raph.snts@gmail.com>
 * @copyright  2014 Raphael Santos
 * @license    http://opensource.org/licenses/MIT 	The MIT License (MIT)
 * @link       http://github.com/raphsnts/phpMVC_Scaffold
 */
class ItemsCtrl extends Controller
{
	/**
	 * Index
	 */
	public function index()
	{
		$this->set('title', 'All items');
		$items = $this->_model->getAll();
		$this->set('items', $items);
	}


	/**
	 * View item by id
	 */
	public function view($id)
	{
		$item = $this->_model->getById($id);
		if($item) {
			$this->set('title', 'Item ' . $id);
			$this->set('item', $item);
		} else {
			header('Location: /items');
		}
	}
}
