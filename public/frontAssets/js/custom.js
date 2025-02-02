// typing text 
$(document).ready(function () {
    var typed = new Typed(".typing", {
        strings: ["Web Designer", "Web Developer", "Digital Marketer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    var typed_name = new Typed(".typing_name", {
        strings: ["Mehedi Hasan John"],
        typeSpeed: 150,
        backSpeed: 99999999,
        loop: false
    });
    var typed_name_intro = new Typed(".typing_name_intro", {
        strings: ["Mehedi Hasan John"],
        typeSpeed: 50,
        backSpeed: 600,
        loop: false
    });
    var typed_occupation = new Typed(".typing_occupation", {
        strings: ["Web Designer", "Web Developer", "Digital Marketer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
});

const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});

/*====================
	Preloader JS
======================*/
$(window).on('load', function () {
    $('.preloader').addClass('preloader-deactivate');
});

$(document).ready(function () {
    const currentYear = new Date().getFullYear();

    // Find the span element by its id
    const spanElement = document.getElementById('current_year');

    // Set the innerHTML of the span to the current year
    spanElement.innerHTML = currentYear;

});

function toggleChat() {
  var chatOptions = document.getElementById('chat-options');
  var toggleButton = document.getElementById('toggle-button');
  var isOpening = !chatOptions.classList.contains('show');

  // Toggle visibility of the chat options container with fade-up or fade-down effect
  if (isOpening) {
      chatOptions.classList.add('show');
      chatOptions.classList.remove('hide');
      toggleButton.classList.add('spin-right');
      toggleButton.classList.remove('spin-left');
      toggleButton.innerHTML = '<i class="fa fa-times"></i>'; // Change to cross icon
  } else {
      chatOptions.classList.add('hide');
      chatOptions.classList.remove('show');
      toggleButton.classList.add('spin-left');
      toggleButton.classList.remove('spin-right');
      setTimeout(() => {
          toggleButton.innerHTML = '<i class="fa fa-comments"></i>'; // Change back to comments icon
      }, 150); // Delay to align with spin animation
  }
}