<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "lists".
 *
 * @property integer $id
 * @property string $name
 *
 * @property ListItem[] $listItems
 */
class Lists extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lists';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100]
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
    public function getListItems()
    {
        return $this->hasMany(ListItem::className(), ['list_id' => 'id']);
    }
}
