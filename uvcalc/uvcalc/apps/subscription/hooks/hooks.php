<?php

/**
 * This class contains hooks for the Subscription plugin.
 */
class Subscription_Hooks{
	/**
	 * @brief
	 * @param 
	 * @return 
	 */
	public static function login($parameters) {

		$subscription = new User_Subscription($user_id, $parameters, $timestamp);
		
		if($subscription->get_is_time_based()==1&&$subscription->get_datetime_expire()>$timestamp){
			//Can redirect happen here?
		}

		return true;
	}

    public static function clicked_event($parameters) {
	
		$timestamp = new DateTime();
		
		$user_id = \OCP\User::getUser();

        /*system('touch /tmp/clicked_event.txt');

        file_put_contents("/tmp/clicked_event.txt", ($parameters."\n"), FILE_APPEND);*/
		
		// TODO: $parameters should be an array, not a string
		
		$subscription = new User_Subscription($user_id, $parameters, $timestamp);
		
		if($subscription->get_is_credit_based()==1 && $subscription->get_number_credits() > 0){
			$subscription->set_number_credits($subscription->get_number_credits()-1);	
			$subscription->update_subscription_instance();
		}
		if($subscription->get_is_time_based()==1&&$subscription->get_datetime_expire()>$timestamp){
			//Can redirect happen here?
		}
	
        return true;
    }

}

class User_Subscription {

	private $instance_id;
	private $subscription_id;
    private $number_credits;
	private $is_credit_based;
	private $datetime_initial;
    private $datetime_expire;
	private $datetime_now;	
	private $is_time_based;
    private $features_available=array();
	private $features_unavailable=array();
	private $expired;
	public $coupons=array();

    public function __construct($user_id, $app_name, $timestamp) {
	
		$xml = simplexml_load_file('/etc/subscription/subscription.xml');
		$instances = $xml->instances;
		$this->coupons = $xml->coupons;
	
		$this->expired = 1;
		$this->is_credit_based = 0;
		
		$this->set_datetime_initial($timestamp);
		$this->set_datetime_now($timestamp);
		
		/*
		oc_subscription_instances
		
		| id                | bigint(20)   | NO   | PRI | NULL    | auto_increment |
		| subscription_id   | int(11)      | NO   |     | NULL    |                |
		| charge_id         | int(11)      | NO   |     | NULL    |                |
		| transaction_id    | varchar(255) | YES  |     | NULL    |                |
		| created           | datetime     | YES  |     | NULL    |                |
		| is_time_based     | tinyint(1)   | YES  |     | NULL    |                |
		| term              | datetime     | YES  |     | NULL    |                |
		| startdate         | datetime     | YES  |     | NULL    |                |
		| stopdate          | datetime     | YES  |     | NULL    |                |
		| is_credit_based   | tinyint(1)   | YES  |     | NULL    |                |
		| credits           | int(11)      | YES  |     | 0       |                |
		| credits_used      | int(11)      | YES  |     | 0       |                |
		| credits_remaining | int(11)      | YES  |     | 0       |                |
		| user_id           | varchar(255) | YES  |     | NULL    |                |
		| features          | varchar(2048)| YES  |     | NULL    |                |
		*/
		
		// TODO: add support for the app name
		
		$sql = "SELECT * FROM *PREFIX*subscription_instances WHERE user_id ='".$user_id."'";
		
		$args = array();

		$query = \OCP\DB::prepare($sql);
		$result = $query->execute($args);
		while($row = $result->fetchRow()) {
		
			$stopdate = new DateTime($row['stopdate']);
			$credits_remaining = $row['credits_remaining'];
			$is_time_based = $row['is_time_based'];
			$is_credit_based = $row['is_credit_based'];
			if($is_time_based==1&&$stopdate>$timestamp&&$is_credit_based!=1||$is_time_based==1&&$stopdate>$timestamp&&$is_credit_based==1&&$credits_remaining>0||$is_time_based==0&&$is_credit_based==1&&$credits_remaining>0){
			
				$this->set_expired(0);
				$this->set_instance_id($row['id']);
				$this->set_is_credit_based($row['is_credit_based']);
				$this->set_is_time_based($row['is_time_based']);
				$this->set_number_credits($row['credits_remaining']);
				$this->set_datetime_expire($row['stopdate']);
				foreach($instances as $key=>$value){
                    foreach($value as $instance){
						if($instance->id==$row['remove_features_id']){
							$json = json_encode($instance->remove_elements);
							$this->set_features_unavailable(json_decode($json,TRUE));
							break;
						}
					}
				
				}
				
			}
		}
	
	}
	
	public function update_subscription_instance(){
	
		$sql = "UPDATE *PREFIX*subscription_instances SET ";
		$sql .= "credits_remaining = ".$this->get_number_credits();
		$sql .= " WHERE id = ".$this->get_instance_id();
		
		file_put_contents("/tmp/clicked_event.txt", ("sql = ".$sql."\n"), FILE_APPEND);
		
		$args = array();

		$query = \OCP\DB::prepare($sql);
		$result = $query->execute($args);
	
	}

	public function get_instance_id(){
		return $this->instance_id;
	}
	public function get_subscription_id(){
		return $this->subscription_id;
	}	
	public function get_number_credits(){
		return $this->number_credits;
	}
	public function get_is_credit_based(){
		return $this->is_credit_based;
	}
	public function get_is_time_based(){
		return $this->is_time_based;
	}
	public function get_datetime_initial(){
		return $this->datetime_initial;
	}
    public function get_datetime_expire(){
		return $this->datetime_expire;
	}
	public function get_datetime_now(){
		return $this->datetime_now;
	}	
    public function get_features_available(){
		return $this->features_available;
	}
	public function get_features_unavailable(){
		return $this->features_unavailable;
	}
	public function get_expired(){
		return $this->expired;
	}

	public function set_instance_id($instance_id){
		$this->instance_id = $instance_id;
	}
	public function set_subscription_id($subscription_id){
		$this->subscription_id = $subscription_id;
	}	
	public function set_number_credits($number_credits){
		$this->number_credits = $number_credits;
	}
	public function set_is_credit_based($is_credit_based){
		$this->is_credit_based = $is_credit_based;
	}
	public function set_is_time_based($is_time_based){
		$this->is_credit_based = $is_time_based;
	}
	public function set_datetime_initial($datetime_initial){
		$this->datetime_initial = $datetime_initial;
	}
    public function set_datetime_expire($datetime_expire){
		$this->datetime_expire = $datetime_expire;
	}
	public function set_datetime_now($datetime_now){
		$this->datetime_now = $datetime_now;
	}	
    public function set_features_available($features_available){
		$this->features_available = $features_available;
	}
	public function set_features_unavailable($features_unavailable){
		$this->features_unavailable = $features_unavailable;
	}
	public function set_expired($expired){
		$this->expired = $expired;
	}
	
}
