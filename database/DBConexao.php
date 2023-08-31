<?php

class DBConexao
{
    // Configurações do banco de dados
    private $host = "localhost";
    private $dbname = "biblioteca";
    private $username = "root";
    private $password = "";

    // Instância única da classe (implementação do Singleton)
    private static $instance = null;
    private $conx; // Objeto PDO para a conexão

    // Construtor privado para evitar criação externa de instâncias (parte do Singleton)
    private function __construct()
    {
        try {
            // Inicializa a conexão com o banco de dados usando PDO
            $this->conx = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            // Define o modo de tratamento de erros para exceções
            $this->conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Captura e exibe mensagens de erro na conexão
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        }
    }

    // Método estático para obter a instância única da conexão (implementação do Singleton)
    public static function getInstance()
    {
        if (!self::$instance) {
            // Se não houver uma instância, cria uma (parte do Singleton)
            self::$instance = new DBConexao();
        }
        // Retorna a conexão armazenada na instância (parte do Singleton)
        return self::$instance->conx;
    }
}
?>