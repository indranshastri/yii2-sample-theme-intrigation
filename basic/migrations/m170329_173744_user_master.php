<?php
use yii\db\Schema;
use yii\db\Migration;

class m170329_173744_user_master extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable("user_master", [
              "id" => $this->primaryKey(),
              "email" => $this->string(255),
              "password" => $this->string(255),
              'image' => $this->string(255),

              'google_id' => $this->string(255),
              'google_image' => $this->string(255),

              'facebook_id' => $this->string(255),
              'facebook_image' => $this->string(255),

              'forgetpassword_token' => $this->string(255),
              'forgetpassword_stamp' => $this->string(255),

              'device_type'=> "ENUM('A','I')  DEFAULT NULL",
              'device_id'=> $this->string(255),

              'is_deleted' => "ENUM('Y','N')  DEFAULT 'N'",
              'is_active' => "ENUM('Y','N')  DEFAULT 'Y'",
              'created_by' => $this->integer(),
              'created_at' =>  $this->dateTime(),
              'updated_by' => $this->integer(),
              'updated_at' =>  $this->dateTime()
           ],$tableOptions);
    }

    public function down()
    {
          $this->dropTable('user_master');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safe  Down()
    {
    }
    */
}
