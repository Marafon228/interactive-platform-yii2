<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "science_idea".
 *
 * @property int $id
 * @property string $inn
 * @property string $address
 * @property int $nomination
 * @property int $direction
 * @property string|null $revenue
 * @property string $project_readiness_stage
 * @property string $experience_participation
 * @property string $name
 * @property string|null $link_project
 * @property string $presentation
 * @property string $business_plan
 * @property string $copies_security_documents
 * @property string|null $confirmation_project_development
 * @property string $media_file
 *
 * @property Users[] $users
 */
class ScienceIdea extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'science_idea';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inn', 'address', 'nomination', 'direction', 'project_readiness_stage', 'experience_participation', 'name', 'presentation', 'business_plan', 'copies_security_documents', 'media_file'], 'required'],
            [['nomination', 'direction'], 'integer'],
            [['inn', 'address', 'revenue', 'project_readiness_stage', 'experience_participation', 'name', 'link_project', 'presentation', 'business_plan', 'copies_security_documents', 'confirmation_project_development', 'media_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inn' => 'Inn',
            'address' => 'Address',
            'nomination' => 'Nomination',
            'direction' => 'Direction',
            'revenue' => 'Revenue',
            'project_readiness_stage' => 'Project Readiness Stage',
            'experience_participation' => 'Experience Participation',
            'name' => 'Name',
            'link_project' => 'Link Project',
            'presentation' => 'Presentation',
            'business_plan' => 'Business Plan',
            'copies_security_documents' => 'Copies Security Documents',
            'confirmation_project_development' => 'Confirmation Project Development',
            'media_file' => 'Media File',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::class, ['id_science_idea' => 'id']);
    }
}
