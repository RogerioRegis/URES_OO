<?php

/**
 * @author rogerio
 */
class login extends Connect {

    private $login;
    private $senha;

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function logar() {
        $pdo = parent::getDB();

        $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login AND senha = :senha");
        $stmt->bindValue(':login', $this->getLogin());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->execute();
        
        if ($stmt->rowCount() == 1):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

}
