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
 * @property string $gender
 * @property string $phone
 * @property string $email
 * @property string $education
 * @property string $employment
 * @property string $work_experience
 * @property string $skills
 * @property string $achievements
 * @property string $presence_team
 * @property string $role_team
 * @property string $patent
 * @property string $company
 * @property string $password
 *
 *
 */
class RegForm extends Users
{

    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'date_of_birth', 'country', 'city', 'citizenship', 'gender', 'phone', 'email', 'education', 'employment',
                'work_experience', 'skills', 'achievements', 'presence_team', 'role_team', 'patent', 'company','password','passwordConfirm', 'agree'],
                'required', 'message' => 'Поле обязательно для заполнения'],
            ['fio', 'match', 'pattern' => '/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кирилица, пробелы и дефисы'],
            //['email', 'match', 'pattern' => '/^[A-Za-z\s\-]{1,}$/u', 'message' => 'Только латинские буквы'],
            ['email', 'unique', 'message' => 'Этот логин занят'],
            ['email', 'email', 'message' => 'Некорректный Email адрес'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password' , 'message' => 'Пароли должны совподать'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message' => 'Необходимо согласиться'],
            //[['admin'], 'integer'],
            //[['fio', 'login', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'date_of_birth' => 'Дата рождения',
            'country' => 'Старна',
            'city' => 'Город',
            'citizenship' => 'Гражданство',
            'gender' => 'Пол',
            'phone' => 'Телефон',
            'email' => 'Email',
            'education' => 'Образование',
            'employment' => 'Занятость',
            'work_experience' => 'Опыт работы',
            'skills' => 'Навыки',
            'achievements' => 'Достижения',
            'presence_team' => 'Наличие комнады',
            'role_team' => 'Роль в команде',
            'patent' => 'Патент',
            'company' => 'Компания',
            'password' => 'Пароль',
            //'admin' => 'Admin',
            'passwordConfirm' => 'Подтверждение пароля',
            'agree' => 'Даю согласие на обработку данных',
        ];
    }



}

