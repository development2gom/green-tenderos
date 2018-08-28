<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_tenderos".
 *
 * @property string $id_tendero
 * @property string $txt_clave_tienda
 * @property string $txt_nombre
 * @property string $txt_apellido_paterno
 * @property string $txt_apellido_materno
 * @property string $txt_telefono_movil
 * @property string $txt_telefono_casa
 * @property string $txt_correo
 * @property string $txt_password
 * @property string $num_puntos
 * @property string $b_habilitado
 *
 * @property CatTiendasRegistradas $txtClaveTienda
 * @property RelPremioTendero[] $relPremioTenderos
 */
class CatTenderos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_tenderos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_clave_tienda', 'txt_nombre', 'txt_apellido_paterno', 'txt_apellido_materno', 'txt_telefono_movil', 'txt_password', 'num_puntos'], 'required'],
            [['num_puntos', 'b_habilitado'], 'integer'],
            [['txt_clave_tienda', 'txt_nombre', 'txt_apellido_paterno', 'txt_apellido_materno', 'txt_telefono_movil', 'txt_telefono_casa', 'txt_correo', 'txt_password'], 'string', 'max' => 50],
            [['txt_clave_tienda'], 'unique'],
            [['txt_clave_tienda'], 'exist', 'skipOnError' => true, 'targetClass' => CatTiendasRegistradas::className(), 'targetAttribute' => ['txt_clave_tienda' => 'txt_clave_tienda']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tendero' => 'Id Tendero',
            'txt_clave_tienda' => 'Txt Clave Tienda',
            'txt_nombre' => 'Txt Nombre',
            'txt_apellido_paterno' => 'Txt Apellido Paterno',
            'txt_apellido_materno' => 'Txt Apellido Materno',
            'txt_telefono_movil' => 'Txt Telefono Movil',
            'txt_telefono_casa' => 'Txt Telefono Casa',
            'txt_correo' => 'Txt Correo',
            'txt_password' => 'Txt Password',
            'num_puntos' => 'Num Puntos',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTxtClaveTienda()
    {
        return $this->hasOne(CatTiendasRegistradas::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelPremioTenderos()
    {
        return $this->hasMany(RelPremioTendero::className(), ['id_tendero' => 'id_tendero']);
    }

    public function getPuntos()
    {
        
    }
}
