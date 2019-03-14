<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mac_address_vendors}}".
 *
 * @property int $id
 * @property string $key
 * @property string $name
 */
class User extends \dektrium\user\models\User
{
    /**
     * @param $id
     * @return User|null
     */
    public function getById($id)
    {
        return self::findOne(['id' => $id]);
    }


}
