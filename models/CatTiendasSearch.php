<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CatTiendas;

/**
 * CatTiendasSearch represents the model behind the search form of `app\models\CatTiendas`.
 */
class CatTiendasSearch extends CatTiendas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_clave_tienda', 'txt_clave_bodega', 'txt_nombre'], 'safe'],
            [['b_habilitado'], 'integer'],
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
        $query = CatTiendas::find();

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
            'b_habilitado' => $this->b_habilitado,
        ]);

        $query->andFilterWhere(['like', 'txt_clave_tienda', $this->txt_clave_tienda])
            ->andFilterWhere(['like', 'txt_clave_bodega', $this->txt_clave_bodega])
            ->andFilterWhere(['like', 'txt_nombre', $this->txt_nombre]);

        return $dataProvider;
    }
}
