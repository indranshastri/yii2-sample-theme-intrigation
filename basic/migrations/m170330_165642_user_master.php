<?php

use yii\db\Migration;

class m170330_165642_user_master extends Migration
{
    public function up()
    {
      $this->addColumn('user_master', 'username', 'VARCHAR(255) AFTER `id` ');
      $this->addColumn('user_master', 'auth_key', 'VARCHAR(255) AFTER `device_id` ');
      $this->addColumn('user_master', 'password_reset_token', 'VARCHAR(255) AFTER `auth_key` ');
    }

    public function down()
    {
        echo "m170330_165642_user_master cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
