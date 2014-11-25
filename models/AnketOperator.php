<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anket_operator".
 *
 * @property integer $id
 * @property integer $anket_id
 * @property integer $operator_id
 * @property integer $digital_value
 * @property integer $coefficient_for_rob5
 * @property integer $is_auto_run4
 * @property integer $fact_oborot
 *
 * @property UAnkets $anket
 * @property Operators $operator
 */
class AnketOperator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anket_operator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anket_id', 'operator_id', 'digital_value', 'coefficient_for_rob5', 'is_auto_run4', 'fact_oborot'], 'required'],
            [['anket_id', 'operator_id', 'digital_value', 'coefficient_for_rob5', 'is_auto_run4', 'fact_oborot'], 'integer']
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
            'operator_id' => 'Operator ID',
            'digital_value' => 'Digital Value',
            'coefficient_for_rob5' => 'Coefficient For Rob5',
            'is_auto_run4' => 'Is Auto Run4',
            'fact_oborot' => 'Fact Oborot',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnket()
    {
        return $this->hasOne(UAnkets::className(), ['id' => 'anket_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operators::className(), ['id' => 'operator_id']);
    }
}
