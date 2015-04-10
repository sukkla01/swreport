<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wastewater".
 *
 * @property string $date_rec
 * @property string $time_rec
 * @property double $too1
 * @property double $too2
 * @property double $takon
 * @property string $pump
 * @property double $chlorine
 * @property string $pump_chlorine
 * @property double $count_chlorine
 * @property double $ph
 * @property double $do
 * @property string $staff
 * @property string $comment
 */
class Wastewater extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wastewater';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_rec', 'time_rec'], 'safe'],
            [['too1', 'too2', 'takon', 'chlorine', 'count_chlorine', 'ph', 'do'], 'double'],
            [['too1', 'too2', 'takon', 'chlorine', 'count_chlorine', 'ph', 'do'], 'required'],
            [['pump', 'pump_chlorine'], 'string'],
            [['staff', 'comment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'date_rec' => 'วันที่',
            'time_rec' => 'เวลา',
            'too1' => 'หน่วยไฟฟ้าตู้ที่ 1',
            'too2' => 'หน่วยไฟฟ้าตู้ที่ 2',
            'takon' => 'ปริมาณตะกอน',
            'pump' => 'สูบตะกอน',
            'chlorine' => 'ค่าคลอรีน',
            'pump_chlorine' => 'เติมคลอรีน',
            'count_chlorine' => 'ปริมาณคลอรีน',
            'ph' => 'ค่า PH',
            'do' => 'ค่า DO',
            'staff' => 'ผู้บันทึก',
            'comment' => 'รายละเอยีด',
        ];
    }
}
