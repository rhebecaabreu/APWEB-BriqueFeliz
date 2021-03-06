<?php

require_once("Funcionario.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FuncionarioFactory
 *
 * @author Murilo Rei Delas
 */
class FuncionarioFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM funcionario where funcionario_id = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Funcionario");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function autenticar($funcionario_id, $cpf) {
        $sql = "SELECT * FROM funcionario where funcionario_id = '" . $funcionario_id . "' and cpf ='". $cpf ."'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Funcionario");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM funcionario";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Funcionario");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Funcionario = $obj;

        //var_dump($Funcionario);
        try {
            $sql = "INSERT INTO  funcionario(cpf, nome, endereco, cidade, estado, telefone_residencial, telefone_celular, email, 
            data_contratacao, nivel_permissao) " .
                    " VALUES ( '" . $Funcionario->getCpf() . "', '"
                    . $Funcionario->getNome() . "', '"
                    . $Funcionario->getEndereco() . "', '"
                    . $Funcionario->getCidade() . "', '"
                    . $Funcionario->getEstado() . "', '"
                    . $Funcionario->getTelefoneResidencial() . "', '"
                    . $Funcionario->getTelefoneCelular() . "', '"
                    . $Funcionario->getEmail() . "', '"
                    . $Funcionario->getDataContratacao() . "', '"
                    . $Funcionario->getNivelPermissao(). "')";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

    public function deletar($param) {
        try {
            $sql = "DELETE FROM Funcionario where funcionario_id = '" . $param . "'";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

    public function inverterPermissao($id, $permissaoAtual) {
        $permissaoAtual = $permissaoAtual == 1 ? 2 : 1;

        try {
            $sql = "UPDATE Funcionario set nivel_permissao = '" . $permissaoAtual .  "'where funcionario_id = '". $id."'";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

}