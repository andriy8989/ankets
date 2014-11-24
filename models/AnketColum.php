<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anket_colum".
 *
 * @property integer $id
 * @property integer $anket_id
 * @property integer $colum_id
 * @property integer $digital_value
 * @property integer $coefficient_for_rob5
 * @property integer $is_auto_run4
 * @property integer $fact_oborot
 *
 * @property UAnkets $anket
 */
class AnketColum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anket_colum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anket_id', 'colum_id', 'digital_value', 'coefficient_for_rob5', 'is_auto_run4', 'fact_oborot'], 'required'],
            [['anket_id', 'colum_id', 'digital_value', 'coefficient_for_rob5', 'is_auto_run4', 'fact_oborot'], 'integer']
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
            'colum_id' => 'Colum ID',
            'digital_value' => 'Цифрове значення завдання *',
            'coefficient_for_rob5' => 'Коефіцієнт перерахування для робітника №5 *',
            'is_auto_run4' => 'Автоматичне виконання робітником №4',
            'fact_oborot' => 'З оборотом фактичним №1 для робітника №5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnket()
    {
        return $this->hasOne(UAnkets::className(), ['id' => 'anket_id']);
    }
}