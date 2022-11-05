<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "any_ideas_users".
 *
 * @property int $id
 * @property int $id_any_idea
 * @property int $id_user
 *
 * @property AnyIdea $anyIdea
 * @property Users $user
 */
class AnyIdeasUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'any_ideas_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_any_idea', 'id_user'], 'required'],
            [['id_any_idea', 'id_user'], 'integer'],
            [['id_any_idea'], 'exist', 'skipOnError' => true, 'targetClass' => AnyIdea::class, 'targetAttribute' => ['id_any_idea' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_any_idea' => 'Id Any Idea',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[AnyIdea]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnyIdea()
    {
        return $this->hasOne(AnyIdea::class, ['id' => 'id_any_idea']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::class, ['id' => 'id_user']);
    }
}
