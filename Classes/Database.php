<?php
class Database{
	
	private $_con,$_query,$_results,$_lastID=0,$_count=0;
	
	function __construct($serverName = null,$username = null,$password = null,$dbName = null){
		if(!$serverName && !$username && !$password && !$dbName){
			echo "Error please provide valid (serverName,username,password,database name).";
			return false;
		}else if (!$serverName && !$username){
			echo "Error please provide valid (serverName,username).";
			return false;
		}else if(!$serverName && !$password){
			echo "Error please provide valid (serverName,password).";
			return false;
		}else if(!$serverName){
			echo "Error please provide valid (serverName).";
			return false;
		}else if(!$username){
			echo "Error please provide valid (username).";
			return false;
		}else if($password != null){
			echo "Error please provide valid (password).";
			return false;
		}else{
			$this->connectToDB($serverName,$username,$password,$dbName);
		}
	}
	
	public function insertRecord($table = null,$data = array()){
		if (count($data)) {
			$keys   = array_keys($data);
			$values = '';
			$binder = 1;
			foreach ($data as $field) {
				$values .= '?';
				if ($binder < count($data)) {
					$values .= ', ';
				}
				$binder++;
			}
			$sqlQuery = "insert into `{$table}` (`" . implode('`, `', $keys) . "`) VALUES ({$values})";
			if ($this->attachValues($sqlQuery, $data) != false) {
				return true;
			}
		}
		return false;
	}
	
	public function updateRecord($table = null,$id = null,$field){
		 $set = '';
		 $binder = 1;
        foreach($field as $name => $value){
            $set .= "{$name} = ?";
            if($binder < count($field)){
                $set .= ', ';
            }
            $binder++;
        }
        $sqlQuery = "UPDATE {$table} SET {$set} WHERE id = {$id}";
        if($this->attachValues($sqlQuery, $field) != false){
            return true;
        }
        return false;
	}
	
	public function deleteRecord($table = null,$where){
		return $this->action('DELETE',$table,$where);
	}
	
	public function selectRecords($table = null,$where,$order = null){
		return $this->action('SELECT *',$table,$where,$order);
	}
	
	public function lastInsertID(){
        return($this->_lastID);
    }
	
	public function results(){
        return $this->_results;
    }
     
    public function firstResult(){
        return ($this->_results[0]);
    }
	
	public function _count(){
		return $this->_count;
	}
	/*
	*	Private Functions
	*/
	private function connectToDB($serverName = null,$username = null,$password = null,$dbName = null){
		
			try{
				 $this->_con = new PDO("mysql:host=$serverName;dbname=$dbName",$username,$password);
				 $this->_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				
				return $this->_con;
			}
			catch(Exception $e){
				echo $e->getMessage();
				return false;
			}
	}
	
	private function attachValues($sqlQuery, $params = array(),$tag = null) {
			if($tag == "select"){
				if($this->_query = $this->_con->prepare($sqlQuery)){
					$binder = 1;
					if(count($params)){
						foreach($params as $para){
							$this->_query->bindValue($binder,$para);
							$binder++;
						}
					}
					if($this->_query->execute()){
						$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
						$this->_count = $this->_query->rowCount();
						$this->_lastID = $this->_con->lastInsertId();
					}else{
						$this->_error = true;
					}
				}
			}else{
				if ($this->_query = $this->_con->prepare($sqlQuery)) {
					$binder = 1;
					if (count($params)) {
						foreach ($params as $para){
							$this->_query->bindValue($binder, $para);
							$binder++;
						}
					}
					if ($this->_query->execute()) {
						$this->_lastID = $this->_con->lastInsertId();
						return true;
					} else {
						return false;
					}
				}
			}
		return $this;
	}
	
	private function action($action,$table,$where = array(),$order = null){
        if(count($where) == 3){
            $operations = array("<",">","=<",">=","=");
            $fields = $where[0];
            $operation = $where[1];
            $value = $where[2];
            if(in_array($operation,$operations)){
				if($order){
					$sqlQuery = "{$action} FROM {$table} WHERE {$fields} {$operation} ? ORDER BY {$fields} {$order}";
				}else{
					$sqlQuery = "{$action} FROM {$table} WHERE {$fields} {$operation} ?";
				}
                if($this->attachValues($sqlQuery, array($value),"select") != false){
                    return $this;
                }
            }
        }
        return false;
    }
}
?>