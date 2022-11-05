<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScienceIdea;

/**
 * ScienceIdeaSearch represents the model behind the search form of `app\models\ScienceIdea`.
 */
class ScienceIdeaSearch extends ScienceIdea
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nomination', 'direction'], 'integer'],
            [['inn', 'address', 'revenue', 'project_readiness_stage', 'experience_participation', 'name', 'link_project', 'presentation', 'business_plan', 'copies_security_documents', 'confirmation_project_development', 'media_file'], 'safe'],
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
        $query = ScienceIdea::find();

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
            'nomination' => $this->nomination,
            'direction' => $this->direction,
        ]);

        $query->andFilterWhere(['like', 'inn', $this->inn])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'revenue', $this->revenue])
            ->andFilterWhere(['like', 'project_readiness_stage', $this->project_readiness_stage])
            ->andFilterWhere(['like', 'experience_participation', $this->experience_participation])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'link_project', $this->link_project])
            ->andFilterWhere(['like', 'presentation', $this->presentation])
            ->andFilterWhere(['like', 'business_plan', $this->business_plan])
            ->andFilterWhere(['like', 'copies_security_documents', $this->copies_security_documents])
            ->andFilterWhere(['like', 'confirmation_project_development', $this->confirmation_project_development])
            ->andFilterWhere(['like', 'media_file', $this->media_file]);

        return $dataProvider;
    }
}
