<?php
require_once 'Usergroup.php';
require_once 'User.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Depense {

	private $_id,
					$_montant,
					$_date,
					$_description;

	public function get_id { return $this->_id; }
	public function get_montant { return $this->_montant; }
	public function get_date { return $this->_date; }
	public function get_description { return $this->_description; }

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
     * @var    float $montant
     * @access public
     */
    var $montant;

    /**
     * XXX
     *
     * @var    int $date
     * @access public
     */
    var $date;

    /**
     * XXX
     *
     * @var    text $description
     * @access public
     */
    var $description;

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
     * @var    User $unnamed
     * @access private
     * @accociation User to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    User $unnamed
     * @access private
     * @accociation User to unnamed
     */
    #var $unnamed;

    // Operations
}

?>
