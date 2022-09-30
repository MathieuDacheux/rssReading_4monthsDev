const switchBtn = document.querySelector('#switchMode img');
const body = document.querySelector('body');
// const allP = document.querySelectorAll('p');
// const h2 = document.querySelectorAll('h2');
const text = document.querySelectorAll('.darkText')



switchBtn.addEventListener('click', () =>{
    // Condition pour changer de mode
    if (body.style.backgroundColor=='rgb(31, 31, 31)'){
        body.style.backgroundColor='rgb(255, 255, 255)';
        switchBtn.src='/public/assets/img/icon/moon.png';
        // text.style.color='rgb(0, 0, 0)';
        text.forEach(element => {
            element.style.color='rgb(0, 0, 0)';
        });
    } else {
        body.style.backgroundColor='rgb(31, 31, 31)';
        switchBtn.src='/public/assets/img/icon/sun.png';
        // text.style.color='rgb(255, 255, 255)';
        text.forEach(element => {
            element.style.color='rgb(255, 255, 255)';
        });
    }
});