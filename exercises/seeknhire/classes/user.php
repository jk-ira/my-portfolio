<?php
	Class User{
		protected $connection;
		public $personal_details_completed;
		public $educational_details_completed;
		public $name;
		public $surname;
		public $gender;
		public $dob;
		public $nationality;
		public $country_code;
		public $phone_number;
		public $languages;
		public $country;
		public $city;
		
		function __construct($connection){
			$this->connection = $connection;
		}

		public function checkInput($input){
			$input = htmlspecialchars($input);
			$input = trim($input);
			$input = stripcslashes($input);
			return $input;
		}

		public function login($email,$password,$conn){
			$password = md5($password);
			$query = "SELECT * FROM `job_seekers` WHERE email = '$email' AND password = '$password' ";
			$query2 = "SELECT * FROM `company` WHERE email = '$email' AND password = '$password' ";
			
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
			$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
			$count = mysqli_num_rows($result);
			$count2 = mysqli_num_rows($result2);

			if ($count > 0){
				$r = mysqli_fetch_assoc($result);
				if ($r['verified'] == 'true') {					
					$_SESSION['user__email'] = $email;
					header("Location:home_u.php?curr=timeline");

				}else{
					return 0;
				}
				
			}else if (($count2 > 0)) {
				$r2 = mysqli_fetch_assoc($result2);
				if ($r2['verified'] == 'true') {					
					$_SESSION['company__email'] = $email;
					header("Location:home_c.php");

				}else{
					return 0;
				}
			}
			else{
				return 1;
			}
		 	
		}
		public function registerUser($email,$password,$conn){
			$password = md5($password);
			$hash = md5( rand(0,1000) );
			$query = "INSERT INTO `job_seekers` (email,password,verified,hash,personal_details_completed,educational_details_completed) VALUES ('$email','$password','false','$hash','false','false')";
			//CHECK IF USER ALREADY EXISTS
			$email_check = "SELECT * FROM `job_seekers` WHERE email='$email' LIMIT 1";
			$email_check2 = "SELECT * FROM `company` WHERE email='$email' LIMIT 1";
			$email_check_function = mysqli_query($conn,$email_check);
			$email_check_function2 = mysqli_query($conn,$email_check2);
			$r = mysqli_fetch_assoc($email_check_function);
			$r2 = mysqli_fetch_assoc($email_check_function2);
			if($r){
				if($r["email"] === $email){
					//email already exists
					return 0;
				}
			}else if ($r2) {
				if($r2["email"] === $email){
					//email already exists
					return 0;
				}
			}
			else{
				//email does not exist
				if(mysqli_query($conn,$query)){
					//successful	
					$this->emailVerification($email,$hash);
					return 1;
				}
				else{
					//error occured
					return 2;
				}
			}
		}

		public function registerCompany($compname,$email,$password,$compsize,$conn){
			$password = md5($password);
			$hash = md5( rand(0,1000) );
			$query = "INSERT INTO `company` (name,email,password,size,verified,hash) VALUES
			 ('$compname','$email','$password','$compsize','false','$hash')";
			
			//CHECK IF USER ALREADY EXISTS
			$email_check = "SELECT * FROM `job_seekers` WHERE email='$email' LIMIT 1";
			$email_check2 = "SELECT * FROM `company` WHERE email='$email' LIMIT 1";
			$email_check_function = mysqli_query($conn,$email_check);
			$email_check_function2 = mysqli_query($conn,$email_check2);
			$r = mysqli_fetch_assoc($email_check_function);
			$r2 = mysqli_fetch_assoc($email_check_function2);
			if($r){
				if($r["email"] === $email){
					//email already exists
					return 0;
				}
			}
			else if ($r2) {
				if($r2["email"] === $email){
					//email already exists
					return 0;
				}
			}
			else{
				//email does not exist
				if(mysqli_query($conn,$query)){
					//successful	
					$this->emailVerification($email,$hash);			
					return 1;
				}
				else{
					//error occured
					return 2;
				}
			}
		}	
		private function emailVerification($email,$hash){
			$to = $email;
			$subject = 'Signup Verification';
			$message = '
			Thanks for signing up!
			Your Account has been successfully created.
			Please click this link to activate your account:
			http://jkiradukunda.ga/seeknhire/verify.php?email='.$email.'&hash='.$hash.'
			';
			$headers = 'From:keviniraduku@yahoo.com' . "\r\n";
			mail($to, $subject, $message, $headers);
			//$val_link = 'http://jkiradukunda.ga/seeknhire/verify.php?email='.$email.'&hash='.$hash;
			//echo '<a href="'.$val_link.'">'.$val_link.'</a>';
			$val_link_test = 'http://localhost/kevin,yvan/seeknhire/verify.php?email='.$email.'&hash='.$hash;
			echo '<a href="'.$val_link_test.'">'.$val_link_test.'</a>';
		}

		public function resetPassword($email,$conn){
			//CHECK IF USER ALREADY EXISTS
			$email_check = "SELECT * FROM `job_seekers` WHERE email='$email' LIMIT 1";
			$email_check_function = mysqli_query($conn,$email_check);
			$r = mysqli_fetch_assoc($email_check_function);
			if($r){				
				//email exists		
				return true;	
				
			}else{
				//email doesnt exist display error msg
				return false;
			}

		}

		public function verify($email,$hash,$conn){
			//individuals
			$query1 = "SELECT * FROM job_seekers WHERE email = '$email'";
			$runQuery = mysqli_query($conn,$query1);
			$rows = mysqli_num_rows($runQuery);
			if ($rows > 0) {
				
				$r = mysqli_fetch_assoc($runQuery);
				$hashFromDB = $r['hash'];
				$emailFromDB = $r['email'];
				$verifiedFromDB = $r['verified'];

				if ($verifiedFromDB == "true") {
					//already verified
					return 0;
				}
				else{
					if($hashFromDB == $hash && $emailFromDB == $email){
						
						$updateVerified = "UPDATE `job_seekers` SET verified = 'true' WHERE email = '$emailFromDB'";
						if (mysqli_query($conn,$updateVerified)) {
							//succesful
							return 1;
						}

					}
					else{
						//not succesful
						return 2;
					}
				}
				
			}
			else{
				//company
				$query2 = "SELECT * FROM company WHERE email = '$email'";
				$runQuery2 = mysqli_query($conn,$query2);
				$rows2 = mysqli_num_rows($runQuery2);
				if ($rows2 > 0) {
					$r2 = mysqli_fetch_assoc($runQuery2);
					$hashFromDB2 = $r2['hash'];
					$emailFromDB2 = $r2['email'];
					$verifiedFromDB2 = $r2['verified'];

					if ($verifiedFromDB2 == "true") {
						//already verified
						return 0;
					}
					else{
						if($hashFromDB2 == $hash && $emailFromDB2 == $email){
							
							$updateVerified2 = "UPDATE `company` SET verified = 'true' WHERE email = '$emailFromDB2'";
							if (mysqli_query($conn,$updateVerified2)) {
								//succesful
								return 1;
							}

						}
						else{
							//not succesful
							return 2;
						}
					}
				}
				else{
					//not succesful
					return 2;
				}
			}
		}

		public function loadUserDetailsFromDB($conn,$email){
			$loadDetails = "SELECT * FROM job_seekers WHERE email='$email'";
			$runQuery = mysqli_query($conn,$loadDetails);
			$row = mysqli_num_rows($runQuery);
			if($row>0){
				$r = mysqli_fetch_assoc($runQuery);
				$this->name = $r['name'];
				$this->surname = $r['surname'];
				$this->gender = $r['gender'];
				$this->dob = $r['dob'];
				$this->nationality = $r['nationality'];
				$this->country_code = $r['country_code'];
				$this->phone_number = $r['cellphone_number'];
				$this->languages = $r['languages'];
				$this->country = $r['location_country'];
				$this->city = $r['location_town'];
				$this->personal_details_completed = $r['personal_details_completed'];
				$this->educational_details_completed = $r['educational_details_completed'];
			}
		}
		public function saveUserDetailsOnDB
		($conn,$name,$surname,$email,$gender,$dob,$nationality,$country_code,$phone_number,$languages,$country,$city){
			
			$saveQuery = "UPDATE job_seekers SET name='$name',surname='$surname',gender='$gender',dob='$dob',nationality='$nationality',country_code = '$country_code',cellphone_number='$phone_number',languages='$languages',location_country='$country',location_town='$city',personal_details_completed='true'	WHERE email='$email'";
			$runQuery = mysqli_query($conn,$saveQuery);
			if($runQuery){
				//successfull
				return 1;
			}
			else{
				//not succesfull
				return 2;
			}
		}
		public function saveUserDetailsUpdateOnDB
		($conn,$email,$country_code,$phone_number,$languages,$country,$city){
			
			$saveQuery = "UPDATE job_seekers SET country_code = '$country_code',cellphone_number='$phone_number',languages='$languages',location_country='$country',location_town='$city' WHERE email='$email'";
			$runQuery = mysqli_query($conn,$saveQuery);
			if($runQuery){
				//successfull
				return 1;
			}
			else{
				//not succesfull
				return 2;
			}
		}

		public function upload_profile_picture($file_name,$file_tmp,$target_file,$email,$conn){
			//load image on server and save image name on db 
			$query = "UPDATE `job_seekers` SET profile_picture = '$file_name' WHERE email = '$email'";
			move_uploaded_file($file_tmp,$target_file);		

			if(file_exists($target_file)){
				//if image uploaded on server
				if(mysqli_query($conn,$query)){
					//if image name saved on db
					//successfull
					return 1;
					echo "<script>alert(".$upload.")</script>";
				}
				else{
					//error
					return 0;
				}
			}else{
				//error
					
				return 2;
			}
		}

		public function logout(){
			$_SESSION = array();
			session_destroy();
			header('Location: ./login.php');
		} 
	}

?>