<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wastewater;

/**
 * WastewaterSearch represents the model behind the search form about `app\models\Wastewater`.
 */
class WastewaterSearch extends Wastewater
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['date_rec', 'time_rec', 'pump', 'pump_chlorine', 'staff', 'comment'], 'safe'],
            [['too1', 'too2', 'takon', 'chlorine', 'count_chlorine', 'ph', 'do'], 'number'],
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
        $query = Wastewater::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date_rec' => $this->date_rec,
            'time_rec' => $this->time_rec,
            'too1' => $this->too1,
            'too2' => $this->too2,
            'takon' => $this->takon,
            'chlorine' => $this->chlorine,
            'count_chlorine' => $this->count_chlorine,
            'ph' => $this->ph,
            'do' => $this->do,
        ]);

        $query->andFilterWhere(['like', 'pump', $this->pump])
            ->andFilterWhere(['like', 'pump_chlorine', $this->pump_chlorine])
            ->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
