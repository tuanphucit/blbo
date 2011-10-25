<?php

/**
 * This is the model class for table "bus".
 *
 * The followings are the available columns in table 'bus':
 * @property integer $id
 * @property string $code
 * @property string $black_box_id
 * @property string $type
 * @property string $license_date
 * @property string $warranty_date
 * @property integer $sum_of_km
 * @property integer $sim_number
 * @property string $driver_code
 * @property integer $status
 * @property string $images
 */
class Bus extends CActiveRecord
{
	public $cLat, $cLong;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Bus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code', 'required'),
			array('sum_of_km, sim_number, status', 'numerical', 'integerOnly'=>true),
			array('code, black_box_id, type, driver_code', 'length', 'max'=>30),
			array('images', 'length', 'max'=>255),
			array('license_date, warranty_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, black_box_id, type, license_date, warranty_date, sum_of_km, sim_number, driver_code, status, images', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'black_box_id' => 'Black Box',
			'type' => 'Type',
			'license_date' => 'License Date',
			'warranty_date' => 'Warranty Date',
			'sum_of_km' => 'Sum Of Km',
			'sim_number' => 'Sim Number',
			'driver_code' => 'Driver Code',
			'status' => 'Status',
			'images' => 'Images',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('black_box_id',$this->black_box_id,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('license_date',$this->license_date,true);
		$criteria->compare('warranty_date',$this->warranty_date,true);
		$criteria->compare('sum_of_km',$this->sum_of_km);
		$criteria->compare('sim_number',$this->sim_number);
		$criteria->compare('driver_code',$this->driver_code,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('images',$this->images,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getCLocation()
	{
		$data = Data::model()->findByAttributes(array('bus_code'=>$this->code),array('order'=>'date_updated DESC, time_updated DESC'));
		if ($data == null)
			return;
		$this->cLat  = $data->lat;
		$this->cLong = $data->long;
	}
}