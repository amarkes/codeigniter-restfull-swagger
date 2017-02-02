<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_TableLogin extends CI_Migration {
    public function up() {
        $colunas = array(
          'id' => array(
            'type' => 'INT',
            'auto_increment' => TRUE
          ),
          'logo' => array(
            'type' => 'longblob',
          ),
          'nome' => array(
            'type' => 'VARCHAR',
            'constraint' => 60
          ),
          'email' => array(
            'type' => 'VARCHAR',
            'constraint' => 60
          ),
          'senha' => array(
            'type' => 'VARCHAR',
            'constraint' => 60
          ),
          'tipo' => array(
            'type' => 'enum("C","F")',
            'default'=> "C",
            'comment' => '[C]liente, [F]ornecedor'
          ),
          'status' => array(
            'type' => 'enum("D","A","B","E")',
            'default'=> "D",
            'comment' => '[D]esativo, [A]tivo, [B]loqueado, [E]xcluido'
          ),
          'bairro' => array(
            'type' => 'INT',
            'constraint' => 11
          ),
          'cidade' => array(
            'type' => 'INT',
            'constraint' => 11
          ),
          'estado' => array(
            'type' => 'INT',
            'constraint' => 11
          ),
          'complemento' => array(
            'type' => 'VARCHAR',
            'constraint' => 40
          ),
          'endereco' => array(
            'type' => 'VARCHAR',
            'constraint' => 60
          ),
          'numero' => array(
            'type' => 'INT',
            'constraint' => 6
          ),
          'cnpj' => array(
            'type' => 'VARCHAR',
            'constraint' => 20
          ),
          'telefone' => array(
            'type' => 'VARCHAR',
            'constraint' => 15
          ),
          'token' => array(
            'type' => 'VARCHAR',
            'constraint' => '40'
          ),
          'date_created' => array(
            'type' => 'TIMESTAMP',
          )
        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('id', 'id');
        $this->dbforge->add_key('email', 'id');
        $this->dbforge->add_key('estado', 'estado');
        $this->dbforge->add_key('cidade', 'cidade');
        $this->dbforge->add_key('bairro', 'bairro');
        $this->dbforge->add_key('token', 'token');
        $this->dbforge->add_key('cnpj', 'cnpj');
        $this->dbforge->add_key('telefone', 'telefone');
        $this->dbforge->add_field($colunas);
        $this->dbforge->create_table('login');
    }

    public function down() {
        $this->dbforge->drop_table('login');
    }
}
