<?php

class User{
	private $UserId, $UserName, $UserMail, $UserPassword;

	public function getUserId(){
		return $this->UserId;
	}

	public function setUserId($UserId){
		$this->UserId = $UserId;
	}

	public function getUserName(){
		return $this->UserName;
	}

	public function setUserName($UserName){
		$this->UserName = $UserName;
	}

	public function getUserMail(){
		return $this->UserMail;
	}

	public function setUserMail($UserMail){
		$this->UserMail = $UserMail;
	}

	public function getUserPassword(){
		return $this->UserPassword;
	}

	public function setUserPassword($UserPassword){
		$this->UserPassword = $UserPassword;
	}

	public function InsertUser(){
		include "conn.php";
		
		$req = $bdd->prepare("INSERT INTO users(UserName,UserMail,UserPassword) VALUES (:UserName,:UserMail,:UserPassword)");

		$req->execute([
			'UserName' => $this->getUserName(),
			'UserMail' => $this->getUserMail(),
			'UserPassword' => $this->getUserPassword()
			]); 
	}

	public function Userlogin(){
		include "conn.php";
		$req = $bdd->prepare("SELECT * FROM users WHERE UserMail=:UserMail AND UserPassword=:UserPassword"); 

		$req->execute([
			'UserMail' => $this->getUserMail(),
			'UserPassword' => $this->getUserPassword()
			]);
		if($req->rowCount() ==0){
			header("Location: ../index.php?error=1");
			return false;
		}else{
			while($data= $req->fetch()){

			$this->setUserId($data['UserId']);
			$this->setUserName($data['UserName']);
			$this->setUserPassword($data['UserPassword']);
			$this->setUserMail($data['UserMail']);
			header("Location: Home.php");
			return true;

					
					
			}
		}
	}
} 

/**
* 
*/
class Chat
{
	private $ChatId, $ChatUserId, $ChatText;

	public function getChatId(){
		return $this->ChatId;
	}

	public function setChatId($ChatId){
		$this->ChatId = $ChatId;
	}

	public function getChatUserId(){
		return $this->ChatUserId;
	}

	public function setChatUserId($ChatUserId){
		$this->ChatUserId = $ChatUserId;
	}

	public function getChatText(){
		return $this->ChatText;
	}

	public function setChatText($ChatText){
		$this->ChatText = $ChatText;
	}

	public function InsertChatMessage(){
		include "conn.php";
		$req = $bbd->prepare("INSERT INTO chats(ChatUserId,ChatText)  Values (:ChatUserId,:ChatText)");

			$req->execute([
				'ChatUserId' => $this->getChatUserId(),
				'ChatText' => $this->getChatText()
				]); 
	}


}
	

?>