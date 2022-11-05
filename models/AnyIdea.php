<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "any_idea".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $link_project
 * @property string|null $presentation
 * @property string $participation_experience
 *
 * @property AnyIdeasUsers[] $anyIdeasUsers
 */
class AnyIdea extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'any_idea';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'participation_experience'], 'required'],
            [['description'], 'string'],
            [['name', 'link_project', 'presentation', 'participation_experience'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'link_project' => 'Link Project',
            'presentation' => 'Presentation',
            'participation_experience' => 'Participation Experience',
        ];
    }

    /**
     * Gets query for [[AnyIdeasUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnyIdeasUsers()
    {
        return $this->hasMany(AnyIdeasUsers::class, ['id_any_idea' => 'id']);
    }
}
