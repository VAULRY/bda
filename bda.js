//slider section 4//
const slider = document.querySelector('.slider');

function activate(e) {
  const items = document.querySelectorAll('.item');
  e.target.matches('.next') && slider.append(items[0])
  e.target.matches('.prev') && slider.prepend(items[items.length-1]);
}

document.addEventListener('click',activate,false);

//fin du slider section 4//

$(document).ready(function(){
    //Je crée une fenêtre pop-up et je déclare au click //
     $('.pop-up').on('click', function(){
     // au passage de la souris et au cick de la souris //  
         $('#overlay').fadeIn(300); 
         $('.calendar').fadeIn(300); 
         let clickedbutton = $("input",$(this).parent()).attr('id');
         $('.dates').data('type',clickedbutton);
     });
     // Les évennement au click //
     $('table').on('click', function(event){
     // si je cible cet élément je veux que  si'', il me renvoi à ""//  
       let that=$(event.target);
        if(that.is('td') && !that.hasClass('notCurMonth') && !that.hasClass('holiday') && !that.hasClass('curDay')){
          
            $('td.curDay').toggleClass('curDay');
            that.toggleClass('curDay');
        }
    }); 
    
    $('#add_event').on('click', function(){
      
        let value= $('td.curDay').html();
        $('#overlay').fadeOut(300);
         $('.calendar').fadeOut(300);
         let id=($('.dates').data()).type;
         $('#' + id).val(value+"01 MAI, 2018");
    }); 
    // au click "rechercher" //
    $('#search').on('click', function(e){
        $('.booking').addClass('is-sent');
        e.preventDefault();
    });
      
    });


 // GOOGLE MAPS DEBUT //

 



     // GOOGLE MAPS FIN //

     