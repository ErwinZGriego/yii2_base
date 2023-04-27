<?php

namespace common\database\queries;

/**
 * This is the ActiveQuery class for [[\common\database\base\GanadoBase]].
 *
 * @see \common\database\base\GanadoBase
 */
class GanadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\database\base\GanadoBase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\database\base\GanadoBase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
