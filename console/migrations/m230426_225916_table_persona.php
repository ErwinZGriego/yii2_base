<?php

use yii\db\Migration;

/**
 * Class m230426_225916_table_persona
 */
class m230426_225916_table_persona extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $i="
        CREATE TABLE `persona` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `nombre` VARCHAR(50) NOT NULL DEFAULT '0',
            `apellido` VARCHAR(50) NOT NULL DEFAULT '0',
            `f_nacimiento` DATE NOT NULL DEFAULT '0',
            `nickname` VARCHAR(50) NOT NULL DEFAULT '0',
            `foto_code` LONGTEXT NOT NULL,
            `deleted` SET('0','1') NOT NULL DEFAULT '0',
            PRIMARY KEY (`id`)
        )
        COLLATE='latin1_swedish_ci'
        ;";
        $this->execute($i);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230426_225916_table_persona cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230426_225916_table_persona cannot be reverted.\n";

        return false;
    }
    */
}
