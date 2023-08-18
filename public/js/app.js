

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navbar-content-menu");
hamburger.addEventListener("click", toggleMenu);

function toggleMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    if (navMenu.classList[1] == 'active') {
        navMenu.style.display = 'block'
    } else {
        navMenu.style.display = 'none'
    }
}


const navLink = document.querySelectorAll(".navbar-content-row");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    navMenu.style.display = 'block'
}


function checkScreenSize() {
  // console.log("Hello")
  if (window.innerWidth >= 768 ) {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    navMenu.style.display = 'block';
  }
}
// checkScreenSize()
window.addEventListener('resize', checkScreenSize);

// ---------------Drop Down Menu-------------//
const dropdownToggle = document.querySelector(".dropdown-toggle");
const dropdownMenu = document.querySelector(".dropdown-menu");

dropdownToggle.addEventListener("click", toggleDropdown);

function toggleDropdown(event) {
  const isClickInsideToggle = event.target === dropdownToggle || event.target.parentElement === dropdownToggle;
  if (isClickInsideToggle) {
    dropdownToggle.classList.toggle("active");
    dropdownMenu.classList.toggle("active");
    if (dropdownMenu.classList.contains('active')) {
      dropdownMenu.style.display = 'block';
    } else {
      dropdownMenu.style.display = 'none';
    }
  }
}

const dropdown = document.querySelectorAll(".dropdown-col");
dropdown.forEach(n => n.addEventListener("click", closeDropDown));

function closeDropDown(event) {
  const isClickInsideDropdown = dropdownMenu.contains(event.target);
  if (!isClickInsideDropdown) {
    dropdownToggle.classList.remove('active');
    dropdownMenu.classList.remove('active');
    dropdownMenu.style.display = "none";
  }
}

