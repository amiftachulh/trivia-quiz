// Disable Enter Key
$('#submit-answers').keypress(function (e) { 
  if (e.which == '13') {
    e.preventDefault();
  }
});

// Show Help
document.getElementById('help-btn').addEventListener('click', () => {
  document.body.style.overflow = 'hidden';
  document.getElementById('help').classList.add('show');
  $('body > *:not(.help)').on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
  });
});

// Close Help
document.getElementById('close-btn').addEventListener('click', () => {
  document.body.style.overflow = 'auto';
  document.getElementById('help').classList.remove('show');
  $('body > *:not(.help)').off();
});

// Show Confirmation
document.getElementById('show-result').addEventListener('click', () => {
  var x = document.getElementById('name-submit');
  var y = document.querySelectorAll('input[type="radio"]:checked');
  if (x.value.length == 0 || y.length < 10) {
    alert("Please check if you have filled your name and all the answers!");
  } else {
    document.body.style.overflow = 'hidden';
    document.getElementById('confirm').classList.add('show');
  }
});

// Close Confirmation
document.querySelector('.no').addEventListener('click', () => {
  document.body.style.overflow = 'auto';
  document.getElementById('confirm').classList.remove('show');
});
