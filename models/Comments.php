<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $category
 * @property integer $item_id
 * @property string $author
 * @property string $state
 * @property string $text
 * @property string $date_publish
 * @property string $date_edit
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'item_id', 'author', 'state', 'text', 'date_publish', 'date_edit'], 'required'],
            [['category', 'item_id'], 'integer'],
            [['text'], 'string'],
            [['date_publish', 'date_edit'], 'safe'],
            [['author'], 'string', 'max' => 100],
            [['state'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'item_id' => 'Item ID',
            'author' => 'Author',
            'state' => 'State',
            'text' => 'Text',
            'date_publish' => 'Date Publish',
            'date_edit' => 'Date Edit',
        ];
    }
}
