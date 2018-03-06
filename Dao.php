<?php
class Dao {
	private $host = "localhost:3306";
	private $db = "codenightmares";
	private $user = "root";
	private $pass = "Ysnutra4a!";
	private function getConnection () {
		try {
			return
				new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
					$this->pass);
		} catch (Exception $e) {
			echo "connection failed: " . $e->getMessage();
		}
	}
	public function checkUsernameExists ($username) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT username FROM user WHERE username = :username");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':username', $username);
		$query->execute();
		return $query->rowCount() > 0;
	}
	public function checkEmailExists ($email) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT email FROM user WHERE email = :email");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':email', $email);
		$query->execute();
		return $query->rowCount() > 0;
	}
	public function checkPassword ($username, $password) {
		$conn = $this->getConnection();
		/*$query = $conn->prepare("INSERT INTO comments (name, comment) VALUES (:name, :comment)");*/
		$query = $conn->prepare("SELECT password FROM user WHERE username = :username");
		$query->bindParam(':username', $username);
		$query->execute();
		$hash = $query->fetch()[0];
		return password_verify($password, $hash);
	}
	public function createUser ($username, $email, $password, $permission) {
		$conn = $this->getConnection();
		$query = $conn->prepare("INSERT INTO user (username, email, password, permission) VALUES (:username, :email, :hash, :permission)");
		$query->bindParam(':username', $username);
		$query->bindParam(':email', $email);
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$query->bindParam(':hash', $hash);
		$query->bindParam(':permission', $permission);
		$query->execute();
	}
	public function changePassword ($username, $password) {
		$conn = $this->getConnection();
		$query = $conn->prepare("UPDATE user SET password=:hash WHERE username=:username");
		$query->bindParam(':username', $username);
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$query->bindParam(':hash', $hash);
		$query->execute();
	}
	public function getPermissions ($username) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT permission FROM user WHERE username = :username");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':username', $username);
		$query->execute();
		return $query->fetch();
	}
	public function getLatestPosts ($start, $count) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT * FROM post ORDER BY posttime LIMIT :count OFFSET :start");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':count', $count);
		$query->bindParam(':start', $start);
		$query->execute();
		return $query->fetchAll();
	}
	public function getHottestPosts ($start, $count) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT * FROM post ORDER BY count(vote.voteid WHERE vote.postid = post.postid) / (unix_timestamp() - unix_timestamp(posttime)) LIMIT :count OFFSET :start");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':count', $count);
		$query->bindParam(':start', $start);
		$query->execute();
		return $query->fetchAll();
	}
	public function getTopPosts ($start, $count) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT * FROM post ORDER BY count(vote.voteid WHERE vote.postid = post.postid) DESC LIMIT :count OFFSET :start");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->bindParam(':count', $count);
		$query->bindParam(':start', $start);
		$query->execute();
		return $query->fetchAll();
	}

}

