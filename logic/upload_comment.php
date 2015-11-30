<?php



if(isset($_POST['submitComment'])){


 $songRank = $_GET['songRank'];
 $naamCom = $_POST['naamComment'];
 $emailCom = $_POST['emailComment'];
 $reactieCom =  $_POST['reactieComment'];


 if (!empty($naamCom) && !empty($emailCom) && !empty($reactieCom)) {
  $commentQuery = "INSERT INTO songscomment(id, name, date, comment, top100_id) VALUES (null, '$naamCom', CURRENT_TIMESTAMP, '$reactieCom', '$songRank')";
  $comResult = $mysqli->query($commentQuery);
 }  else {
  echo '<p>U heeft de verplichte velden niet ingevoerd.</p>';
}
  header('Location: index.php?action=song_info&songRank=' . $songRank . '');
}

?>
