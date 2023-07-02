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
 function incrementLikeCount() {
   // Récupère le nombre actuel de likes
   let currentLikeCount = parseInt(likeCount.textContent);

   // Incrémente le nombre de likes
   currentLikeCount++;

   // Met à jour le texte du span avec le nouveau nombre de likes
   likeCount.textContent = currentLikeCount;
 }

 // Ajoute un écouteur d'événement sur l'icône pour appeler la fonction incrementLikeCount au clic
 document.querySelector('.subforum-icon  i').addEventListener('click', incrementLikeCount);