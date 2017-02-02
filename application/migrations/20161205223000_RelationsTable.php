<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_RelationsTable extends CI_Migration {
    public function up() {
        $this->db->query("ALTER TABLE `keys`
          ADD CONSTRAINT `keys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`),
          ADD CONSTRAINT `keys_ibfk_3` FOREIGN KEY (`key`) REFERENCES `login` (`token`);");
          $this->db->query("ALTER TABLE `keys` ADD UNIQUE(`key`);");
          $this->db->query("ALTER TABLE `login` ADD UNIQUE(`email`);");
          $this->db->query("ALTER TABLE `login` ADD UNIQUE(`token`);");
          $this->db->query("INSERT INTO `login` (`id`, `email`, `senha`, `token`) VALUES (NULL, 'asdfasdfasdf', 'asdfasdfasdf', 'toquempadrao');");
          $this->db->query("INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresse`, `date_created`) VALUES (NULL, '1', 'toquempadrao', '', '0', '0', NULL, '');");

    }

    public function down() {

    }
}
