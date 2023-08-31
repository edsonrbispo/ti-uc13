<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/models/Usuario.php";

class UsuarioController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new Usuario();
    }

    public function listar()
    {
        return $this->usuarioModel->listar();
    }


    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha'],
                'perfil' => $_POST['perfil']
            ];

            $this->usuarioModel->cadastrar($data);

            header('Location: index.php');
            exit();
        }


    }

    public function editar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha'],
                'perfil' => $_POST['perfil']
            ];

            $this->usuarioModel->editar($id, $data);

            header('Location: index.php');
            exit();
        }

        return $this->usuarioModel->buscar($id);

    }

    public function excluir($id)
    {
        $this->usuarioModel->excluir($id);

        header('Location: index.php');
        exit();
    }
}