const fab = document.getElementById("fab");
//const fabBtns = document.getElementById(".fab-btns");
const fabBtns = document.querySelector('.fab-btns');

/* agregrando un Evento */
fab.addEventListener("click",()=>{
   fabBtns.classList.toggle("show");
   // console.log('click en la funcion')
   console.log(fabBtns);
})
