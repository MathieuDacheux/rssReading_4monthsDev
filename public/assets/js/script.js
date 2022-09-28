/*********************** ***********************/
/***************** constIABLES *******************/
/*********************** ***********************/

/*********************** ***********************/
/***************** FUNCTIONS *******************/
/*********************** ***********************/

/*********************** ***********************/
/******************** WORK *********************/
/*********************** ***********************/
// const btn=document.getElementById('theme-btn');

// btn.addEventListener ('click',() => {
//     document.body.classList.toggle("dark-mode");
//     document.div.classList.toggle("darkmodecard");
// })
const btn1=document.getElementById('theme-btn');
btn1.addEventListener ('click',() => {
    const body= document.body;
    const card=document.getElementById('card')
    if(body.classList.contains('dark')){
        body.classList.add('light');
        body.classList.remove('dark');

    }else if (body.classList.contains('light')){
        body.classList.add('dark');
        body.classList.remove('light');

    }
});