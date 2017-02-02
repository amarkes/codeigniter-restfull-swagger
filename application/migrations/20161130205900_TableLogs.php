<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_TableLogs extends CI_Migration {
    public function up() {
        $colunas = array(
          'id' => array(
            'type' => 'INT',
            'auto_increment' => TRUE
          ),

          'uri' => array(
            'type' => 'VARCHAR',
            'constraint' => '255',
           ),
          'method' => array(
            'type' => 'VARCHAR',
            'constraint' => '6',
           ),
          'params' => array(
            'type' => 'TEXT',
            'default' => null
           ),
          'api_key' => array(
            'type' => 'VARCHAR',
            'constraint' => '40',
           ),
          'ip_address' => array(
            'type' => 'VARCHAR',
            'constraint' => '45',
           ),
          'time' => array(
            'type' => 'INT',
            'constraint' => '11',
           ),
          'rtime' => array(
            'type' => 'FLOAT',
            'default' => null
           ),
          'authorized' => array(
            'type' => 'VARCHAR',
            'constraint' => '1',
           ),
          'response_code' => array(
            'type' => 'smallint',
            'constraint' => '3',
            'default' => '0'
           )
        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('id', 'id');
        $this->dbforge->add_key('uri', 'uri');
        $this->dbforge->add_key('api_key', 'api_key');
        $this->dbforge->add_key('response_code', 'response_code');
        $this->dbforge->add_field($colunas);
        $this->dbforge->create_table('logs');
    }

    public function down() {
        $this->dbforge->drop_table('logs');
    }
}
