<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prapa".
 *
 * @property integer $id
 * @property string $date_rec
 * @property string $date_time
 * @property double $num1
 * @property double $num2
 * @property double $chlorinefirst
 * @property double $chlorineennd
 * @property string $staff
 * @property string $comment
 */
class Prapa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prapa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_rec', 'date_time'], 'safe'],
            [['num1', 'num2', 'chlorinefirst', 'chlorineennd'], 'double'],
             [['num1', 'num2', 'chlorinefirst', 'chlorineennd'], 'required'],
            [['staff'], 'string', 'max' => 50],
            [['comment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'date_rec' => 'วันที่',
            'date_time' => 'เวลา',
            'num1' => 'เลขใช้น้ำครั้งที่1',
            'num2' => 'เลขใช้น้ำครั้งที่2',
            'chlorinefirst' => 'ค่าคลอรีนต้นน้ำ',
            'chlorineennd' => 'ค่าคลอรีนปลายน้ำ',
            'staff' => 'ผู้บันทึก',
            'comment' => 'หมายเหตุ',
        ];
    }
}
