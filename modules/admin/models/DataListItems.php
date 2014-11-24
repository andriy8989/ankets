<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "data_list_items".
 *
 * @property integer $id
 * @property integer $data_list_id
 * @property string $value
 *
 * @property DataList $dataList
 */
class DataListItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_list_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_list_id', 'value'], 'required'],
            [['data_list_id'], 'integer'],
            [['value'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_list_id' => 'Data List ID',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataList()
    {
        return $this->hasOne(DataList::className(), ['id' => 'data_list_id']);
    }
}
