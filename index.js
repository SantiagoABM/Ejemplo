
const noBtn = document.querySelector('#noBtn');

noBtn.addEventListener('click',function() {
    const randomX = parseInt(Math.random()*300);
    const randomY = parseInt(Math.random()*300);
    noBtn.style.setProperty('top',randomY+'%');
    noBtn.style.setProperty('left',randomX+'%');
    noBtn.style.setProperty('transform',`translate(-${randomX}%,-${randomY}%)`);
})
