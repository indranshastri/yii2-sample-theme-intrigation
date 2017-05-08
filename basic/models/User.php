<?php

namespace app\models;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;


class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $password_reset_token;
    public $user_type;
    public static $user;
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $dbuser = null;
        $User = Users::findOne(['id' => $id]);
        if ($User!=null) {
              $dbuser =[
              "username" => $User->username,
              "password" => $User->password,
            ];
        }

        return  new static($dbuser);
    }


    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }



    /**
     * @inheritdoc
     */
    /* modified */
    public static function findIdentityByAccessToken($token, $type = null)
    {
          return Users::findOne(['access_token' => $token]);
    }

    /* removed
    public static function findIdentityByAccessToken($token)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    */
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $dbuser = null;
        $user = new User;
        $User = Users::findOne(['username' => $username]);
        if ($User!=null) {
              $dbuser =[
              "username" => $User->username,
              "password" => $User->password,
            ];
        }

        return  new static($dbuser);
    }

    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return Users::findOne([
            'password_reset_token' => $token
        ]);
    }




    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Security::generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    /** EXTENSION MOVIE **/


}
