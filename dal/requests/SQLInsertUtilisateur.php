<?php

/**
 * Description of SQLInsertUtilisateur
 *
 * @author Alves
 */
class SQLInsertUtilisateur extends SqlWrite {
    
    private $username;
    private $password;
    private $email;
    //...
    
    public function __construct(\Utilisateur $utilisateur) {
        $this->username = $utilisateur->getIdentifiant();
        $this->password = $utilisateur->getMotDePasse();
        $this->email = $utilisateur->getEmail();
        //...
    }
    
    protected function parametres() {
        $parametres =  new Parameters();
        $parametres->add(table_users::username, $this->username);
        $parametres->add(table_users::password, $this->password);
        $parametres->add(table_users::email, $this->email);
        //...
        
        return $parametres;
    }

    protected function requeteSQL() {
        $requete = "INSERT INTO {table1} ( ";
        $requete .= table_users::username + ", ";
        $requete .= table_users::password + ", ";
        $requete .= table_users::email;
        //...
        $requete .= " ) VALUES (";
        $requete .= "   :username, ";
        $requete .= "   :password, ";
        $requete .= "   :email ";
        //...
        $requete .= " );";
        
        return $requete;
    }

    protected function tables() {
        return array(table_users::NAME_TABLE);
    }    
}

?>