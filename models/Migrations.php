<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "migrations".
 *
 * @property int $id
 * @property string $migration
 * @property int $batch
 */
class Migrations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'migrations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['migration', 'batch'], 'required'],
            [['batch'], 'integer'],
            [['migration'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'migration' => 'Migration',
            'batch' => 'Batch',
        ];
    }
}
