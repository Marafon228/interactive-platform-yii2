<?php

namespace app\models;

use Yii;


class ProblemCreateForm extends Problem
{
    /**
     * This is the model class for table "problem".
     *
     * @property int $id
     * @property string $name
     * @property string $description
     * @property string $timestamp
     * @property int $idUser
     * @property int $idCategory
     * @property string $status
     * @property string|null $photoBefore
     * @property string|null $photoAfter
     *
     * @property Category $idCategory
     * @property User $idUser0
     */


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description','idCategory','photoBefore'], 'required'],
            [['description', 'status'], 'string'],
            [['timestamp'], 'safe'],
            [['idUser', 'idCategory'], 'integer'],
            ['photoBefore', 'file','extensions'=> 'png, jpg, jpeg, bmp', 'maxSize' => 10*1024*1024, 'message' => 'Большой файл'],
            [['name', 'photoBefore', 'photoAfter'], 'string', 'max' => 255],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'id']],
        ];
    }


}