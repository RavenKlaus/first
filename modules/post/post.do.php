<?php

	// post.do.php

	include("../../config/db.php");

	$post_content = 0;

	$text = "";

	if(isset($_POST["tweet"])){
		$text = $_POST["tweet"];
		$post_content++;
	}

	$posted_at = time();

	$url = "";
	if(isset($_POST["url"])){
		$url = $_POST["url"];
		$post_content++;
	}

	$media = "";
	if(isset($_POST["media"])){
		$media = $_POST["media"];
		$post_content++;
	}

	// echo $text;

	$sql = "INSERT INTO posts (userid, content, posted_at, url, media) VALUES ('$userid', '$text', '$posted_at', '$url', '$media')";

	if($post_content>0){

		$query = mysqli_query($conn, $sql);

		if($query){

			echo "ok";
			
		}
		else{
			echo "Database Error.";
		}

	}
	else{
		echo "No content provided!";
	}

?>