<?php

echo '<section id="song_info_container">';
echo '<h2 class="mainH2">In de Radio 1 Tour Top 100</h2>';
echo '<hr style="border: none; border-top: dotted 3px;" />';

foreach ($songs_info as $songs) {


 $songRank = $songs['rank'];
 $previoussongRank = $songRank + 1;
 $nextsongRank = $songRank - 1;
 $prevQuery = "SELECT * FROM songs WHERE rank = " . $previoussongRank . "";
 $nextQuery = "SELECT * FROM songs WHERE rank = " . $nextsongRank.  "";
 $prevResult = $mysqli->query($prevQuery);
 $nextResult = $mysqli->query($nextQuery);
 $aantalComments = $mysqli->query("SELECT COUNT(id) AS 'row_count' FROM songscomment WHERE top100_id =" . $songRank . "");
 $commentQuery = "SELECT * FROM songs INNER JOIN songscomment ON songscomment.top100_id=songs.rank WHERE rank =" . $songRank . "";
 $comResult = $mysqli->query($commentQuery);




 switch ($songRank) {
    case 100:
        echo '<div class="lButtonSpace"></div>';
        echo '<div class="mButtonSpace"><div class="current">'. $songRank .'</div><p class="songName">' . $songs['name'] . ': ' . $songs['song']. '</p></div>';
        echo '<div class="rButtonSpace"><a href="?action=song_info&songRank=' . $nextsongRank .'";"><div class="next">'. $nextsongRank .'</div>';
        while ($nextSong = $nextResult->fetch_assoc())
        {
          echo '<p class="songName">' . $nextSong['name'] . ': ' . $nextSong['song']. '</p>';
        }
        echo '</a></div>';
        echo '<div class="videoBox"><iframe src="http://'  . $songs['songPath'] . '" frameborder="0" allowfullscreen></iframe></div>';
        echo '<div class="textBox">' . $songs['text'] . '</div>';
        echo '<div class="songImages"><img src="./Images/facebookicon.png"><img src="./Images/twittericon.png"><img src="./Images/mailicon.png"></div>';
        break;
    case 1:
        echo '<div class="lButtonSpace">
        <a href="?action=song_info&songRank=' . $previoussongRank .'";">
        <div class="previous">'. $previoussongRank .'</div>';
        while ($prevSong = $prevResult->fetch_assoc())
        {
          echo '<p class="songName">' . $prevSong['name'] . ': ' . $prevSong['song']. '</p></a></div>';
        }
        echo '<div class="mButtonSpace"><div class="current">'. $songRank .'</div><p class="songName">' . $songs['name'] . ': ' . $songs['song']. '</p></div>';
        echo '<div class="rButtonSpace"></div>';
        echo '<div class="videoBox"><iframe src="http://'  . $songs['songPath'] . '" frameborder="0" allowfullscreen></iframe></div>';
        echo '<div class="textBox">' . $songs['text'] . '</div>';
        echo '<div class="songImages"><img src="./Images/facebookicon.png"><img src="./Images/twittericon.png"><img src="./Images/mailicon.png"></div>';
        break;
    default:
      if($todaySongs >= $songRank) {
        echo '<div class="lButtonSpace">
        <a href="?action=song_info&songRank=' . $previoussongRank .'";">
        <div class="previous">'. $previoussongRank .'</div>';
        while ($prevSong = $prevResult->fetch_assoc())
        {
          echo '<p class="songName">' . $prevSong['name'] . ': ' . $prevSong['song']. '</p>';
        }
        echo '</a></div>';
        echo '<div class="mButtonSpace"><div class="current">'. $songRank .'</div><p class="songName">' . $songs['name'] . ': ' . $songs['song']. '</p></div>';
        echo '<div class="rButtonSpace"><a href="javascript:void(0)";"><div class="next">'. $nextsongRank .'</div>';
        echo '???</a></div>';
      } else {
        echo '<div class="lButtonSpace">
        <a href="?action=song_info&songRank=' . $previoussongRank .'";">
        <div class="previous">'. $previoussongRank .'</div>';
        while ($prevSong = $prevResult->fetch_assoc())
        {
          echo '<p class="songName">' . $prevSong['name'] . ': ' . $prevSong['song']. '</p>';
        }
        echo '</a></div>';
        echo '<div class="mButtonSpace"><div class="current">'. $songRank .'</div><p class="songName">' . $songs['name'] . ': ' . $songs['song']. '</p></div>';
        echo '<div class="rButtonSpace"><a href="?action=song_info&songRank=' . $nextsongRank .'";"><div class="next">'. $nextsongRank .'</div>';
        while ($nextSong = $nextResult->fetch_assoc())
        {
          echo '<p class="songName">' . $nextSong['name'] . ': ' . $nextSong['song']. '</p>';
        }
        echo '</a></div>';
      }
        echo '<div class="videoBox"><iframe src="http://'  . $songs['songPath'] . '" frameborder="0" allowfullscreen></iframe></div>';
        echo '<div class="textBox">' . $songs['text'] . '</div>';
        echo '<div class="songImages"><img src="./Images/facebookicon.png"><img src="./Images/twittericon.png"><img src="./Images/mailicon.png"></div>';
        break;
 }

/*------------------ Form  ----------------*/

 echo '<h2  class="mainH2">Reageer op dit Bericht</h2>' ;
 echo '<hr style="border: none; border-top: dotted 3px;" />';
 echo '<form id="commentForm" method="post">';
 echo '<p class="formText">Naam</p><input type="text" class="formInput" name="naamComment">';
 echo '<p class="formText">E-mail</p><input type="text" class="formInput" name="emailComment">';
 echo '<p class="formText">Website</p><input type="text" class="formInput" name="websiteComment">';
 echo '<p class="formText">Reactie</p><input type="text" name="reactieComment">';
 echo '<input type="submit" name="submitComment" value="Send">';
 echo '</form>';



 /*--------------------- Comments  ----------------------*/

 echo '<div>';
 while ($aComments = $aantalComments->fetch_assoc()){
    echo '<h2  class="mainH2">Reacties op dit bericht [' . $aComments['row_count'] . ']</h2>';
 }
 echo '<hr style="border: none; border-top: dotted 3px;" />';
 foreach($comResult as $comments){
    $dateChange = $comments['date'];
    $changedTimestamp = strtotime($dateChange);


  echo '<div class="comBox">';
  echo '<p class="comment_name">'. $comments['name'] .'</p>';
  echo '<p class="comment_date">' . date("d-M-Y H:i", $changedTimestamp) . '</p>';
  echo '<p class="comment_comment">'. $comments['comment'] .'</p>';
  echo '<a class="wLink" href="javascript:void">Waarschuw de redactie over deze</a>';
  echo '<hr style="border: none; border-top: dotted 3px;" />'; '<hr style="border-top: dotted 2px;" />';
  echo '</div>';
 }
 echo '</div>';

}

echo '</section>';
