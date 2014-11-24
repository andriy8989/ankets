<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "anket_type_fields".
 *
 * @property integer $id
 * @property integer $anket_type_id
 * @property string $field_name
 * @property string $help_field
 *
 * @property AnketType $anketType
 */
class AnketTypeFields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anket_type_fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anket_type_id', 'field_name', 'help_field','rob_visible'], 'required'],
            [['anket_type_id'], 'integer'],
            [['field_name', 'help_field'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'anket_type_id' => 'Anket Type ID',
            'field_name' => 'Field Name',
            'help_field' => 'Help Field',
            'rob_visible' => 'Видимий для робітника',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnketType()
    {
        return $this->hasOne(AnketType::className(), ['id' => 'anket_type_id']);
    }
}
