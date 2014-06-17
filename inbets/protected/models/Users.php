<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $nikname
 * @property string $phone
 * @property string $password
 * @property integer $count_bet
 * @property integer $win_bet
 * @property integer $loose_bet
 * @property integer $return_bet
 * @property integer $rate
 * @property integer $balance
 *
 * The followings are the available model relations:
 * @property Bettings[] $bettings
 * @property Payments[] $payments
 * @property Transaction[] $transactions
 * @property Transaction[] $transactions1
 */
class Users extends CActiveRecord
{
        public $verify_code;
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nikname, phone, password', 'required'),
			array('phone', 'numerical', 'integerOnly'=>true),
			array('nikname, password', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nikname, phone, password, count_bet, win_bet, loose_bet, return_bet, rate, balance', 'safe', 'on'=>'search'),
		);
	}
        
        protected function beforeSave()
        {
            if(parent::beforeSave())
            {
                    // Хешировать пароль
                    $hash_pass = crypt($this->password);
                    $this->password = $hash_pass;
                return true;
            }
            return false;
         } 
        

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bettings' => array(self::HAS_MANY, 'Bettings', 'user_id'),
			'payments' => array(self::HAS_MANY, 'Payments', 'user_id'),
			'transactions' => array(self::HAS_MANY, 'Transaction', 'from_user_id'),
			'transactions1' => array(self::HAS_MANY, 'Transaction', 'to_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nikname' => 'Nikname',
			'phone' => 'Phone',
			'password' => 'Password',
			'count_bet' => 'Count Bet',
			'win_bet' => 'Win Bet',
			'loose_bet' => 'Loose Bet',
			'return_bet' => 'Return Bet',
			'rate' => 'Rate',
			'balance' => 'Balance',
                        'verify_code' => 'Код',
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
		$criteria->compare('nikname',$this->nikname,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('count_bet',$this->count_bet);
		$criteria->compare('win_bet',$this->win_bet);
		$criteria->compare('loose_bet',$this->loose_bet);
		$criteria->compare('return_bet',$this->return_bet);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('balance',$this->balance);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function verivicationPhone($phone, $verify_code) {
            $phone = "+" . $phone;
            
            $client = new SoapClient ('http://turbosms.in.ua/api/wsdl.html'); 
            $auth = Array (
                'login' => 'inbets',
                'password' => 'gfhjkm'
            );
            // Авторизируемся на сервере
            $result = $client->Auth ($auth);

            // Текст сообщения ОБЯЗАТЕЛЬНО отправлять в кодировке UTF-8
            $text = iconv ('windows-1251', 'utf-8', "Ваш код:" . $verify_code);

            // Данные для отправки
            $sms = Array (
                'sender' => 'InBets',
                'destination' => $phone,
                'text' => $text
            );
            $result = true; //$client->SendSMS ($sms); 
            
            return $result;
        }

        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}