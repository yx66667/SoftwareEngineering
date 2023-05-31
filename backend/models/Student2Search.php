<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\teacher;

/**
 * Team：Novas
 * Author：刘嗣旸
 * Date：2023/2/9
 * Statement：后台用户管理
 */

/**
 * UserManageSearch represents the model behind the search form of `backend\models\UserManage`.
 */
class student2Search extends student2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_name', 'choice_score','compo_score','trans_score','total_score'], 'safe'],
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
        $query = student2::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10, // 设置每页显示10条记录
            ],
        ]);
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'student_name' => $this->student_name,
        ]);

        $query->andFilterWhere(['like', 'choice_score', $this->choice_score])
            ->andFilterWhere(['like', 'compo_score', $this->compo_score])
            ->andFilterWhere(['like', 'trans_score', $this->trans_score])
            ->andFilterWhere(['like', 'total_score', $this->total_score]);

        return $dataProvider;
    }
}
