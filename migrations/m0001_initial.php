<?php 

class m0001_initial {
    public function up(){
        $db = \App\Core\Application::$app->db;
        $query = "CREATE TABLE users (
                                id INT AUTO_INCREMENT PRIMARY KEY,
                                email VARCHAR(255) NOT NULL,
                                `status` INT DEFAULT 0,
                                `password` VARCHAR(255) NOT NULL,
                                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                  ) ENGINE=INNODB;";

        $db->pdo->exec($query);

    }

    public function down(){
        $db = \App\Core\Application::$app->db;
        $query = "DROP TABLE users;";
        $db->pdo->exec($query);
    }
}