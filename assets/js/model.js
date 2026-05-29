const open = document.getElementById("open");
const model = document.getElementById("model");
const close = document.getElementById("close");

open.addEventListener('click',function(){

    model.classList.add('show');
});

close.addEventListener('click',function(){

    model.classList.remove('show');
});