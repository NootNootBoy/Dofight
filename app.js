const inputs = document.querySelectorAll('.input');

function focusFonction(){
    let parent = this.parentNode.parentNode;
    parent.classList.add('focus');
}
function blurFonction(){
    let parent = this.parentNode.parentNode;
    if(this.value == ""){
        parent.classList.remove('focus');
    }
}


inputs.forEach(input => {

    input.addEventListener('focus', focusFonction);
    input.addEventListener('blur', blurFonction);

})
