<?php
class Dao {
	private $host = "localhost";
	private $db = "codenightmares";
	private $user = "root";
	private $pass = "S0ma0iwfy!";
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
		$query = $conn->prepare("SELECT post.username, posttime, count(vote.voteid) as score, content FROM post LEFT JOIN vote USING (postid) GROUP BY postid ORDER BY posttime DESC LIMIT :start , :count ");
		$query->setFetchMode(PDO::FETCH_BOTH);
		$query->bindValue(':start', $start, PDO::PARAM_INT);
		$query->bindValue(':count', $count, PDO::PARAM_INT);
		$query->execute();
		return $query;
	}
	public function getHottestPosts ($start, $count) {
		$conn = $this->getConnection();
		$query = $conn->prepare(" SELECT post.username, posttime, count(voteid) as score, content, count(voteid) - ((unix_timestamp() - unix_timestamp(posttime)) / 86400) as rating FROM post LEFT JOIN vote USING (postid) GROUP BY postid ORDER BY rating DESC LIMIT :start , :count ");
		$query->setFetchMode(PDO::FETCH_BOTH);
		$query->bindValue(':start', $start, PDO::PARAM_INT);
		$query->bindValue(':count', $count, PDO::PARAM_INT);
		$query->execute();
		return $query;
	}
	public function getTopPosts ($start, $count) {
		$conn = $this->getConnection();
		$query = $conn->prepare("SELECT post.username, posttime, count(vote.voteid) as score, content FROM post LEFT JOIN vote USING (postid) GROUP BY postid ORDER BY score DESC LIMIT :start , :count ");
		$query->setFetchMode(PDO::FETCH_BOTH);
		$query->bindValue(':start', $start, PDO::PARAM_INT);
		$query->bindValue(':count', $count, PDO::PARAM_INT);
		$query->execute();
		return $query;
	}

}

