<?php

use yii\db\Migration;

/**
 * Class m230427_004657_table_ganado
 */
class m230427_004657_table_ganado extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $i="
        CREATE TABLE `ganado` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `raza` VARCHAR(50) NOT NULL DEFAULT '0',
            `peso_ingreso` FLOAT NOT NULL DEFAULT 0,
            `peso_egreso` FLOAT NOT NULL DEFAULT 0,
            `alimento_tipo` VARCHAR(50) NOT NULL DEFAULT '0',
            `alimento_cantidad` FLOAT NOT NULL DEFAULT 0,
            `f_ingreso` DATETIME NOT NULL DEFAULT 0,
            `f_egreso` DATETIME NOT NULL DEFAULT 0,
            PRIMARY KEY (`id`)
        )
        COLLATE='latin1_swedish_ci'
        ;
        ";
        $this->execute($i);
    }
    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230427_004657_table_ganado cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230427_004657_table_ganado cannot be reverted.\n";

        return false;
    }
    */
}
