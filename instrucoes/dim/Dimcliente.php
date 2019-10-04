<?php
namespace dimesoes; 
require_once('cliente.php');
use dimensoes\Clientes;
mysqli_report(MYSQLI_REPORT_STRICT);

class Dimcliente{
    public function carregarDimCliente(){
        try{
            $connDimensao = $this->conectarBanco('dm_comercial');
            $connComercial = $this->conectarBanco('db_comercial');
        }catch (\Exception $e){
            die($e->getMessage());
        }
        $sqlDim = $connDimensao->prepare('select SK_cliente, cpf, nome, sexo, idade, rua, bairro, cidade, uf from dim_ckuebte');
        $sqlDim->execute();
        $result = $sqlDim->get_result();
        if($result->num_rows !== 0){

        }else{

        }
    }
    private function conectarBanco($banco){
        define('DS', DIRECTORY_SEPARATOR);
        define('BASE_DIR',dirname(__FILE__).DS);
        require_once(BASE_DIR.'config.php');
        try{
            $conn = new \MySQLi ($bdhost, $user, $password, $banco);
            return $conn;
        }catch (myisqli_sql_exeception $e){
            throw new \Exeception($e);
            die;
        }
    }
}

?>