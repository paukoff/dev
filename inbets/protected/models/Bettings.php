<?php

/**
 * This is the model class for table "bettings".
 *
 * The followings are the available columns in table 'bettings':
 * @property integer $id
 * @property integer $user_id
 * @property integer $sport
 * @property string $chemp_name
 * @property string $coeff
 * @property integer $class_bet
 * @property string $date
 * @property string $descript
 *
 * The followings are the available model relations:
 * @property ClassBet $classBet
 * @property Users $user
 * @property Sports $sport0
 * @property Transaction[] $transactions
 */
class Bettings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bettings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sport, chemp_name, coeff, class_bet, date, descript', 'required'),
			array('user_id, sport, class_bet', 'numerical', 'integerOnly'=>true),
			array('chemp_name', 'length', 'max'=>255),
			array('coeff', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, sport, chemp_name, coeff, class_bet, date, descript', 'safe', 'on'=>'search'),
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
			'classBet' => array(self::BELONGS_TO, 'ClassBet', 'class_bet'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'sport0' => array(self::BELONGS_TO, 'Sports', 'sport'),
			'transactions' => array(self::HAS_MANY, 'Transaction', 'destination'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'sport' => 'Sport',
                        'chemp_name' => 'Chemp Name',
                        'team1' => 'Team1',
                        'team2' => 'Team2',
                        'in_bets' => 'In_Bets',
			'coeff' => 'Coeff',
			'class_bet' => 'Class Bet',
			'date' => 'Date',
			'descript' => 'Descript',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('sport',$this->sport);
		$criteria->compare('chemp_name',$this->chemp_name,true);
		$criteria->compare('coeff',$this->coeff,true);
		$criteria->compare('class_bet',$this->class_bet);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('descript',$this->descript,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bettings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
