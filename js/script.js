$('.burgerMenu').click(function() {
  $('body').toggleClass("show-menu");
});

// Scroll to the top of the page when the button is clicked
function scrollButton() {
window.scrollTo({
top: 0,
behavior: "smooth" // Enable smooth scrolling behavior
});
}

// Show or hide the "Scroll to Top" button based on the scroll position
window.addEventListener("scroll", function() {
var scrollTop = document.getElementById("scrollTop");
if (window.pageYOffset > 100) {
scrollTop.style.display = "block";
} else {
scrollTop.style.display = "none";
}
});


// Contact Us Form 
function submitForm(event) {
  event.preventDefault(); // Prevent form submission

  // Retrieve form values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;

  // Validate form fields
  if (name === "") {
    alert("Please enter your name.");
    return;
  }

  if (email === "") {
    alert("Please enter your email.");
    return;
  }

  if (subject === "") {
    alert("Please enter your subject.");
    return;
  }

  if (message === "") {
    alert("Please enter your message.");
    return;
  }
    alert("Thanks!");
}


// Image Slider 
const slider = document.getElementById('slider');
const slide = slider.getElementsByClassName('slide');
const totalImages = slide.length;

let currentImage = 0;

// Show the current slide
function showSlide() {
  for (let i = 0; i < slide.length; i++) {
    slide[i].classList.remove('active');
  }
  slide[currentImage].classList.add('active');
}

// Move to the next slide
function nextSlide() {
  currentImage = (currentImage + 1) % totalImages;
  showSlide();
}

// Image slider by automatically switching to the next slide every 3 seconds
function startSlider() {
  setInterval(nextSlide, 3000);
}

// Starting the image slider
startSlider();

