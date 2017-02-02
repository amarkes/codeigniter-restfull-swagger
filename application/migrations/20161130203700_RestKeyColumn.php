<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_RestKeyColumn extends CI_Migration {
    public function up() {
        $colunas = array(
          'id' => array(
            'type' => 'INT',
            'auto_increment' => TRUE
          ),
          'user_id' => array(
            'type' => 'INT',
            'constraint' => '11'
          ),
          'key' => array(
            'type' => 'VARCHAR',
            'constraint' => '40'
          ),
          'level' => array(
            'type' => 'INT',
            'constraint' => '2'
          ),
          'ignore_limits' => array(
            'type' => 'TINYINT',
            'constraint' => '1',
            'default' => '0'
          ),
          'is_private_key' => array(
            'type' => 'TINYINT',
            'constraint' => '1',
            'default' => '0'
          ),
          'ip_addresse' => array(
            'type' => 'TEXT',
            'unsigned' => TRUE,
            'default' => NULL
           ),
          'date_created' => array(
            'type' => 'TIMESTAMP',
          )

        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('id', 'id');
        $this->dbforge->add_key('user_id', 'user_id');
        $this->dbforge->add_key('key', 'key');
        $this->dbforge->add_field($colunas);
        $this->dbforge->create_table('keys');

    }

    public function down() {
        $this->dbforge->drop_table('keys');
    }
}
