<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "anket_type".
 *
 * @property integer $id
 * @property string $name
 *
 * @property AnketTypeFields[] $anketTypeFields
 * @property Operators[] $operators
 */
class AnketType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anket_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnketTypeFields()
    {
        return $this->hasMany(AnketTypeFields::className(), ['anket_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperators()
    {
        return $this->hasMany(Operators::className(), ['anket_id' => 'id']);
    }
}
