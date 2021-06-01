<div id="help" class="help">
  <h1>Help</h1>
  <button id="close-btn" class="close-btn"><i class="far fa-times-circle"></i></button>
  <div class="help-desc">Do you think this help contains all the answer? Unlucky, this is only the step how you fill the answer and submit it.</div>
  <?php
    $help = [
      'Click the radio button or click the answer to fill it. Then enter your name in the box.',
      'After you have filled it, click <strong>VALIDATE ANSWER</strong> button to check that you have fill all the required items. <strong>SHOW RESULT</strong> button will appear if all input is valid.',
      'Click <strong>SHOW RESULT</strong> button to see your score. <div class="green">Green</div> means your answer is correct. <div class="red">Red</div> means your answer is wrong.',
      'If you want to try again, click <strong>TRY AGAIN <i class="fas fa-redo-alt"></i></strong> button.'
    ];
    for ($i = 0; $i < count($help); $i++) {
      echo '<div class="step">'. $i + 1 .') '.$help[$i].'</div>';
    }
  ?>
</div>