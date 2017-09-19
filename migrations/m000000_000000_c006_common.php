<?php

/**
 * Class m000000_000000_c006_common
 */
class m000000_000000_c006_common extends \yii\db\Migration
{


    public function up()
    {
        self::down();


	$tables = Yii::$app->db->schema->getTableNames();
	$dbType = $this->db->driverName;
	$tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
	$tableOptions_mssql = "";
	$tableOptions_pgsql = "";
	$tableOptions_sqlite = "";

        /* MYSQL */
        if (!in_array('session', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%session}}', [
                    'id' => 'CHAR(26)  NOT NULL',
                    0 => 'PRIMARY KEY (`id`)',
                    'data' => 'BLOB NULL',
                    'expire' => 'INT(10) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('common_city', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%common_city}}', [
                    'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'state_id' => 'INT(10) UNSIGNED NOT NULL',
                    'data' => 'VARCHAR(100) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('common_state', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%common_state}}', [
                    'id' => 'INT(10) UNSIGNED NOT NULL',
                    0 => 'PRIMARY KEY (`id`)',
                    'country_id' => 'SMALLINT(5) UNSIGNED NOT NULL',
                    'data' => 'VARCHAR(65) NOT NULL',
                    'char2' => 'CHAR(2) NULL',
                    'char3' => 'CHAR(3) NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('common_postal_code', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%common_postal_code}}', [
                    'id' => 'INT(10) UNSIGNED NOT NULL',
                    0 => 'PRIMARY KEY (`id`)',
                    'city_id' => 'INT(10) UNSIGNED NOT NULL',
                    'data' => 'VARCHAR(30) NOT NULL',
                    'longitude' => 'DECIMAL(12,6) NOT NULL DEFAULT \'0.000000\'',
                    'latitude' => 'DECIMAL(12,6) NOT NULL DEFAULT \'0.000000\'',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('common_country', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%common_country}}', [
                    'id' => 'SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'data' => 'VARCHAR(100) NOT NULL',
                    'char2' => 'CHAR(2) NOT NULL',
                    'char3' => 'CHAR(3) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

    }

    public function down()
    {


        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `common_city`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `common_state`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `common_postal_code`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `common_country`');
        $this->execute('SET foreign_key_checks = 1;');


    }
}




