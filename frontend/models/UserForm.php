<?php  

namespace frontend\models;
use yii\frontend\Model;

class UserForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'requierd'],
            ['email','email'],
        ];
    }
}


?>