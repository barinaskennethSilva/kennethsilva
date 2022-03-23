const dashoff = document.getElementById('dashboard');
const dashclose = document.querySelector('#dashoff');
const dashOpen = document.querySelector('.btn');

dashOpen.addEventListener('click', function (){
  dashoff.style.width = "50%";
  dashclose.style.width = "49%";
}); 

dashclose.addEventListener('click', function (){
  dashoff.style.width = "0%";
  dashclose.style.width = "0%";
});