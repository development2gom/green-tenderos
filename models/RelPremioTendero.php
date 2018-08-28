<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_premio_tendero".
 *
 * @property string $id_premio_tendero
 * @property string $txt_clave_tienda
 * @property string $id_premio
 * @property string $id_tendero
 * @property string $b_visible
 *
 * @property CatPremios $premio
 * @property CatTenderos $tendero
 * @property CatTiendasRegistradas $txtClaveTienda
 */
class RelPremioTendero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rel_premio_tendero';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_clave_tienda', 'id_premio', 'id_tendero'], 'required'],
            [['id_premio', 'id_tendero', 'b_visible'], 'integer'],
            [['txt_clave_tienda'], 'string', 'max' => 50],
            [['txt_clave_tienda'], 'unique'],
            [['id_premio'], 'exist', 'skipOnError' => true, 'targetClass' => CatPremios::className(), 'targetAttribute' => ['id_premio' => 'id_premio']],
            [['id_tendero'], 'exist', 'skipOnError' => true, 'targetClass' => CatTenderos::className(), 'targetAttribute' => ['id_tendero' => 'id_tendero']],
            [['txt_clave_tienda'], 'exist', 'skipOnError' => true, 'targetClass' => CatTiendasRegistradas::className(), 'targetAttribute' => ['txt_clave_tienda' => 'txt_clave_tienda']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_premio_tendero' => 'Id Premio Tendero',
            'txt_clave_tienda' => 'Txt Clave Tienda',
            'id_premio' => 'Id Premio',
            'id_tendero' => 'Id Tendero',
            'b_visible' => 'B Visible',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPremio()
    {
        return $this->hasOne(CatPremios::className(), ['id_premio' => 'id_premio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTendero()
    {
        return $this->hasOne(CatTenderos::className(), ['id_tendero' => 'id_tendero']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTxtClaveTienda()
    {
        return $this->hasOne(CatTiendasRegistradas::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }
}
