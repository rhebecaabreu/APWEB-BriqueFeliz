<?php

require_once("Produto.php");
require_once("AbstractFactory.php");
require_once("ProdutosParaVenda.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoFactory
 *
 * @author Murilo Rei Delas
 */
class ProdutoFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM produto where produto_id = " . $param . ";";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM Produto";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listarProdutoEstoque() {
        $sql = "SELECT p.produto_id, pe.produto_estoque_id, p.nome, sum(pe.quantidade), pe.preco_venda, p.codigo_de_barras
                FROM produto as p INNER JOIN produto_estoque as pe ON (pe.produto_id = p.produto_id) GROUP BY p.produto_id";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "ProdutosParaVenda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Produto = $obj;
        try {
            $sql = "INSERT INTO  Produto(nome, codigo_de_barras, descricao, categoria_id)" .
                    "VALUES ( '" . 
                    $Produto->getNome() . "', '" . 
                    $Produto->getCodigoDeBarras() . "', '" . 
                    $Produto->getDescricao() . "', '" .
                    $Produto->getCategoriaId() ."')";
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

    public function deletar($idProduto) {
        try {
            $sql = "DELETE FROM Produto where produto_id = '" . $idProduto . "'";
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

    public function alterar($obj1,$obj2,$email) {
        try {
            $sql = "UPDATE Produto set nome ='" . $obj1 . "', email='" .$obj2 . "'where email='". $email."'";
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