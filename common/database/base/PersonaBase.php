<?php

namespace common\database\base;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $f_nacimiento
 * @property string $nickname
 * @property string $foto_code
 * @property string $deleted
 */
class PersonaBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['f_nacimiento'], 'safe'],
            [['foto_code'], 'required'],
            [['foto_code', 'deleted'], 'string'],
            [['nombre', 'apellido', 'nickname'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'f_nacimiento' => 'F Nacimiento',
            'nickname' => 'Nickname',
            'foto_code' => 'Foto Code',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\database\queries\PersonaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\database\queries\PersonaQuery(get_called_class());
    }
}
