
function navToggle(){
  const menuToogle = document.querySelector('.menu-toggle input');
  const nav = document.querySelector('nav ul');
  
  menuToogle.addEventListener('click', function () {
    nav.classList.toggle('slide');
  })
}

function loadImg(){
const kosElement = document.querySelector('.container');
  for (let i = 0; i < 20; i++) {
    kosElement.innerHTML += 
    /*html*/
    `
    <div class="list-kos card">
    <img src="https://picsum.photos/200/200?random=${i}" alt="" srcset="">
    <h5>Lorem ipsum dolor sit amet.</h5>
    </div>
    `;
    
  }
}

navToggle();
loadImg();