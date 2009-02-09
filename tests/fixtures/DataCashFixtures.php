<?php
/**
 * DataCashFixtures
 * 
 * Used to store our datacash related fixtures.
 * 
 * @author Yomi (baphled) Colledge <yomi@boodah.net> 2009
 * @version $Id$
 * @copyright 2009
 * @package DataCash
 * @subpackage Test_DataCash_Fixtures
 *
 * $LastChangedBy$
 */

require_once 'Zend/Loader.php';
Zend_Loader::registerAutoload ();

class DataCashFixtures extends PHPUnit_Fixture {
	protected $_fixtures = array(
           array('ALIAS'=>'validCard', 'pan'=>34342342424234,'expirydate'=>'01/09'),
           array('ALIAS'=>'invalidCard', 'pa'=>34342342424234,'expirdate'=>'01/09')
       );
}