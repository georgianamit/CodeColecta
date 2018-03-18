<?php
class User{
	
	private $_data,$_db,$_sessionName,$_cookieName,$_isLoggedIn = false;
	
	function __construct($db){
		$this->_db = $db;
		self::check();
	}
	
	public function check($user = null){
		$this->_sessionName = $GLOBALS['sessionName'];
        $this->_cookieName = $GLOBALS['cookie_name'];
        if(!$user){
            if(Session::exists($this->_sessionName)){
                $user = Session::get($this->_sessionName);
                if($this->find($user)){
                    $this->_isLoggedIn = true;
                }
                else{
                    $this->logout();
                }
            }
        }
	}
	
	public function createUser($data = array()){
		if(!$this->_db->insertRecord('user',$data)){
            throw new Exception ("<strong color='red'>Error!</strong> While creating new user.");
			return false;
        }else{
			return true;
		}
	}
	
	public function updateUser($id=null,$data = array()){
        if(!$id && $this->isLoggedIn()){
            $id = $this->userData()->id;
        }
        if(!$this->_db->updateRecord('user',$id,$data)){
            throw new Exeption ("<strong color='red'>Error!</strong> Unable to update user data.");
			return false;
        }else{
			return true;
		}
    }	
	
	public function userData(){
        return $this->_data;
    }
	
	public function loginUser($username = null,$password = null,$remember = false){
         
        if(!$username && !$password && $this->exists()){
            Session::put($this->_sessionName,$this->userData()->id);
        }
        else{
            $user = $this->find($username);
                if($user){
					if($this->userData()->password == ($password)){
						if($remember){
							Cookie::put("username",$this->userData()->username,$GLOBALS['cookie_expiry']);
							Cookie::put("pwd",$this->userData()->password,$GLOBALS['cookie_expiry']);
						}
						Session::put($this->_sessionName,$this->userData()->id);
						Session::flash('userLoggedIn',"<strong>Success!</strong> logged in .");
						return true;
					}
				}
			}
        return false;
    }
	
	public function isLoggedIn(){
        return $this->_isLoggedIn;
    }
	
	public function getIP(){
        if(function_exists('apache_request_headers')){
            $headers = apache_request_headers();
        }
        else{
            $headers = $_SERVER;
        }
        if(array_key_exists('X-Forwarded-For',$headers) && filter_var($headers['X-Forwarded-For'],FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)){
            $theIP = $headers['X-Forwarded-For'];
        }
        else if(array_key_exists('HTTP_X_FORWARDED_FOR',$headers) && filter_var($headers['X-HTTP_X_FORWARDED_FOR-For'],FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)){
            $theIP = $headers['HTTP_X_FORWARDED_FOR'];
        }else{
            $theIP = filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);
        }
        return $theIP;
    }
	
	public function logout(){
        //$this->_db->remove('users_session',array('user_id','=',$this->data()->id));
        Session::del($this->_sessionName);
        Cookie::del($this->_cookieName);
		Session::flash('userLoggedOut',"<strong>Success!</strong> logged out .");
    }
	
	public function exists(){
        return (!empty($this->_data)) ? true : false;
    }
	
	/* 
	* Private Methods
	*/
	
	
	private function find($user = null){
			 if($user){
				$field = (is_numeric($user)) ? 'id' : 'username';
				$data = $this->_db->selectRecords("user",array($field,'=',$user));
				if($data->_count()){
					$this->_data = $data->firstResult();
					return true;
				}
			}
		return false;
	}
	
}
?>