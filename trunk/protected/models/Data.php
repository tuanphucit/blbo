<?php

/**
 * This is the model class for table "data".
 *
 * The followings are the available columns in table 'data':
 * @property integer $id
 * @property string $bus_code
 * @property double $speed
 * @property string $lat
 * @property string $long
 * @property integer $cooler_on
 * @property integer $cooler_off
 * @property integer $engine_on
 * @property integer $engine_off
 * @property integer $cooler_temp
 * @property integer $km
 * @property double $gas
 * @property integer $door_open
 * @property integer $door_close
 * @property string $date_updated
 * @property string $time_updated
 */
class Data extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Data the static model class
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
		return 'data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bus_code, lat, long, date_updated, time_updated', 'required'),
			array('cooler_on, cooler_off, engine_on, engine_off, cooler_temp, km, door_open, door_close', 'numerical', 'integerOnly'=>true),
			array('speed, gas', 'numerical'),
			array('bus_code', 'length', 'max'=>30),
			array('lat, long', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bus_code, speed, lat, long, cooler_on, cooler_off, engine_on, engine_off, cooler_temp, km, gas, door_open, door_close, date_updated, time_updated', 'safe', 'on'=>'search'),
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
			'bus_code' => 'Bus Code',
			'speed' => 'Speed',
			'lat' => 'Lat',
			'long' => 'Long',
			'cooler_on' => 'Cooler On',
			'cooler_off' => 'Cooler Off',
			'engine_on' => 'Engine On',
			'engine_off' => 'Engine Off',
			'cooler_temp' => 'Cooler Temp',
			'km' => 'Km',
			'gas' => 'Gas',
			'door_open' => 'Door Open',
			'door_close' => 'Door Close',
			'date_updated' => 'Date Updated',
			'time_updated' => 'Time Updated',
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
		$criteria->compare('bus_code',$this->bus_code,true);
		$criteria->compare('speed',$this->speed);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('long',$this->long,true);
		$criteria->compare('cooler_on',$this->cooler_on);
		$criteria->compare('cooler_off',$this->cooler_off);
		$criteria->compare('engine_on',$this->engine_on);
		$criteria->compare('engine_off',$this->engine_off);
		$criteria->compare('cooler_temp',$this->cooler_temp);
		$criteria->compare('km',$this->km);
		$criteria->compare('gas',$this->gas);
		$criteria->compare('door_open',$this->door_open);
		$criteria->compare('door_close',$this->door_close);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('time_updated',$this->time_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function insertData($input){
		$arr = explode(',',$input);
		if($arr[4]==''&&$arr[6]==''){
			echo "Connect GPRS failed";
           }
        else{
			$DD1 = substr($arr[4],0,2);
			$MM1 = substr($arr[4],2);
			$DD2 = substr($arr[6],0,3);
			$MM2 = substr($arr[6],3);
			
			$lat = $DD1 + $MM1/60;
			$long = $DD2 + $MM2/60;
			if($arr[5] == 'S') $lat = 0 - $lat;
			if($arr[7] == 'W') $long = 0 - $long;
			//Round
			$code = $arr[0]; 
			// add new code bus
			$bus = Bus::model()->findByAttributes(array('code'=>$code));
			if ($bus == null){
				$bus = new Bus();
				$bus->code = $code;
				$bus->save();
			}
			$lat  = round($lat,7);
			$long = round($long,7);
			// add to data
			$data = new Data();
			$data->bus_code = $bus->code;
			$data->lat = $lat;
			$data->long = $long;
			$data->date_updated = new CDbExpression('NOW()');
			$data->time_updated = new CDbExpression('NOW()');
			if (!$data->save()){
				die('fuck');
			};
		}
	}
}