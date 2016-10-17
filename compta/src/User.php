<?php
require_once 'Usergroup.php';
require_once 'Usercolor.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class User {
	private $_id,
					$_username,
					$_password;

	public function get_id() { return $this->_id; }
	public function get_username() { return $this->_username; }
	public function get_password() { return $this->_password; }


    // Attributes
    /**
     * XXX
     *
     * @var    int $id
     * @access public
     */
    var $id;

    /**
     * XXX
     *
     * @var    str $username
     * @access public
     */
    var $username;

    /**
     * XXX
     *
     * @var    str $password
     * @access public
     */
    var $password;

    // Associations
    /**
     * XXX
     *
     * @var    Usergroup $unnamed
     * @access private
     * @accociation Usergroup to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    Usercolor $unnamed
     * @access private
     * @accociation Usercolor to unnamed
     */
    #var $unnamed;

    // Operations
}

?>
