<?php

use yii\db\Migration;

/**
 * Class m211027_134538_data_pengguna_detail
 */
class m211027_134538_data_pengguna_detail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('data_pengguna_detail', [
            'ID_PENGGUNA_DETAIL' => $this->primaryKey(),
            'ID_PENGGUNA' => $this->string(8),
            'ID_REGION' => $this->string(8),
            'ID_UNIT' => $this->string(8),
            'JENIS_PEKERJAAN' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211027_134538_data_pengguna_detail cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211027_134538_data_pengguna_detail cannot be reverted.\n";

        return false;
    }
    */
}
