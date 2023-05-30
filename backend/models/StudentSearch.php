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
class studentSearch extends student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aid'], 'integer'],
            [['username', 'password'], 'safe'],
            [['registered'],'integer']
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
        $query = student::find();

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
            'aid' => $this->aid,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'registered', $this->registered]);

        return $dataProvider;
    }
}
