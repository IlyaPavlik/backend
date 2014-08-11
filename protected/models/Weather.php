<?php

/**
 * This is the model class for table "weather".
 *
 * The followings are the available columns in table 'weather':
 * @property integer $id
 * @property string $date_forecast
 * @property integer $temp
 * @property integer $humidity
 * @property integer $pressure
 * @property integer $wind_speed
 * @property integer $wind_deg
 * @property integer $precipitation_id
 * @property integer $station_id
 *
 * The followings are the available model relations:
 * @property Weatherstation $station
 * @property Precipitation $precipitation
 */
class Weather extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'weather';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_forecast, temp, humidity, pressure, wind_speed, wind_deg, precipitation_id, station_id', 'required'),
			array('temp, humidity, pressure, wind_speed, wind_deg, precipitation_id, station_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date_forecast, temp, humidity, pressure, wind_speed, wind_deg, precipitation_id, station_id', 'safe', 'on'=>'search'),
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
			'station' => array(self::BELONGS_TO, 'Weatherstation', 'station_id'),
			'precipitation' => array(self::BELONGS_TO, 'Precipitation', 'precipitation_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date_forecast' => 'Date Forecast',
			'temp' => 'Temp',
			'humidity' => 'Humidity',
			'pressure' => 'Pressure',
			'wind_speed' => 'Wind Speed',
			'wind_deg' => 'Wind Deg',
			'precipitation_id' => 'Precipitation',
			'station_id' => 'Station',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_forecast',$this->date_forecast,true);
		$criteria->compare('temp',$this->temp);
		$criteria->compare('humidity',$this->humidity);
		$criteria->compare('pressure',$this->pressure);
		$criteria->compare('wind_speed',$this->wind_speed);
		$criteria->compare('wind_deg',$this->wind_deg);
		$criteria->compare('precipitation_id',$this->precipitation_id);
		$criteria->compare('station_id',$this->station_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Weather the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}