d=document;w=window;c=console;
const detector   = d.querySelector('#detector');
const headerMenu = d.querySelector('#headerMenu');
const headerSocl = d.querySelector('#headerSocial');
const headerLogo = d.querySelector('#isoLogo');
const headerNavB = d.querySelector('#navBar');


const options = {
  root: null, // it is the viewport, that's the default
  threshold: 1, // that's the default
  rootMargin: "32px 0px 0px 0px" // that's the default
};

const observer = new IntersectionObserver(function(entries, observer){
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      headerMenu.classList.add("inactive");
      headerSocl.classList.add("inactive");
      headerLogo.classList.add("inactive");
      headerNavB.classList.add("inactive");
    } else {
      headerSocl.classList.remove("inactive");
      headerMenu.classList.remove("inactive");
      headerLogo.classList.remove("inactive");
      headerNavB.classList.remove("inactive");
    }
    // c.log(entry);
    // c.log(entry.target);
  })
}, options);

const observer2 = new IntersectionObserver(function(entries, observer2){
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // headerMenu.classList.add("inactive");
      entry.target.querySelector(".markerFirstLetter").style.marginLeft = "0";
      entry.target.querySelector(".markerFirstLetter").style.opacity = "1";


      entry.target.querySelector(".markerSecondLetter").style.marginRight = "0";
      entry.target.querySelector(".markerSecondLetter").style.opacity = "1";
      c.log("activate!");
      // c.log(entry.target);
    } else {
      // headerSocl.classList.remove("inactive");
    }
  })
}, options);

// observer.observe(detector);
// d.querySelectorAll('.sectionMarker').forEach(e => {
//   observer2.observe(e);
// })




// SLIDER:
var slideIndex = 1;
if(d.getElementsByClassName("carouselItem").length>0){showDivs(slideIndex);carousel();}
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = d.getElementsByClassName("carouselItem");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    // x[i].style.display = "none";
    x[i].classList.add("inactive");
  }
  // x[slideIndex-1].style.display = "grid";
  x[slideIndex-1].classList.remove("inactive");
}


function carousel() {
  var i;
  var x = d.getElementsByClassName("carouselItem");
  for (i = 0; i < x.length; i++) {
    // x[i].style.display = "none";
    x[i].classList.add("inactive");
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  // x[slideIndex-1].style.display = "block";
  x[slideIndex-1].classList.remove("inactive");
  setTimeout(carousel, 8000); // Change image every 8 seconds
}
