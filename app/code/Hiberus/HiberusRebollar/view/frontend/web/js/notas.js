define(['jquery'],function($){
    "use strict";
    return function ocultarNotas(){
        let x= document.getElementById("notas");

        if(x.style.display==="none"){
            x.style.display = "block";
        }else{
            x.style.display = "none";
        }

    }

});


