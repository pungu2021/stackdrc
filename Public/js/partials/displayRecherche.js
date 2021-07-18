export class DisplayRecherche{
    afficher(cible , evenement , action , form){
         cible.addEventListener(evenement , ()=>{
             action.style.display="block";   
            form.style.display="block";  
         });
    }
    masquer( evenement , action,form){
        action.addEventListener(evenement , ()=>{
            action.style.display="none";  
            form.style.display="none";  
        });
   }
}