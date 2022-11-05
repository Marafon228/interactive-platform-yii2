<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "current_idea".
 *
 * @property int $id
 * @property int $participation_experience_count
 * @property int $id_team_captain
 * @property int $selected_task
 * @property string $summary
 *
 * @property Users[] $users
 */
class CurrentIdea extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'current_idea';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['participation_experience_count', 'id_team_captain', 'selected_task', 'summary'], 'required'],
            [['participation_experience_count', 'id_team_captain', 'selected_task'], 'integer'],
            [['summary'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'participation_experience_count' => 'Participation Experience Count',
            'id_team_captain' => 'Id Team Captain',
            'selected_task' => 'Selected Task',
            'summary' => 'Summary',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::class, ['id_current_idea' => 'id']);
    }
}
