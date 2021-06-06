// BOUTON VOIR PLUS
function seeMore(article, langue) {
    let btnSeeMore = document.getElementById("btnSeeMore");
    let content = document.getElementById(article);

    if (content.style.display == "block") {
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

// SELECTEUR DYNAMIQUE INTERFACE ADMIN
function getSelect() {
    let selector = document.getElementById("type-action");
    let selectedValue = selector.options[selector.selectedIndex].value;

    if (selectedValue == "ajout") {
        var optionAction = 1;
    } else if (selectedValue == "modif") {
        var optionAction = 2;
    } else if (selectedValue == "supp") {
        var optionAction = 3;
    }

    let selector2 = document.getElementById("type-contenu");
    let selectedValue2 = selector2.options[selector2.selectedIndex].value;

    if (selectedValue2 == "histoire") {
        var optionContenu = 1;
    } else if (selectedValue2 == "visiter") {
        var optionContenu = 2;
    } else if (selectedValue2 == "image") {
        var optionContenu = 3;
    }

    // Chaque fois qu'on va relancer la fonction, on cache tous les form pour pas que tout soit affiché en même temps
    var formulaires = document.querySelectorAll('form');
    formulaires.forEach((form) => {
        form.style.display = "none";
    });
    document.getElementById('preview-visiter').style.display = "none";

    switch (optionAction) {
        case 1 :
            console.log("vu select 1");
            switch (optionContenu) {
                case 1 :
                    break;
                case 2 :
                    document.getElementById("form-ajout-visiter").style.display = "block";
                    document.getElementById("preview-visiter").style.display = "block";
                    break;
                case 3 :
                    document.getElementById("form-ajout-galerie").style.display = "block";
                    document.getElementById("preview-galerie").style.display = "block";
                    break;
            }
            break
        case 2 :
            switch (optionContenu) {
                case 1 :
                    break;
                case 2 :
                    document.getElementById("form-modif-visiter").style.display = "block";
                    break;
                case 3 :
                    document.getElementById("form-modif-galerie").style.display = "block";
                    break;
            }
            break
        case 3 :
            switch (optionContenu) {
                case 1 :
                    break;
                case 2 :
                    document.getElementById("form-supp-visiter").style.display = "block";
                    break;
                case 3 :
                    document.getElementById("form-supp-galerie").style.display = "block";
                    break;
            }
            break
    }
}

// ACTUALISER LE PREVIEW DANS L'INTERFACE ADMIN
function refreshPreview() {
    // Preview partie VISITER
    let input_title = document.getElementById("titre-fr").value;
    let preview_title = document.getElementById("preview-titre-fr");
    let input_text = document.getElementById("texte-fr").value;
    let preview_text = document.getElementById("preview-texte-fr");

    preview_title.innerText = input_title;
    preview_text.innerText = input_text;

    // Preview partie GALERIE
    let input_desc = document.getElementById("desc-fr").value;
    let preview_desc = document.getElementById("preview-desc-fr");

    preview_desc.innerText = input_desc;
}