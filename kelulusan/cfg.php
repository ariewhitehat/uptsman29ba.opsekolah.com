<?php 
	class database{
		var $host = "localhost";
		var $username = "root";
		var $password = "";
		var $database = "kelulusan";
		var $connection;
	
		function __construct(){
			$this->connection = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		}
	
		function register($username,$password,$nama)
		{	
			$insert = mysqli_query($this->connection,"INSERT INTO peserta_didik VALUES ('','$username','$password','$nama')");
			return $insert;
		}
	
		function login($username,$password,$remember)
		{
			$query = mysqli_query($this->connection,"SELECT * FROM peserta_didik WHERE username='$username'");
			$data_user = $query->fetch_array();
			if(password_verify($password,$data_user['password']))
			{
				if($remember)
				{
					setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
					setcookie('nama_pd', $data_user['nama_pd'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('nis', $data_user['nis'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('ttl', $data_user['ttl'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('jk', $data_user['jk'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('nama_ortu', $data_user['nama_ortu'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('kelas', $data_user['kelas'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('prodi', $data_user['prodi'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('nilai_rata_rata', $data_user['nilai_rata_rata'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('keterangan', $data_user['keterangan'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('foto', $data_user['foto'], time() + (60 * 60 * 24 * 5), '/');
					setcookie('download', $data_user['download'], time() + (60 * 60 * 24 * 5), '/');
				}
				$_SESSION['username'] = $username;
				$_SESSION['nama_pd'] = $data_user['nama_pd'];
				$_SESSION['nis'] = $data_user['nis'];
				$_SESSION['ttl'] = $data_user['ttl'];
				$_SESSION['jk'] = $data_user['jk'];
				$_SESSION['nama_ortu'] = $data_user['nama_ortu'];
				$_SESSION['kelas'] = $data_user['kelas'];
				$_SESSION['prodi'] = $data_user['prodi'];
				$_SESSION['nilai_rata_rata'] = $data_user['nilai_rata_rata'];
				$_SESSION['keterangan'] = $data_user['keterangan'];
				$_SESSION['foto'] = $data_user['foto'];
				$_SESSION['download'] = $data_user['download'];
				$_SESSION['is_login'] = TRUE;
				return TRUE;
			}
		}
	
		function relogin($username)
		{
			$query = mysqli_query($this->connection,"SELECT * FROM peserta_didik WHERE username='$username'");
			$data_user = $query->fetch_array();
			$_SESSION['username'] = $username;
			$_SESSION['nama_pd'] = $data_user['nama_pd'];
			$_SESSION['nis'] = $data_user['nis'];
			$_SESSION['ttl'] = $data_user['ttl'];
			$_SESSION['nama_ortu'] = $data_user['nama_ortu'];
			$_SESSION['kelas'] = $data_user['kelas'];
			$_SESSION['prodi'] = $data_user['prodi'];
			$_SESSION['nilai_rata_rata'] = $data_user['nilai_rata_rata'];
			$_SESSION['keterangan'] = $data_user['keterangan'];
			$_SESSION['foto'] = $data_user['foto'];
			$_SESSION['download'] = $data_user['download'];
			$_SESSION['is_login'] = TRUE;
		}
	} 
?>