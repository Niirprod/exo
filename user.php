<?php

	require_once('conn.php');
		/**
		 * 
		 */
		class User 
		{
			private $id;
			private $email;
			private $password;
			private $birthDate;

			public function getId(): ?int
			{
				return $this->id;
			}

			public function getEmail(): ?string
			{
				return $this->email;
			}

			public function setEmail(string $email): self
			{
				$this->email = $email;

				return $this;
			}

			public function getPassword(): ?string
			{
				return (string) $this->password;
			}

			public function setPassword(string $password): self
			{
				$this->password = $password;

				return $this;
			}

			public function getBrithDate(): ?date()
			{
				return $this->birthDate;
			}

			public function setBirthDate(date() $birthDate): self
			{
				$this->birthDate = $birthDate;

				return $this;
			}

		}


		$email = $_POST['email'];
		$password = $_POST['password'];
		$birthDate = $_POST['birthDate'];

		$sql = "INSERT INTO user (email, password, birthDate) VALUES ('$email', '$password', '$birthDate');";

		mysqli_query($conn, $sql); 

		header("Location: index.php?cretion=succed");





