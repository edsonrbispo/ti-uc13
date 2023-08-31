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

    // Função para listar todos os usuarios da tabela
    public function listar()
    {
        try {
            $query = "SELECT * FROM {$this->table}";
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Função para buscar um usuario pelo seu ID
    public function buscar($id)
    {
        try {
            $query = "SELECT * FROM {$this->table} WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Função para cadastrar um novo registro na tabela usuário
    public function cadastrar($data)
    {
        try {
            $query = "INSERT INTO {$this->table} (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nome', $data['nome']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':senha', $data['senha']);
            $stmt->bindParam(':perfil', $data['perfil']);

            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Função para editar um registro existente na tabela usuário
    public function editar($id, $data)
    {
        try {
            $query = "UPDATE {$this->table} SET nome = :nome, email = :email, senha = :senha, perfil = :perfil WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nome', $data['nome']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':senha', $data['senha']);
            $stmt->bindParam(':perfil', $data['perfil']);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Função para excluir um registro da tabela usuario pelo seu ID
    public function excluir($id)
    {
        try {
            $query = "DELETE FROM {$this->table} WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}