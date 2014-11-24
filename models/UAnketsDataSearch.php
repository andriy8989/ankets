<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UAnketsData;

/**
 * UAnketsDataSearch represents the model behind the search form about `app\models\UAnketsData`.
 */
class UAnketsDataSearch extends UAnketsData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'anket_id'], 'integer'],
            [['field', 'value'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UAnketsData::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'anket_id' => $this->anket_id,
        ]);

        $query->andFilterWhere(['like', 'field', $this->field])
            ->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
