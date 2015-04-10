<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prapa;

/**
 * PrapaSearch represents the model behind the search form about `app\models\Prapa`.
 */
class PrapaSearch extends Prapa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['date_rec', 'date_time', 'staff', 'comment'], 'safe'],
            [['num1', 'num2', 'chlorinefirst', 'chlorineennd'], 'number'],
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
        $query = Prapa::find();

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
            'date_time' => $this->date_time,
            'num1' => $this->num1,
            'num2' => $this->num2,
            'chlorinefirst' => $this->chlorinefirst,
            'chlorineennd' => $this->chlorineennd,
        ]);

        $query->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
