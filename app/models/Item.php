<?php
/**
 * Item Model
 *
 * @package    phpMVC_Scaffold
 * @author     Raphael Santos <raph.snts@gmail.com>
 * @copyright  2014 Raphael Santos
 * @license    http://opensource.org/licenses/MIT 	The MIT License (MIT)
 * @link       http://github.com/raphsnts/phpMVC_Scaffold
 */
class Item extends Model
{
	/**
	 * Returns all items
	 * @return array
	 */
	public function getAll()
	{
		return array('item1', 'item2', 'item3');
	}
}
