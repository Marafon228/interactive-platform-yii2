<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal_access_tokens".
 *
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string|null $abilities
 * @property string|null $last_used_at
 * @property string|null $expires_at
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class PersonalAccessTokens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal_access_tokens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tokenable_type', 'tokenable_id', 'name', 'token'], 'required'],
            [['tokenable_id'], 'integer'],
            [['abilities'], 'string'],
            [['last_used_at', 'expires_at', 'created_at', 'updated_at'], 'safe'],
            [['tokenable_type', 'name'], 'string', 'max' => 255],
            [['token'], 'string', 'max' => 64],
            [['token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tokenable_type' => 'Tokenable Type',
            'tokenable_id' => 'Tokenable ID',
            'name' => 'Name',
            'token' => 'Token',
            'abilities' => 'Abilities',
            'last_used_at' => 'Last Used At',
            'expires_at' => 'Expires At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
