const image = document.querySelector('.poster img')
console.log(image);



function asset(path) {
    const baseUrl = window.location.origin;
    return `${baseUrl}/${path}`;
  }

function checkScreenSize() {
    // console.log("Hello")
    if (window.innerWidth >= 768 ) {
      
  
    }
  }
  // checkScreenSize()
  window.addEventListener('resize', checkScreenSize);

// const groupHolder = document.querySelector('.group-holder');
// const buttonCount = 3; // Number of buttons to generate

// for (let i = 0; i < buttonCount; i++) {
//   const button = document.createElement('button');
//   button.textContent = 'Interior Place Holder';
//   groupHolder.appendChild(button);
// }

// const seeMoreButton = document.querySelector('.button button');
// seeMoreButton.textContent = 'See more';