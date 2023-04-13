<?php

namespace App\Model;
use App\DAO\CarrosDAO;

class CarrosModel extends Model
{
    public $id, $marca, $modelo, $id_fabricante, $id_tipo, $ano, $id_combustivel, $cor, $Numero_chassi; 
    public $kilometragem, $revisao, $sinistro, $roubo_furto, $aluguel, $venda, $particular, $observacoes, $data_cadastro;
    public $nome_fabricante, $nome_combustivel, $nome_tipo;
    

    public function save()
    {

        $dao = new CarrosDAO();

        // Se id for nulo, significa que trata-se de um novo registro
        // caso contrário, é um update poque a chave primária já existe.
        if(empty($this->id)) 
        {
            // No que estamos enviado o proprio objeto model para o insert, por isso do this
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {

        $dao = new CarrosDAO();

        $this->rows = $dao->select();
    }

    public function getAllRowsFabr()
    {

        $dao = new CarrosDAO();

        $this->rowsFabr = $dao->selectFabr();
    }

    public function getAllRowsComb()
    {

        $dao = new CarrosDAO();

        $this->rowsComb = $dao->selectComb();
    }

    public function getAllRowsTipo()
    {

        $dao = new CarrosDAO();

        $this->rowsTipo = $dao->selectTipo();
    }
    


     /**
     * Método que encapsula o acesso ao método selectById da camada DAO
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * a ser recuperado do MySQL, via camada DAO.
     */
    public function getById(int $id)
    {


        $dao = new CarrosDAO();

        $obj = $dao->selectById($id); // Obtendo um model preenchido da camada DAO

        // Para saber mais operador ternário, leia: https://pt.stackoverflow.com/questions/56812/uso-de-e-em-php
        return ($obj) ? $obj : new CarrosModel(); // Operador Ternário

    }


    public function delete(int $id)
    {
        $dao = new CarrosDAO();

        $dao->delete($id);
    }
}