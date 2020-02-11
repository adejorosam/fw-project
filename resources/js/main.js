$(function(){
    let input = document.querySelector('#input');
        
input.addEventListener('change', function(){
    console.log(this.value);
    let fe_display = document.querySelector('.frontend');
    let be_display = document.querySelector('.backend');
    let both_display = document.querySelector('.both');

    if (this.value == 'frontend') {
        fe_display.style.display = 'block';
        be_display.style.display = 'none';
        both_display.style.display = 'none';
    } else if(this.value == 'backend'){
        fe_display.style.display = 'none';
        be_display.style.display = 'block';
        both_display.style.display = 'none'
    } else if(this.value == 'both'){
        both_display.style.display = 'block'
        fe_display.style.display = 'none';
        be_display.style.display = 'none';
    } else {
        both_display.style.display = 'none'
        fe_display.style.display = 'none';
        be_display.style.display = 'none';
    }
    });
});

// let input = document.querySelector('#input');
        
// input.addEventListener('change', function(){
//     console.log(this.value);
//     let fe_display = document.querySelector('.frontend');
//     let be_display = document.querySelector('.backend');
//     let both_display = document.querySelector('.both');

//     if (this.value == 'frontend') {
//         fe_display.style.display = 'block';
//         be_display.style.display = 'none';
//         both_display.style.display = 'none';
//     } else if(this.value == 'backend'){
//         fe_display.style.display = 'none';
//         be_display.style.display = 'block';
//         both_display.style.display = 'none'
//     } else if(this.value == 'both'){
//         both_display.style.display = 'block'
//         fe_display.style.display = 'none';
//         be_display.style.display = 'none';
//     } else {
//         both_display.style.display = 'none'
//         fe_display.style.display = 'none';
//         be_display.style.display = 'none';
//     }
// });
