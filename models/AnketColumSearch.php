<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnketColum;

/**
 * AnketColumSearch represents the model behind the search form about `app\models\AnketColum`.
 */
class AnketColumSearch extends AnketColum
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'anket_id', 'colum_id', 'digital_value', 'coefficient_for_rob5', 'is_auto_run4', 'fact_oborot'], 'integer'],
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
        $query = AnketColum::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'anket_id' => $this->anket_id,
            'colum_id' => $this->colum_id,
            'digital_value' => $this->digital_value,
            'coefficient_for_rob5' => $this->coefficient_for_rob5,
            'is_auto_run4' => $this->is_auto_run4,
            'fact_oborot' => $this->fact_oborot,
        ]);

        return $dataProvider;
    }
}
