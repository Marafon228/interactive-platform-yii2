<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CurrentIdea;

/**
 * CurrentIdeaSearch represents the model behind the search form of `app\models\CurrentIdea`.
 */
class CurrentIdeaSearch extends CurrentIdea
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'participation_experience_count', 'id_team_captain', 'selected_task'], 'integer'],
            [['summary'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = CurrentIdea::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'participation_experience_count' => $this->participation_experience_count,
            'id_team_captain' => $this->id_team_captain,
            'selected_task' => $this->selected_task,
        ]);

        $query->andFilterWhere(['like', 'summary', $this->summary]);

        return $dataProvider;
    }
}
