<?php

use yii\db\Migration;

/**
 * Class m211027_140443_data_unit
 */
class m211027_140443_data_unit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('data_unit', [
            'ID_UNIT' => $this->primaryKey(),
            'ID_REGION' => $this->string(8),
            'NAMA_UNIT' => $this->string(50),
            'SINGKATAN' => $this->string(10),
            'KETERANGAN' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211027_140443_data_unit cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211027_140443_data_unit cannot be reverted.\n";

        return false;
    }
    */
}
