<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $fio
 * @property string $date_of_birth
 * @property string $country
 * @property string $city
 * @property string $citizenship
 * @property int $gender
 * @property string|null $phone
 * @property string $email
 * @property string|null $education
 * @property int $employment
 * @property int $work_experience
 * @property string $skills
 * @property string $achievements
 * @property int $presence_team
 * @property int $role_team
 * @property string|null $patent
 * @property string|null $company
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $profile_image
 * @property int|null $id_current_idea
 * @property int|null $id_science_idea
 * @property string|null $remember_token
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property AnyIdeasUsers[] $anyIdeasUsers
 * @property CurrentIdea $currentIdea
 * @property ScienceIdea $scienceIdea
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'date_of_birth', 'country', 'city', 'citizenship', 'gender', 'email', 'employment', 'work_experience', 'skills', 'achievements', 'presence_team', 'role_team', 'password'], 'required'],
            [['date_of_birth', 'email_verified_at', 'created_at', 'updated_at'], 'safe'],
            [['gender', 'employment', 'work_experience', 'presence_team', 'role_team', 'id_current_idea', 'id_science_idea'], 'integer'],
            [['education', 'skills', 'achievements'], 'string'],
            [['fio', 'country', 'city', 'citizenship', 'phone', 'email', 'patent', 'company', 'password', 'profile_image'], 'string', 'max' => 255],
            [['remember_token'], 'string', 'max' => 100],
            [['id_current_idea'], 'exist', 'skipOnError' => true, 'targetClass' => CurrentIdea::class, 'targetAttribute' => ['id_current_idea' => 'id']],
            [['id_science_idea'], 'exist', 'skipOnError' => true, 'targetClass' => ScienceIdea::class, 'targetAttribute' => ['id_science_idea' => 'id']],
        ];
    }

    public static function findByUsername($username)
    {
        return self::find()->where(['email' => $username])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'date_of_birth' => 'Date Of Birth',
            'country' => 'Country',
            'city' => 'City',
            'citizenship' => 'Citizenship',
            'gender' => 'Gender',
            'phone' => 'Phone',
            'email' => 'Email',
            'education' => 'Education',
            'employment' => 'Employment',
            'work_experience' => 'Work Experience',
            'skills' => 'Skills',
            'achievements' => 'Achievements',
            'presence_team' => 'Presence Team',
            'role_team' => 'Role Team',
            'patent' => 'Patent',
            'company' => 'Company',
            'email_verified_at' => 'Email Verified At',
            'password' => 'Password',
            /*'profile_image' => 'Profile Image',
            'id_current_idea' => 'Id Current Idea',
            'id_science_idea' => 'Id Science Idea',
            'remember_token' => 'Remember Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',*/
        ];
    }

    /**
     * Gets query for [[AnyIdeasUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnyIdeasUsers()
    {
        return $this->hasMany(AnyIdeasUsers::class, ['id_user' => 'id']);
    }

    /**
     * Gets query for [[CurrentIdea]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrentIdea()
    {
        return $this->hasOne(CurrentIdea::class, ['id' => 'id_current_idea']);
    }

    /**
     * Gets query for [[ScienceIdea]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScienceIdea()
    {
        return $this->hasOne(ScienceIdea::class, ['id' => 'id_science_idea']);
    }
}
