const toisonDor = {
   init: function() {
       console.log("app initialisée");
       toisonDor.handleSubmission();
   },
  
   /**
   *  Will stop the submission of the form if his input values are null
   */
   handleSubmission: function () {

      var form = document.querySelector('form');

      form.addEventListener('submit', (event)=> {
      
         var input = document.querySelector('input:first-of-type');

            if(input.value.length < 1) {
               console.log('Il faut remplire le champs \'Nom de l\'Argaunote\'');
               event.preventDefault();
            }
         
         // inputs.forEach(function (input){
         // })
      })
   }
}

toisonDor.init();