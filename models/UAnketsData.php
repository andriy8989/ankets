<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "u_ankets_data".
 *
 * @property integer $id
 * @property integer $anket_id
 * @property string $field
 * @property string $value
 *
 * @property UAnkets $anket
 */
class UAnketsData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'u_ankets_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anket_id', 'field', 'value'], 'required'],
            [['anket_id'], 'integer'],
            [['field'], 'string', 'max' => 200],
            [['value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'anket_id' => 'Anket ID',
            'field' => 'Field',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnket()
    {
        return $this->hasOne(UAnkets::className(), ['id' => 'anket_id'])->with('anketType');
    }
}
