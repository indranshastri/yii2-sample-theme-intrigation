<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Users;
use app\component\CustomComponent;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SeedController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
     public function actionIndex()
     {
         $faker = \Faker\Factory::create();
         Yii::$app->db->createCommand()->truncateTable('user_master')->execute();

         for ( $i = 1; $i <= 20; $i++ )
         {
             $user = new Users();
             $user->setIsNewRecord(true);
             $user->username = $faker->username;
             $user->password = md5("123456");
             if ( $user->save() )
             {
                 $user->email       = $faker->email;
                 $user->device_type = (($i%2)==0)?"A":"I";
                 $user->device_id   = "123456";
                 $user->image       = null;
                 $user->created_by  = 1;
                 $user->created_at  = date("Y-m-d H:i:s");
                 $user->updated_by  = 1;
                 $user->updated_at  = date("Y-m-d H:i:s");
                 $user->save();
             }
         }

     }
}
