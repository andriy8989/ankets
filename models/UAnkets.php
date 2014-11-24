<?php

namespace app\models;

use Yii;
use app\modules\admin\models\AnketType;
/**
 * This is the model class for table "u_ankets".
 *
 * @property integer $id
 * @property integer $anket_type_id
 * @property string $name
 * @property integer $status
 * @property integer $paket_id
 *
 * @property AnketColum[] $anketColums
 * @property AnketType $anketType
 * @property UAnketsData[] $uAnketsDatas
 */
class UAnkets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'u_ankets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anket_type_id', 'name', 'status', 'paket_id'], 'required'],
            [['anket_type_id', 'status', 'paket_id'], 'integer'],
            [['name'], 'string', 'max' => 7]
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
            'name' => 'Name',
            'status' => 'Виконано',
            'paket_id' => 'Пакет',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnketColums()
    {
        return $this->hasMany(AnketColum::className(), ['anket_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnketType()
    {
        return $this->hasOne(AnketType::className(), ['id' => 'anket_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUAnketsDatas()
    {
        return $this->hasMany(UAnketsData::className(), ['anket_id' => 'id']);
    }
}