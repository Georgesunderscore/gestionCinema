
<?php


class Role
{
	// déclaration table intermediaire
    private String $_role;

    private array $_listCasting;

    public function __construct($role)
	{
	    $this->_role = $role;
    }

    

    /**
     * Get the value of _role
     */
    public function getRole(): Strin
    {
        return $this->_role;
    }

    /**
     * Set the value of _role
     */
    public function setRole(Strin $_role){
        $this->_role = $_role;
    }


    public function getListCasting(): array
    {
        return $this->_listCasting;
    }


    public function setListCasting(array $_listCasting){
        $this->_listCasting = $_listCasting;
    }

    public function ajoutCasting( Cast $cast)
	{
		//ajouter un element a la list des livres
		$this->_listCasting [] = $cast;
        return $this;
	}

    //Lister la liste des acteurs ayant incarné un rôle précis
    // role->getlistac();
    // getlistac(role);

    public function getListActeurParRole( Role $role)
	{
		//filtrer la list par le role 
        return $this->_listCasting.filter_id($role->_role);
	}
}
