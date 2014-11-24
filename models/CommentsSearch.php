<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `app\models\Comments`.
 */
class CommentsSearch extends Comments
{
    public function rules()
    {
        return [
            [['id', 'category', 'item_id'], 'integer'],
            [['author', 'state', 'text', 'date_publish', 'date_edit'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Comments::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category' => $this->category,
            'item_id' => $this->item_id,
            'date_publish' => $this->date_publish,
            'date_edit' => $this->date_edit,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
