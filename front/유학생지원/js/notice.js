

var toggleButton = document.getElementById('title');
    var dropdownContainer = document.getElementById('dropdown-container');

    toggleButton.addEventListener('click', function() {
      dropdownContainer.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
      var isClickedInsideDropdown = dropdownContainer.contains(event.target) || toggleButton === event.target;

      if (!isClickedInsideDropdown) {
        dropdownContainer.classList.remove('show');
      }
    });