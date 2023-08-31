<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/database/DBConexao.php";
class Usuario
{
    protected $table = 'usuarios'; // Nome da tabela no banco de dados
    protected $db;

    public function __construct()
    {
        $this->db = DBConexao::getInstance();

    }

    public function listar()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($data)
    {
        $query = "INSERT INTO {$this->table} (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nome', $data['nome']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':senha', $data['senha']);
        $stmt->bindParam(':perfil', $data['perfil']);

        $stmt->execute();
    }

    public function editar($id, $data)
    {
        $query = "UPDATE {$this->table} SET nome = :nome, email = :email, senha = :senha, perfil = :perfil WHERE id = :id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nome', $data['nome']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':senha', $data['senha']);
        $stmt->bindParam(':perfil', $data['perfil']);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();
    }

    public function excluir($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}