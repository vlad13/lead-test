<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lead".
 *
 * @property int $id
 * @property string|null $email Электронная почта
 * @property string|null $name Имя
 * @property string|null $mobile Телефон
 */
class Lead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lead';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name'], 'string', 'max' => 100, 'min' => 3],
            [['mobile'], 'string', 'max' => 20],
            [['email', 'name', 'mobile'], 'required'],
            ['email', 'email'],
            ['mobile', 'checkMobile'],
            ['name', 'checkName'],
            [['email', 'name', 'mobile'], 'unique'],
        ];
    }

    public function checkMobile($attribute)
    {
        if (!preg_match('/^\+7[0-9]{10}$/', $this->$attribute)) {
            $this->addError($attribute, 'Телефон должен быть в формате +7**********');
        }else {
            return true;
        }
    }

    public function checkName($attribute)
    {
        if (!preg_match('/^[A-Za-z]+$/', $this->$attribute)) {
            $this->addError($attribute, 'Имя должно состоять только из латиницы (без цифр, пробелов и спец.символов)');
        }else {
            return true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Электронная почта',
            'name' => 'Имя',
            'mobile' => 'Телефон',
        ];
    }
}
