<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_master".
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $image
 * @property string $google_id
 * @property string $google_image
 * @property string $facebook_id
 * @property string $facebook_image
 * @property string $forgetpassword_token
 * @property string $forgetpassword_stamp
 * @property string $device_type
 * @property string $device_id
 * @property string $is_deleted
 * @property string $is_active
 * @property integer $created_by
 * @property string $created_at
 * @property integer $updated_by
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_type', 'is_deleted', 'is_active'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['email', 'password', 'image', 'google_id', 'google_image', 'facebook_id', 'facebook_image', 'forgetpassword_token', 'forgetpassword_stamp', 'device_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'image' => Yii::t('app', 'Image'),
            'google_id' => Yii::t('app', 'Google ID'),
            'google_image' => Yii::t('app', 'Google Image'),
            'facebook_id' => Yii::t('app', 'Facebook ID'),
            'facebook_image' => Yii::t('app', 'Facebook Image'),
            'forgetpassword_token' => Yii::t('app', 'Forgetpassword Token'),
            'forgetpassword_stamp' => Yii::t('app', 'Forgetpassword Stamp'),
            'device_type' => Yii::t('app', 'Device Type'),
            'device_id' => Yii::t('app', 'Device ID'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'is_active' => Yii::t('app', 'Is Active'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return Userquery the active query used by this AR class.
     */
    public static function find()
    {
        return new Userquery(get_called_class());
    }
}
