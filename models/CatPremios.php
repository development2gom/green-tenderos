<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_premios".
 *
 * @property string $id_premio
 * @property string $txt_nombre
 * @property string $num_puntuacion_min
 * @property string $num_puntuacion_premio
 * @property string $b_habilitado
 *
 * @property RelPremioTendero[] $relPremioTenderos
 */
class CatPremios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_premios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre'], 'required'],
            [['num_puntuacion_min', 'num_puntuacion_premio', 'b_habilitado'], 'integer'],
            [['txt_nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_premio' => 'Id Premio',
            'txt_nombre' => 'Txt Nombre',
            'num_puntuacion_min' => 'Num Puntuacion Min',
            'num_puntuacion_premio' => 'Num Puntuacion Premio',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelPremioTenderos()
    {
        return $this->hasMany(RelPremioTendero::className(), ['id_premio' => 'id_premio']);
    }
}
