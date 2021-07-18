var onclickReponse=document.querySelectorAll("[class*='slider-']");
var myform =document.querySelectorAll("[class*='hide-']");
var pos_scroll=null;
var classnom=null;
var test=false;
onclickReponse.forEach((element)=>{
  element.addEventListener("click",()=>{
         pos_scroll=null;
            myform.forEach((hide)=>{
                hide.style.display="none";
        })
        var showFormulaire=element.className;
       var cible= document.getElementById(""+showFormulaire);
       classnom=cible;
       cible.style.display="block";
       cible.style.paddingTop="70px";
        setTimeout(()=>{ pos_scroll=window.scrollY; test=true;},1000);
  })

})
//[class="slider-"]

window.addEventListener("scroll",()=>{
     var position_Scroll=this.scrollY;
     if(pos_scroll!=position_Scroll && pos_scroll!=null){
         if(test==true){
            classnom.style.paddingTop="0px";
            test=false;
         }
     }
});



/**
 * 
 * 
 * 
 * 
 * 
 * ***************************************************************************************************
 *                                    FORMULAIRE POUR COMMENTER
 * ****************************************************************************************************
 * 
 * 
 * 
 * 
 */
document.getElementById("sub-form-1").addEventListener("submit",(e)=>{
          e.preventDefault();
          var xhr;
          var auteur=document.getElementById("auteur_commentaire");
          var gmail= document.getElementById("gmail_commentaire");
          var message_commenatire=document.getElementById("message_commenatire");
          var id_commenatire=document.getElementById("id_com");
          if(window.XMLHttpRequest){
               xhr=new XMLHttpRequest();
          }
          else{
              xhr=new ActiveXObject('Microsoft.XMLHTTP');
          }
          xhr.open("POST","./ajaxCommentaire.php");
            xhr.onreadystatechange=function(){
                  if(this.status=200 && this.readyState==4){
                    var doc=document.querySelector('.reponseAjax');
                    message_commenatire.value=" ";
                    doc.style.display="block";
                    if(xhr.response=="true"){
                      doc.innerHTML="votre message a été envoyé avec succèss et nous allons approuver <button class=\"ok\">OK</button>" ;
                      doc.style.color="white";
                      doc.style.fontSize="18px";
                      doc.style.paddingTop="10px";
                      doc.style.opacity="0.8";
                      doc.style.backgroundColor="rgb(33, 175, 33)";
                      setTimeout(()=>{doc.style.display="none";},2000);
                    }
                    else{
                      doc.innerHTML="votre n'a pas été envoyé , veuillez revoir ton champs <button class=\"ok\">OK</button>";
                      doc.style.color="white";
                      doc.style.fontSize="18px";
                      doc.style.paddingTop="10px";
                      doc.style.opacity="0.8";
                      doc.style.backgroundColor="tomato";
                      setTimeout(()=>{doc.style.display="none";},2000);
                    }
                  }
                
            }
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.send("auteur="+auteur.value+"&message="+message_commenatire.value+"&id="+id_commenatire.value+"&gmail="+gmail.value);
})


/**
 * 
 * 
 * 
 * 
 * 
 * ***************************************************************************************************
 *                                    FORMULAIRE POUR REPONDRE <
 * ****************************************************************************************************
 * 
 * 
 * 
 * 
 */
 document.querySelectorAll("[class*='hide-']").forEach((elementReponse)=>{
   elementReponse.addEventListener("submit",(e)=>{
      e.preventDefault();
      var xhr;
      var classnomFormReponse=elementReponse.className;
      var tableau=classnomFormReponse.split("-");

      var Rauteur=document.getElementById("auteur-"+tableau[1]);
      var Rgmail= document.getElementById("gmail-"+tableau[1]);
      var Rmessage_commenatire=document.getElementById("message-"+tableau[1]);
      var Rid_commenatire=document.getElementById("reponseCom-"+tableau[1]);
      if(window.XMLHttpRequest){
           xhr=new XMLHttpRequest();
      }
      else{
          xhr=new ActiveXObject('Microsoft.XMLHTTP');
      }
      xhr.open("POST","./ajaxRepnse.php");
        xhr.onreadystatechange=function(){
              if(this.status=200 && this.readyState==4){
                  var doc=document.querySelector('.reponseAjax');
                  Rmessage_commenatire.value=" ";
                  doc.style.display="block";
                  if(xhr.response=="true"){
                    doc.innerHTML="votre message a été envoyé avec succèss et nous allons approuver <button class=\"ok\">OK</button>" ;
                    doc.style.color="white";
                    doc.style.fontSize="18px";
                    doc.style.paddingTop="10px";
                    doc.style.opacity="0.8";
                    doc.style.backgroundColor="rgb(33, 175, 33)";
                    setTimeout(()=>{doc.style.display="none";},2000);
                  }
                  else{
                    doc.innerHTML="votre n'a pas été envoyé , veuillez revoir ton champs <button class=\"ok\">OK</button>";
                    doc.style.color="white";
                    doc.style.fontSize="18px";
                    doc.style.paddingTop="10px";
                    doc.style.opacity="0.8";
                    doc.style.backgroundColor="tomato";
                    setTimeout(()=>{doc.style.display="none";},2000);
                  }
                 
              }
            
        }
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("auteur="+Rauteur.value+"&message="+Rmessage_commenatire.value+"&id="+Rid_commenatire.value+"&gmail="+Rgmail.value);
  
      });
 })


