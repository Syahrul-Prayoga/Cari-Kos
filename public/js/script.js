function previewImg(){
  const img = document.querySelector('#kosImg');
const imgLabel = document.querySelector('.custom-file-label');
const imgPrev = document.querySelector('.img-preview');

imgLabel.textContent = img.files[0].name;

const fileImg = new FileReader();
fileImg.readAsDataURL(img.files[0]);

fileImg.onload = function(e){
  imgPrev.src = e.target.result;
}
}
