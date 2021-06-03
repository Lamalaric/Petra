function seeMore(article, langue) {
    let btnSeeMore = document.getElementById("btnSeeMore");
    let content = document.getElementById(article);

    if (content.style.display === "block") {
        content.style.display = "none";
        if (langue === 0) {
            btnSeeMore.innerHTML = "Voir plus";
         } else {
            btnSeeMore.innerHTML = "See more";
         }
       
    } else {
        content.style.display = "block";
        if (langue === 0) {
            btnSeeMore.innerHTML = "Voir moins";
         } else {
            btnSeeMore.innerHTML = "See less";
         }
    }
}