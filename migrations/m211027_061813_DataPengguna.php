<?php

use yii\db\Migration;

/**
 * Class m211027_061813_DataPengguna
 */
class m211027_061813_DataPengguna extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('DataPengguna', [
            'ID_PENGGUNA' => $this->primaryKey(),
            'username' => $this->string(255)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'username' => $this->string(255),
            'NAMA_PENGGUNA' => $this->string(255),
            'JABATAN_PENGGUNA' => $this->string(255),
            'ALAMAT_PENGGUNA' => $this->text(),
            'NO_TELP_PENGGUNA' => $this->string(255),
            'EMAIL_PENGGUNA' => $this->string(255),
            'JENIS_USER' => $this->string(50),
            'STATUS_USER' => $this->string(50),
            'accessToken' => $this->string(50),
            'authKey' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211027_061813_DataPengguna cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211027_061813_DataPengguna cannot be reverted.\n";

        return false;
    }
    */
}
