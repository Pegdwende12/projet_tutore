//Navbar
function hideIconBar(){
    var iconBar =document.getElementById("iconBar");
    var navigation =document.getElementById("navigation");
    iconBar.setAttribute("style", "display:none;");
    navigation.classList.remove("hide");
}
function showIconBar(){
    var iconBar =document.getElementById("iconBar");
    var navigation =document.getElementById("navigation");
    iconBar.setAttribute("style", "display:block;");
    navigation.classList.add("hide");
}
//

function showComment(){
    var commentArea =document.getElementById("comment-area");
    commentArea.setAttribute("style","display:block;");

}

 // Sélectionne l'élément span qui contient le nombre de likes
 const likeCount = document.getElementById('like-count');

 // Crée une fonction qui incrémente le nombre de likes à chaque clic sur l'icône
 let clicked = false;

 function incrementLikeCount() {
    if (!clicked){
        // Récupère le nombre actuel de likes
        let currentLikeCount = parseInt(likeCount.textContent);
    
   

        // Incrémente le nombre de likes
        currentLikeCount++;

        // Met à jour le texte du span avec le nouveau nombre de likes
        likeCount.textContent = currentLikeCount;

        // Change la valeur de la variable booléenne à true
            clicked = true;
    }
 }

 // Ajoute un écouteur d'événement sur l'icône pour appeler la fonction incrementLikeCount au clic
 document.querySelector('.subforum-icon  i').addEventListener('click', incrementLikeCount);

 
 function agrandir(event) {
    // Récupère l'élément qui a déclenché l'événement
    let element = event.target;
  
    // Modifie l'attribut style et onclick de l'élément
    element.setAttribute("style", "position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain;");
    element.setAttribute("onclick", "retrecir(event)");
  }
  
  function retrecir(event) {
    // Récupère l'élément qui a déclenché l'événement
    let element = event.target;
  
    // Modifie l'attribut style et onclick de l'élément
    element.setAttribute("style", "");
    element.setAttribute("onclick", "agrandir(event)");
  }
  