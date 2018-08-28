<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_tiendas_registradas".
 *
 * @property int $id_tienda
 * @property string $txt_clave_tienda
 * @property int $b_habilitado
 *
 * @property CatHistorialCompras $catHistorialCompras
 * @property CatTenderos $catTenderos
 * @property RelPremioTendero $relPremioTendero
 */
class CatTiendasRegistradas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_tiendas_registradas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tienda', 'txt_clave_tienda'], 'required'],
            [['id_tienda', 'b_habilitado'], 'integer'],
            [['txt_clave_tienda'], 'string', 'max' => 50],
            [['txt_clave_tienda'], 'unique'],
            [['id_tienda'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tienda' => 'Id Tienda',
            'txt_clave_tienda' => 'Txt Clave Tienda',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatHistorialCompras()
    {
        return $this->hasOne(CatHistorialCompras::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatTenderos()
    {
        return $this->hasOne(CatTenderos::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelPremioTendero()
    {
        return $this->hasOne(RelPremioTendero::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }
}
