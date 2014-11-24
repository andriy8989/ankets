<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Operators;

/**
 * OperatorsSearch represents the model behind the search form about `app\modules\admin\models\Operators`.
 */
class OperatorsSearch extends Operators
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'worker4_id', 'worker5_id', 'oborot_plan', 'oborot_plan1'], 'integer'],
            [['name', 'help_for_4', 'help_for_5'], 'safe'],
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
        $query = Operators::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'worker4_id' => $this->worker4_id,
            'worker5_id' => $this->worker5_id,
            'oborot_plan' => $this->oborot_plan,
            'oborot_plan1' => $this->oborot_plan1,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'help_for_4', $this->help_for_4])
            ->andFilterWhere(['like', 'help_for_5', $this->help_for_5]);

        return $dataProvider;
    }
}
