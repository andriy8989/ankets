<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\AnketTypeFields;

/**
 * AnketTypeFieldsSearch represents the model behind the search form about `app\modules\admin\models\AnketTypeFields`.
 */
class AnketTypeFieldsSearch extends AnketTypeFields
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'anket_type_id','rob_visible'], 'integer'],
            [['field_name', 'help_field'], 'safe'],
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
        $query = AnketTypeFields::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'anket_type_id' => $this->anket_type_id,
        ]);

        $query->andFilterWhere(['like', 'field_name', $this->field_name])
            ->andFilterWhere(['like', 'help_field', $this->help_field])
            ->andFilterWhere(['like', 'rob_visible', $this->rob_visible]);

        return $dataProvider;
    }
}
