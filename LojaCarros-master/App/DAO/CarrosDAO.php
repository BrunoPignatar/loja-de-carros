<?php

namespace App\DAO;
use \PDO;
use App\Model\CarrosModel; 

class CarrosDAO extends DAO
{
    
    function __construct() 
    {
        parent::__construct();
    }


    /**
     * Método que recebe um model e extrai os dados do model para realizar o insert
     * na tabela correspondente ao model. Note o tipo do parâmetro declarado.
     */
    function insert(CarrosModel $model) 
    {
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare   
        $sql = "INSERT INTO veiculo 
                (marca, modelo, id_fabricante, id_tipo, ano, id_combustivel, cor, Numero_chassi,
                kilometragem, revisao, sinistro, roubo_furto, aluguel, venda, particular, observacoes) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Declaração da variável stmt que conterá a montagem da consulta. Observe que
        // estamos acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
        $stmt = $this->conexao->prepare($sql);

        // Nesta etapa os bindValue são responsáveis por receber um valor e trocar em uma 
        // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
        // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
        // via seta qual dado do model queremos pegar para a posição em questão.
        $stmt->bindValue(1, $model->marca);
        $stmt->bindValue(2, $model->modelo);
        $stmt->bindValue(3, $model->id_fabricante);
        $stmt->bindValue(4, $model->id_tipo);
        $stmt->bindValue(5, $model->ano);
        $stmt->bindValue(6, $model->id_combustivel);
        $stmt->bindValue(7, $model->cor);
        $stmt->bindValue(8, $model->Numero_chassi);
        $stmt->bindValue(9, $model->kilometragem);
        $stmt->bindValue(10, $model->revisao);
        $stmt->bindValue(11, $model->sinistro);
        $stmt->bindValue(12, $model->roubo_furto);
        $stmt->bindValue(13, $model->aluguel);
        $stmt->bindValue(14, $model->venda);
        $stmt->bindValue(15, $model->particular);
        $stmt->bindValue(16, $model->observacoes);

      
        
        // Ao fim, onde todo SQL está montando, executamos a consulta.
        $stmt->execute();      
    }


    public function select()
    {
        $sql = "SELECT v.*,
                f.descricao as nome_fabricante,
                c.descricao as nome_combustivel,
                t.descricao as nome_tipo
                from veiculo v
                join fabricante f on f.id = v.id_fabricante
                join combustivel c on c.id = v.id_combustivel
                join tipo t on t.id = v.id_tipo
                order by v.id
                ";


        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectFabr()
    {
        $sql = "SELECT * FROM fabricante";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function selectComb()
    {
        $sql = "SELECT * FROM combustivel";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectTipo()
    {
        $sql = "SELECT * FROM tipo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    public function update(CarrosModel $model)
    {
        $sql = "UPDATE veiculo SET marca=?, modelo=?, id_fabricante=?, id_tipo=?, ano=?, id_combustivel=?, cor=?, Numero_chassi=?,
        kilometragem=?, revisao=?, sinistro=?, roubo_furto=?, aluguel=?, venda=?, particular=?, observacoes=? WHERE id=?";


        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->marca);
        $stmt->bindValue(2, $model->modelo);
        $stmt->bindValue(3, $model->id_fabricante);
        $stmt->bindValue(4, $model->id_tipo);
        $stmt->bindValue(5, $model->ano);
        $stmt->bindValue(6, $model->id_combustivel);
        $stmt->bindValue(7, $model->cor);
        $stmt->bindValue(8, $model->Numero_chassi);
        $stmt->bindValue(9, $model->kilometragem);
        $stmt->bindValue(10, $model->revisao);
        $stmt->bindValue(11, $model->sinistro);
        $stmt->bindValue(12, $model->roubo_furto);
        $stmt->bindValue(13, $model->aluguel);
        $stmt->bindValue(14, $model->venda);
        $stmt->bindValue(15, $model->particular);
        $stmt->bindValue(16, $model->observacoes);
        $stmt->bindValue(17, $model->id);
        $stmt->execute();
    }


    public function selectById(int $id)
    {


        $sql = "SELECT * FROM veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\CarrosModel"); // Retornando um objeto específico PessoaModel
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM veiculo WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
