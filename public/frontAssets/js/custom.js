// typing text 
$(document).ready(function () {
    var typed = new Typed(".typing", {
        strings: ["Web Designer" , "Web Developer" , "Digital Marketer"],
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
        strings: ["Web Designer" , "Web Developer" , "Digital Marketer"],
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
	$(window).on('load', function() {
		$('.preloader').addClass('preloader-deactivate');
	});

