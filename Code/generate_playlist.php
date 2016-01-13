<?php
/**
Generate the list of images to display.

This will automatically choose the images (and number of repetitions) 
according to training or testing.

The list of images is shuffled, yet, it ensures no repetitions ever
occur of two same images.

Each image is attributed with a number of dots. The number of dots for
each image is chosen such that, for each unique image, the number of dots
is fairly distributed amongst its repetetions.
eg. If there are 2 number of dots (3 or 4), and 4 repetitions, two of those
images will be associated with 3 dots and two with 4.
*/

include('db_connection.php'); // Creates a connection $conn
include('constants.php');

session_start();

/** 
Finds a random index in the array such that neither (index-1) nor (index)
contains an element equal to $element
*/
function findSuitableIndex($array, $element, $arraySize) {
  $index = rand(0, $arraySize - 1);

  for($i = 0; $i < $arraySize - 1; $i++) {
    if (!compare($array[$index], $element)) {    
      if ($index == 0 || !compare($array[$index-1], $element)) {
        return $index;
      } else if ($index == $arraySize - 1) {
        return $arraySize;
      }
    }
    $index = ($index + 1) % $arraySize;
  }

  die('An error occurred (5), please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
}

/**
Compare (equals) two elements of the playlist
*/
function compare($e, $f) {
  return $e['id'] == $f['id'];
}

/**
Removes the element i of the playlist and replaces it in a random position,
but ensuring that no similar element precedes of follows it
*/
function replaceInArray($array, $i, $size) {
  $element = $array[$i];

  array_splice($array, $i, 1); /* Remove from array */

  $index = findSuitableIndex($array, $element, $size - 1);

  if ($index == $size - 1) { /* Add at the end */
    $array[] = $element;
  } else {
    array_splice($array, $index, 0, array($element)); /* Insert */
  }

  return $array;
}

/**
Creates an array of size ($repetitions) that will contain, for each repetition, the number of dots that it should display.

If an array element is < 0, it means the result should be automatically generated
*/
function fillDotsCountArray($repetitions, $dots_counts) {
  $dots_per_rep = array();
  $dots_versions = count($dots_counts);
  $i = 0;

  /* distribute uniformely as much as possible */  
  while ($i + $dots_versions <= $repetitions) {
    for ($j=0; $j < $dots_versions; $j++, $i++) { 
      $dots_per_rep[] = $dots_counts[$j];
    }
  }

  /* randomize the remaining elements */
  for (; $i < $repetitions; $i++) { 
    $dots_per_rep[] = -1;
  }

  return $dots_per_rep;
}

/**
Choose a random element from the given array
*/
function choose_random($array) {
  return $array[rand(0, count($array)-1)];
}



if ($_SESSION["training"]) {
  $sql = "SELECT id, path FROM Training";
  $repetitions=RPT_TRAINING;
  $nextUrl="intro.php";
  $nb_breaks=NB_BREAKS_TRAINING;

} else {  
  $sql = "SELECT id, path FROM Images";
  $repetitions=RPT_SURVEY;
  $nextUrl=END_PAGE;
  $nb_breaks=NB_BREAKS_SURVEY;

}

$result = $conn->query($sql);
if ($result->num_rows <= 0) {
  die('An error occurred (1), please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
}

$videos=array();
while($row = $result->fetch_assoc()) {
  $videos[] = $row;
}

$dots_counts = explode(';', DOTS_COUNTS);
$dots_per_rep = fillDotsCountArray($repetitions, $dots_counts);
// Duplicate the video ids
$playlist=array();
for ($i = 0; $i < $repetitions; $i++) {
  foreach ($videos as $id) {
    $row = $id;    
    if ($dots_per_rep[$i] < 0) {
      $row['dots'] = choose_random($dots_counts);
    } else{ 
      $row['dots'] = $dots_per_rep[$i];
    }

    $playlist[] = $row;
  }
} 

if (!shuffle($playlist)) {
  die('An error occurred (2), please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
}

$size = sizeof($playlist);
for ($i = 1; $i < $size; $i++) {
  if (compare($playlist[$i-1], $playlist[$i])) {
    $playlist = replaceInArray($playlist, $i, $size);
    $i--;
  }  
}

$break_interval = $size / ($nb_breaks + 1);

// Just to be really sure
//    check playlist size
if (sizeof($playlist) != sizeof($videos)*$repetitions) {
  die('An error occurred (3), please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
}
//    check that no repetitions occur
for ($i = 1; $i < $size; $i++) {
  if ($playlist[$i-1]["path"] == $playlist[$i]["path"]) {
    die('An error occurred (4), please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
  }
}

$conn->close();
?>