<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wrk_concursos_resultados".
 *
 * @property int $id_concurso_resultado
 * @property string $uddi
 * @property string $txt_region
 * @property string $txt_zona
 * @property string $txt_bodega
 * @property string $txt_descripcion
 * @property string $txt_nud
 * @property string $txt_nombre
 * @property double $num_total
 * @property string $txt_folio
 * @property string $txt_leyenda
 * @property string $txt_sorteo
 */
class WrkConcursosResultados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrk_concursos_resultados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_descripcion', 'txt_leyenda'], 'string'],
            [['num_total'], 'number'],
            [['uddi', 'txt_region', 'txt_zona', 'txt_bodega', 'txt_nud', 'txt_nombre', 'txt_folio', 'txt_sorteo'], 'string', 'max' => 100],
            [['uddi'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_concurso_resultado' => 'Id Concurso Resultado',
            'uddi' => 'Uddi',
            'txt_region' => 'Txt Region',
            'txt_zona' => 'Txt Zona',
            'txt_bodega' => 'Txt Bodega',
            'txt_descripcion' => 'Txt Descripcion',
            'txt_nud' => 'Txt Nud',
            'txt_nombre' => 'Txt Nombre',
            'num_total' => 'Num Total',
            'txt_folio' => 'Txt Folio',
            'txt_leyenda' => 'Txt Leyenda',
            'txt_sorteo' => 'Txt Sorteo',
        ];
    }
}
