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



 

// Crée une fonction qui incrémente le nombre de likes à chaque clic sur l'icône
function incrementLikeCount(event) {
    // Récupère l'icône cliquée
    let icon = event.target;
  
    // Récupère le span .like-count correspondant
    let likeCount = icon.parentElement.querySelector(".like-count");
  
    // Vérifie si l'élément a déjà été cliqué
    if (!likeCount.dataset.clicked) {
      // Récupère le nombre actuel de likes
      let currentLikeCount = +likeCount.textContent;
  
      // Incrémente le nombre de likes
      currentLikeCount++;
  
      // Met à jour le texte du span avec le nouveau nombre de likes
      likeCount.textContent = currentLikeCount;
  
      // Change la valeur de l'attribut data-clicked à true
      likeCount.dataset.clicked = true;
    }
  }
  
  // Sélectionne toutes les icônes avec la classe
  const icons = document.getElementsByClassName("far fa-thumbs-up");
  
  // Ajoute un écouteur d'événement sur l'icône pour appeler la fonction incrementLikeCount au clic
  for (let icon of icons) {
    icon.addEventListener("click", incrementLikeCount);
  }
  
 //document.querySelector('.subforum-icon  i').addEventListener('click', incrementLikeCount);

 




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
  