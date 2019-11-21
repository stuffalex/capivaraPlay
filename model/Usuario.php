<?php
class Usuario{
    private $idUsuario;
    private $nome;
    private $email;
    private $senha;
    private $telefone;

    public function __construct(string $idUsuario="", string $nome, email $email, password $senha, string $telefone){

        $this->idUsuario = $idUsuario;

        $this->nome = nome;

        $this->email = $email;
        
        $this->senha = $senha;
        
        $this->telefone = $telefone;
               

    }
    
}
?>