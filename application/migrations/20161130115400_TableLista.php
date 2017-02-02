<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_TableLista extends CI_Migration {
    public function up() {
        $colunas = array(
          'id' => array(
            'type' => 'INT',
            'auto_increment' => TRUE
          ),
          'fornecedor_id' => array(
            'type' => 'INT',
            'constraint' => 11
          ),
          'nome' => array(
              'type' => 'VARCHAR',
              'constraint' => 100
          ),
          'valor' => array(
            'type' => 'VARCHAR',
            'constraint' => 10
          ),
          'data' =>array(
            'type' => 'timestamp',
          ),
          'status' => array(
            'type' => 'enum("A","I","B")',
            'default'=> "A",
            'comment' => '[A]tivo, [I]nativo, [B]loqueado'

          )

        );
        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('id', 'id');
        $this->dbforge->add_key('fornecedor_id', 'fornecedor_id');
        $this->dbforge->add_field($colunas);
        $this->dbforge->create_table('lista');
    }

    public function down() {
        $this->dbforge->drop_table('lista');
    }
}
