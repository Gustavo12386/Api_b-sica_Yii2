<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $cabeça
 * @property string $corpo
 * @property string $status
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'cabeça', 'corpo', 'status'], 'required'],
            [['titulo', 'cabeça', 'corpo', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'cabeça' => 'Cabeça',
            'corpo' => 'Corpo',
            'status' => 'Status',
        ];
    }

    public function fields()
    {
        return [
            'id',
            'title' => 'titulo',
            'status' => function (Noticia $model) {
               return ($model->status == '1' ? 'Ativo' : 'Inativo');
            }
        ];
    }
}
