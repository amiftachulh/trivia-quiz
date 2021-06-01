<?php
# Declaring Counter and Choice
$counter = 0;
$choice = $_POST['answers'];

// Start of Checking Page
echo '<h1 class="title">Result</h1>';

# Check Wrong and Correct Answers
foreach ($q as $no => $val) {
  echo '<div class="result">'. $val['question'];
  if ($choice[$no] != $val['correct']) {
    echo '<div class="wrong">'. $val['answers'][$choice[$no]] .'</div>';
  } else {
    echo '<div class="correct">'. $val['answers'][$choice[$no]] .'</div>';
    $counter++;
  }
  echo '</div>';
}

# Counter and Evaluation
echo '<div class="counter">';
echo '<div class="counter-no"> Score: '. $counter .'/10</div>';
$user->setName($_POST['username']);
$call = $user->getName();
$valuation = [
  $call.", WHAT!?",
  $call.", you can read a book or something to increase your knowledge.",
  "You need more efforts, ".$call.".",
  "Great job, ".$call."!",
  "Almost! You can do it, ".$call."!",
  "Perfect! Well done, ".$call."."
];
if ($counter < 1) {
  echo '<div class="valuation">'. $valuation[0] .'</div>';
} elseif ($counter <= 3) {
  echo '<div class="valuation">'. $valuation[1] .'</div>';
} elseif ($counter <= 6) {
  echo '<div class="valuation">'. $valuation[2] .'</div>';
} elseif ($counter <= 8) {
  echo '<div class="valuation">'. $valuation[3] .'</div>';
} elseif ($counter <= 9) {
  echo '<div class="valuation">'. $valuation[4] .'</div>';
} elseif ($counter <= 10) {
  echo '<div class="valuation">'. $valuation[5] .'</div>';
}
echo '</div>';
echo '<div style="text-align: center;"><button class="retry"><a href=".">Try again <i class="fas fa-redo-alt"></i></a></button></div>';
// End of Checking Page
?>