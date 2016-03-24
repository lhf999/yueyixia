<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "liuyan".
 *
 * @property integer $id
 * @property string $lname
 * @property string $content
 * @property string $ltime
 */
class Liuyan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'liuyan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['ltime'], 'safe'],
            [['lname'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lname' => 'Lname',
            'content' => 'Content',
            'ltime' => 'Ltime',
        ];
    }
}
