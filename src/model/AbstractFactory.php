<?php 
abstract class AbstractFactory{
    protected $db;
 
    public function __construct() {
        try {
            $this->db = new PDO("sqlite:model/bd/controlhotel.sqlite");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
    /*Funчѕes abstratas*/
    /*Listas*/
    abstract public function listarAlugueis($idUsuario): array;
    abstract public function listarFilmes($idFilme): array;
    //abstract public function listarClientes(): array;
    /*Buscas*/
    abstract public function buscarFilmePorId(int $idQuarto): array;
    /*Salvar no bd*/
    abstract public function AlugarFilme($novaReserva);
    abstract public function salvarUsuario($user);
    abstract public function efetuarLogin($email,$senha): array;
    /*Atualizar dados*/
    abstract public function atualizarUsuario($user);
    /*Excluir cadastro*/
    abstract public function excluirUsuario($user);
    /*Funчуo que pega o resultado de qualquer pesquisa no banco de dados e transforma em uma classe abstrada
     instanciando entуo um objeto daquele tipo---Funчуo retirada dos exercэcios em sala de aula*/
    protected function queryRowsToListOfObjects(PDOStatement $result, $nameObject): array {
        $list = array();
        $r = $result->fetchAll(PDO::FETCH_NUM);
        foreach ($r as $row) {
            $ref = new ReflectionClass($nameObject);
            $list[] = $ref->newInstanceArgs($row);
        }
        return $list;
    }
}

?>