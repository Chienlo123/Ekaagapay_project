
<?php

	require 'config/connection.php';

	class class_model{

		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}

		
 
		



	    public function fetchAll_employees(){ 
            $sql = "SELECT * FROM  tblseniorcitizen";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

      

         public function fetchAll_attendance(){ 
            $sql = "SELECT * FROM tbl_attendance a INNER JOIN tblseniorcitizen b ON a.employee_qrcode = b.qrcode  WHERE DATE(a.logdate) = CURDATE() ORDER BY a.attendance_id DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		 public function fetchAll_empAttendance(){ 
            $sql = "SELECT * FROM tbl_attendance a INNER JOIN tblseniorcitizen b ON a.employee_qrcode = b.qrcode ORDER BY a.attendance_id DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		



	    public function login_employee($employee_idno, $password){
			$stmt = $this->conn->prepare("SELECT * FROM `tblseniorcitizen` WHERE `employee_idno` = ? AND `password` = ?") or die($this->conn->error);
			$stmt->bind_param("is", $employee_idno, $password);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'ID'=> htmlentities($fetch['ID']),
					'count'=>$valid
				);
			}
		}

		public function employee_account($ID){
			$stmt = $this->conn->prepare("SELECT * FROM `tblseniorcitizen` WHERE `ID` = ?") or die($this->conn->error);
		    $stmt->bind_param("i", $ID);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'Name'=> $fetch['Name'],
					'last_name'=> $fetch['last_name']

				);
			}	
		}
	
	    public function fetchindividual_employee($ID){ 
	            $sql = "SELECT * FROM  tblseniorcitizen WHERE `ID` = ?";
					$stmt = $this->conn->prepare($sql);
					$stmt->bind_param("i", $ID);
					$stmt->execute();
					$result = $stmt->get_result();
			        $data = array();
			         while ($row = $result->fetch_assoc()) {
			                   $data[] = $row;
			            }
			         return $data;

			  }

         public function fetchindividual_empAttendance($ID){ 
            $sql = "SELECT * FROM tbl_attendance a INNER JOIN tblseniorcitizen b ON a.employee_qrcode = b.qrcode WHERE b.ID = ? ORDER BY a.attendance_id DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param("i", $ID);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }


		  public function count_numberofemployees(){ 
            $sql = "SELECT COUNT(ID) as ID FROM tblseniorcitizen ORDER BY ID DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function count_numberofattendance(){ 
            $sql = "SELECT COUNT(attendance_id) as attendance_id FROM tbl_attendance ORDER BY attendance_id DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		    public function count_numberoftimeInOutToday(){ 
            $sql = "SELECT COUNT(attendance_id) as attendance_ids  FROM tbl_attendance  WHERE DATE(logdate) = CURDATE() ORDER BY attendance_id DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		   public function count_numberofattendanceIndividualEmp($ID){ 
            $sql = "SELECT COUNT(a.attendance_id) as attendance_ids  FROM tbl_attendance a INNER JOIN tblseniorcitizen b ON a.employee_qrcode = b.qrcode WHERE b.employee_id = ? ORDER BY a.attendance_id DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param("i", $ID);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function count_numberofemployeesIndividualEmp($ID){ 
            $sql = "SELECT COUNT(ID) as ID FROM tblseniorcitizen WHERE ID = ? ORDER BY ID DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param("i", $ID);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }
	
	}	
?>