<?php include('server.php');
//https://stackoverflow.com/questions/43055802/how-to-direct-different-users-to-different-pages-after-login

	$_SESSION['success'] = "YOU ARE LOGGED IN";
    $username = $_SESSION['username'];
    //$id = $_SESSION['id'];
//	echo $_SESSION['username'];//WORKING!!!!!
//	echo $_SESSION['id'];//WORKING!!!!!!!!!!!!!!!!!!!!
	$id_select = "SELECT `id` FROM `users` WHERE `username` ='$username'";
	
    $result = mysqli_query($db, $id_select);

while ($row = $result->fetch_assoc()) {
    //echo"<p></p>". $row['id']."<br>";//this pulls the values from ID
    $id = $row['id'];
    $_SESSION['id'] = $id;
}

	    
if (($id % 7) == 0){
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/1-c3EGAthMfr.html'); 
} elseif (($id % 7) == 1) {
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/2-Z8cEPL1lIP.html'); 
} elseif (($id % 7) == 2) {
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/3-r99n17RyXN.html'); 
} elseif (($id % 7) == 3) { 
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/4-qL6AyWdu9L.html'); 
} elseif (($id % 7) == 4) { 
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/5-zNmwkrfkXU.html'); 
} elseif (($id % 7) == 5) { 
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/6-0fBFXhGwUU.html'); 
} else { 
    header('Location: https://science-tech-rmainhar.c9users.io/scavengerHunt/7-d5uojFC05y.html'); 
}

?>