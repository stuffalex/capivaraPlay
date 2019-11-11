<?php

class Filmes{

    private $idVideo;
    private $nomeVideo;    
    private $ano;    
    private $clasIndicativa;    
    private $duracao;    
    private $sinopse;
    
  

    public function __construct(string $idVideo="",string $nomeFilme, string $ano, string $clasIndicativa, string $duracao, string $sinopse){

        $this->idVideo = $idVideo;

        $this->nomeVideo = $nomeVideo;
        
        $this->ano = $ano;
        
        $this->clasIndicativa = $clasIndicativa;
        
        $this->duracao = $duracao;
        
        $this->sinopse = $sinopse;

        
        

    }
}
?>