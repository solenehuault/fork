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
