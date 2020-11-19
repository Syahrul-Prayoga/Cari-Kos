
function navToggle(){
  const menuToogle = document.querySelector('.menu-toggle input');
  const nav = document.querySelector('nav ul');
  
  menuToogle.addEventListener('click', function () {
    nav.classList.toggle('slide');
  })
}

function loadImg(){
const kosElement = document.querySelector('.container');
  for (let i = 0; i < 5; i++) {
    kosElement.innerHTML += 
    /*html*/
    `
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <img src="https://picsum.photos/200/200?random=${i}" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text">lorem ipsum</p>
            </div>
          </div>
        </div>

    <!-- <div class="list-kos card">
    <img src="https://picsum.photos/200/200?random=${i}" alt="" srcset="">
    <h5>Lorem ipsum dolor sit amet.</h5>
    </div> -->
    `;
    
  }
}


// navToggle();
// loadImg();
