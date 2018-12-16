<?php

class Crud_model extends CI_Model {
    
  public function inserir($dados, $tabela) {
    $this->db->insert($dados, $tabela);

    if($this->db->insert_id() >= 1) {
      return $this->db->insert_id();
    } else {
      return false;
    }
  }

  public function atualizar($dados, $where, $tabela) {
    $this->db->set($dados);
    $this->db->where($where);

    if($this->db->update($tabela)) {
      return true;
    } else {
      return false;
    }
  }

  public function inativar($campo, $where, $tabela) {
    $this->db->set($campo, 0);
    $this->db->where($where);

    if($this->db->update($tabela)) {
      return true;
    } else {
      return false;
    }
  }

  public function deletar($where, $tabela) {
    $this->db->where($where);
    
    if($this->db->delete($tabela)) {
      return true;
    } else {
      return false;
    }
  }

  public function buscar($campos, $tabela, $join, $where, $order) {
    $this->db->select($campos);
    $this->db->from($tabela);

    if(!empty($join)) {
      $this->db->join($join['tabela'], $join['condicao'], $join['tipo']);
    }

    if(!empty($where)) {
      $this->db->where($where);
    }

    if(!empty($order)) {
      $this->db->order_by($order);
    }

    $query = $this->db->get();
    // print_r($this->db->last_query()); exit;

    if($query->result_array() >= 1) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function busca_livre($select) {
    $this->db->select($select);
    
    $query = $this->db->get();
    // print_r($this->db->last_query()); exit;

    if($query->result_array() >= 1) {
      return $query->result_array();
    } else {
      return false;
    }
  }

}
