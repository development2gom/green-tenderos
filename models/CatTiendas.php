<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "cat_tiendas".
 *
 * @property string $txt_clave_tienda
 * @property string $txt_clave_bodega
 * @property string $txt_nombre
 * @property string $b_habilitado
 *
 * @property CatBodegas $txtClaveBodega
 * @property WrkHistorial[] $wrkHistorials
 * @property WrkPuntuajeActual[] $wrkPuntuajeActuals
 */
class CatTiendas extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $auth_key;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_tiendas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_clave_tienda', 'txt_clave_bodega'], 'required'],
            [['b_habilitado'], 'integer'],
            [['txt_clave_tienda', 'txt_clave_bodega', 'txt_nombre'], 'string', 'max' => 50],
            [['txt_clave_tienda'], 'unique'],
            [['txt_clave_bodega'], 'exist', 'skipOnError' => true, 'targetClass' => CatBodegas::className(), 'targetAttribute' => ['txt_clave_bodega' => 'txt_clave_bodega']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'txt_clave_tienda' => 'Clave Tienda',
            'txt_clave_bodega' => 'Clave Bodega',
            'txt_nombre' => 'Nombre',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTxtClaveBodega()
    {
        return $this->hasOne(CatBodegas::className(), ['txt_clave_bodega' => 'txt_clave_bodega']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWrkHistorials()
    {
        return $this->hasMany(WrkHistorial::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWrkPuntuajeActuals()
    {
        return $this->hasOne(WrkPuntuajeActual::className(), ['txt_clave_tienda' => 'txt_clave_tienda']);
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['uddi' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->txt_clave_tienda;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validarExistaTienda($clave_tienda, $clave_bodega){
        $tienda = CatTiendas::find()->where(['txt_clave_tienda'=>$clave_tienda, 'txt_clave_bodega'=>$clave_bodega])->one();
        if($tienda){
            return $tienda;
        }
        return false;
    }
}
