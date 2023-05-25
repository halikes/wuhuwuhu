

var triggerButtons = document.querySelectorAll('.dropdown-trigger');

triggerButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var content = this.nextElementSibling;
    content.classList.toggle('show');
  });
});