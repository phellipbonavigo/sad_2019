<?php
    namespace DIM;

    /**
     * Model da entidade cliente
     * @author Felipe Tonini
     */

    class cliente{
        /**
         * CPF do cliente
         * @var string
         * 
         * 
         */
        public $cpf;
        /**
         * Nome do Cliente
         * @var string
         */
        public $nome;
        /**
         * Sexo Cliente
         * @var string 
         * 
         */
        public $sexo;
        /**
         * Sexo Cliente
         *  @var string 
         * 
         */
        public $idade;
        /**
         * Email Cliente
         * @var string 
         * 
         */
        public $email;
        /**
         * Rua Cliente
         * @var string 
         * 
         */
        public $rua;
        /**
         * Bairro Cliente
         * @var string 
         * 
         */
        public $bairro;
        /**
         * Cidade Cliente
         * @var string 
         * 
         */
        public $cidade;
        /**
         * Uf Cliente
         * @var string 
         * 
         */
        public $uf;

        /**
         * Carrega os atributos da classe propect
         * @param $cpf CPF do cliente
         * @param $nome NOME do cliente
         * @param $sexo SEXO do cliente
         * @param $idade IDADE do cliente
         * @param $rua RUA do cliente
         * @param $bairro BAIRRO do cliente
         * @param $cidade CIDADE do cliente
         * @param $uf UF do cliente
         * @return Void
         */

        public function setProspect ($cpf,$nome,$sexo,$idade,$rua,$bairro,$cidade,$uf){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        }
    }
?>