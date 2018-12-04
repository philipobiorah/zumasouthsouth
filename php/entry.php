<?php
	session_start();// starts session for user
	include 'db.php';// imports database connection from db.php
	
	/*
	*	Initializes the form variables
	*/
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$filmTitle = $_POST['filmTitle'];
	$date = $_POST['date'];
	$directorsName = $_POST['directorsName'];
	$producersName = $_POST['producersName'];
	$movieSynopsis = $_POST['movieSynopsis'];
	$directorsBio = $_POST['directorsBio'];

	if($firstName!="" && $lastName != "" && $filmTitle!="" && $date!="" && $directorsName!="" && $directorsBio!="" && $movieSynopsis!="" && $producersName !="")
	{
		/*Cleans input gotten from form to avoid sql injections*/
		$firstName = mysqli_real_escape_string($connection,stripslashes($firstName));
		$lastName = mysqli_real_escape_string($connection,stripslashes($lastName));
		$filmTitle = mysqli_real_escape_string($connection,stripslashes($filmTitle));
		$date = mysqli_real_escape_string($connection,stripslashes($_POST['date']));
		$directorsName = mysqli_real_escape_string($connection,stripslashes($directorsName));
		$producersName = mysqli_real_escape_string($connection,stripslashes($producersName));
		$directorsBio = mysqli_real_escape_string($connection,stripslashes($directorsBio));
		$movieSynopsis = mysqli_real_escape_string($connection,stripslashes($movieSynopsis));


		$film = $_FILES['film']['name']; //initializes variable from form called film
		$photo = $_FILES['photo']['name'];//initilizes photo variable
		$photo2 = $_FILES['photo2']['name'];
		
		if(isset($film) && isset($photo))// checks if file has been selected for upload
		{
			$photoPath = pathinfo($_FILES['photo']['name']);
			$photoExtension = strtolower($photoPath['extension']);
			
			$photo2Path = pathinfo($_FILES['photo2']['name']);
			$photo2Extension = strtolower($photo2Path['extension']);
			
			$photoUploadPath = "../imagesUpload/".basename($_FILES['photo']['name']);
			$photo2UploadPath = "../imagesUpload/".basename($_FILES['photo2']['name']);
			if(($photoExtension == "jpg" || $photoExtension == "gif" || $photoExtension == "png" || $photoExtension == "jpeg")&&($photo2Extension == "jpg" || $photo2Extension == "gif" || $photo2Extension == "png" || $photo2Extension == "jpeg"))
			{
				$filmPath = pathinfo($_FILES['film']['name']);
				$filmFileType = strtolower($filmPath['extension']);
				$filmUploadPath = "../uploads/".basename($_FILES['film']['name']); //Path file is to be uploaded to
				$fileSize = $_FILES['film']['size'];
				if($fileSize<=700000000)// checks file size to ensure it is not greater than 100MB
				{
					if($filmFileType == "mp4" || $filmFileType == "webm" or $filmFileType == "ogg")
					{
						if(move_uploaded_file($_FILES['film']['tmp_name'],$filmUploadPath) && move_uploaded_file($_FILES['photo']['tmp_name'],$photoUploadPath) && move_uploaded_file($_FILES['photo2']['tmp_name'],$photo2UploadPath))//moves upload to specified folder
						{
							$insertquery = mysqli_query($connection, "INSERT INTO entries (firstName, lastName, filmTitle, DOP, directorsName, directorsBio, fileName, photoName, producersName, producersPhoto, movieSynopsis)
																		VALUES('$firstName', '$lastName', '$filmTitle', '$date', '$directorsName', '$directorsBio', '$film','$photo', '$producersName', '$photo2', '$movieSynopsis')");//database injection query
							$_SESSION['Message'] = "Entry submitted successfully";
							header("Location: /entry.php");
						}
						else{
							$_SESSION['Message'] = "Error submitting file. Please try again";
							header("Location: /entry.php");
						}
					}
					else{
						$_SESSION['Message'] = "File types allowed: mp4, webm and ogg";
						header("Location: /entry.php");
					}
				}
				else{
					
				}
			}
			else{
				$_SESSION['Message'] = "Allowed image types: jpg, jpeg, gif, png";
				header("Location: /entry.php");
			}
			
		}
		else{
			$_SESSION['Message'] = "Please select a file";
			header("Location: /entry.php");
		}
	}
	else{
		$_SESSION['Message'] = "Please ensure all fields are filled";
			header("Location: /entry.php");
	}

	

?>
