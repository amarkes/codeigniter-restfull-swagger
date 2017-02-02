<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ServicesModel extends CI_Model {

	function __construct(){
        parent::__construct();
    }

	function get($table, $data , $limit=20, $offset=0){
    if($table !=""){
      if($data == null) {
        $query = $this->db->get($table, $offset, $limit);
      } else {
        $query = $this->db->get_where($table, $data, $limit);
      }
      return array('status' =>true, 'message' => 'Sucess query', 'response'=> $query->result());
    } else {
      return array('status' =>false, 'message' => 'Error, table not found');
    }
	}
  function post($table,$data) {
    if($table !=null AND $data != null){
      $query = $this->db->insert($table, $data);
      if($query){
        return array('status' =>true, 'message' => 'Sucess insert', 'response'=> $this->db->get_where($table, array('id' => $this->db->insert_id()))->result());
      } else {
        return array('status' =>false, 'message' => 'Error, query not executing');
      }
    } else {
      return array('status' =>false, 'message' => 'Error, table not found');
    }
  }
  function put($table, $field='id', $values, $data) {
    if($table != null AND $field != null AND $values != null AND $data != null) {
      $query = $this->db->update($table, $data, array($field => $values));
      if($query) {
        return array('status' =>true, 'message' => 'Sucess update', 'response'=>  $this->db->get_where($table, array($field => $values))->result());
      } else {
        return array('status' =>false, 'message' => 'Error, query not executing');
      }
    } else {
      return array('status' =>false, 'message' => 'Error, table and fields not found');
    }
  }
  function delete($table, $field='id',$values) {
    if($table != null AND $field != null AND $values != null) {
      $query = $this->db->delete($table, array($field => $values));
      if($query) {
        return array('status' =>true, 'message' => 'Sucess deleted', 'response'=>  '{'.$field.':'.$values.'}');
      } else {
        return array('status' =>false, 'message' => 'Error, query not executing');
      }
    } else {
      return array('status' =>false, 'message' => 'Error, table and fields not found');
    }

  }

}
