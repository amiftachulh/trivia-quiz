<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Trivia Quiz</title>
</head>
<body>
  <?php
    include 'question.php';
    class User {
      private $name;
      public function __construct($name) {
        $this->name;
      }
      public function setName($nameNew) {
        $this->name = $nameNew;
      }
      public function getName() {
        return $this->name;
      }
    }
    $user = new User("");
    if (isset($_POST['submit'])) {
      include 'check.php';
    } else {
  ?>
  <h1 class="title">Trivia Quiz</h1>
  <button id="help-btn" class="help-btn"><i class="far fa-question-circle"></i> Help</button>
  <?php include 'help.php' ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="submit-answers">
    <?php foreach ($q as $no => $val) { ?>
      <li>
        <div class="question"><?php echo $val['question'] ?></div>
        <?php foreach ($val['answers'] as $letter => $a) {
          $label = 'question'. $no .'answer'. $letter;
        ?>
        <div class="answer-list">
          <input type="radio" name="answers[<?php echo $no; ?>]" id="<?php echo $label; ?>" class="answer" value="<?php echo $letter; ?>">
          <label for="<?php echo $label; ?>"><?php echo $a; ?></label>
        </div>
        <?php } ?>
      </li>
    <?php } ?>
    <div id="login" class="login">
      <div class="login-desc">What should I call you?</div>
      <input type="text" name="username" id="name-submit" class="name-submit" autocomplete="off">
    </div>
    <div class="show-result-container"><button type="button" id="show-result" class="show-result">Show Result</button></div>
    <div id="confirm" class="confirm">
      <div class="desc">Are you sure want to proceed?</div>
      <div class="btn-wrapper">
        <button type="submit" class="yes" name="submit">Yes</button>
        <button type="button" class="no">No</button>
      </div>
    </div>
  </form>
  <?php } ?>
  <script src="script.js"></script>
</body>
</html>