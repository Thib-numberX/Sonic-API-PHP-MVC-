// Les variables qui vont contenir mon élément du DOM

let modalContainer = document.querySelector('.modalContainer');
console.log(modalContainer);
let modalTrigger = document.querySelectorAll('.modal-trigger');
console.log(modalTrigger);


const menuOnScreen = {

    init: function () {

        menuOnScreen.addEvents();
        // menuOnScreen.handleModalClick(); Si ici, le classe est dans le DOM.


    },

    addEvents: function () {

        modalTrigger.forEach(trigger => trigger.addEventListener('click', menuOnScreen.handleModalClick));
        // console.log('yes');

       
    },

    handleModalClick: function () {

        modalContainer.classList.toggle('active');
        //console.log('yes');
        
    }



}


document.addEventListener('DOMContentLoaded', menuOnScreen.init);