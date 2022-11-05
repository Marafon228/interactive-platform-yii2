<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "failed_jobs".
 *
 * @property int $id
 * @property string $uuid
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property string $failed_at
 */
class FailedJobs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'failed_jobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uuid', 'connection', 'queue', 'payload', 'exception'], 'required'],
            [['connection', 'queue', 'payload', 'exception'], 'string'],
            [['failed_at'], 'safe'],
            [['uuid'], 'string', 'max' => 255],
            [['uuid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uuid' => 'Uuid',
            'connection' => 'Connection',
            'queue' => 'Queue',
            'payload' => 'Payload',
            'exception' => 'Exception',
            'failed_at' => 'Failed At',
        ];
    }
}
