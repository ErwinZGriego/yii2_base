<?php

namespace common\database\base;

use Yii;

/**
 * This is the model class for table "ganado".
 *
 * @property int $id
 * @property string $raza
 * @property float $peso_ingreso
 * @property float $peso_egreso
 * @property string $alimento_tipo
 * @property float $alimento_cantidad
 * @property string $f_ingreso
 * @property string $f_egreso
 */
class GanadoBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ganado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peso_ingreso', 'peso_egreso', 'alimento_cantidad'], 'number'],
            [['f_ingreso', 'f_egreso'], 'safe'],
            [['raza', 'alimento_tipo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'raza' => 'Raza',
            'peso_ingreso' => 'Peso Ingreso',
            'peso_egreso' => 'Peso Egreso',
            'alimento_tipo' => 'Alimento Tipo',
            'alimento_cantidad' => 'Alimento Cantidad',
            'f_ingreso' => 'F Ingreso',
            'f_egreso' => 'F Egreso',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\database\queries\GanadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\database\queries\GanadoQuery(get_called_class());
    }
}
