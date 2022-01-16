function validation(){
    /*prend tous les messages d'erreur et de validation*/
    var message_erreur = document.getElementById("message_erreur");
    var text;
    var prenomValid = document.getElementById("valid_prenom");
    var nomValid = document.getElementById("valid_nom");
    var mailValid = document.getElementById("valid_mail");

    message_erreur.style.padding = "10px"

/*prend la valeur de "prenom"*/
    var prenom = document.getElementById("prenom").value;
/*boucle disant que si le prénom fait moins de 2 caractères un message d'erreur apparait*/
    if (prenom.length < 2) {
        text = "Please enter a valid first name";
        message_erreur.innerHTML = text;
        return false;
    }
/*boucle affichant un message disant que la section a bien été remplie si les condition inverse a la boucle au dessus ont été remplies*/
    if (prenom.length > 2) {
        prenomValid.style.display = 'flex';
        prenomValid.style.justifyContent = 'center';
    }
/*prend la valeur de "nom"*/
    var nom = document.getElementById("nom").value;
/*boucle disant que si le nom fait moins de 2 caractères un message d'erreur apparait*/
    if (nom.length < 2) {
        text = "Please enter a valid last name";
        message_erreur.innerHTML = text;
        return false;
    } 
/*boucle affichant un message disant que la section a bien été remplie si les condition inverse a la boucle au dessus ont été remplies*/
    if (nom.length > 2) {
        nomValid.style.display = 'flex'
        nomValid.style.justifyContent = 'center';
    }
/*prend la valeur de "mail"*/
    var mail = document.getElementById("mail").value;
/*boucle disant que si l'adresse mail n'a pas de "@" ou fait moins de 8 caractères ou n'a pas de "." un message d'erreur apparait*/
    if (mail.indexOf('@') == -1 || mail.length < 8 || mail.indexOf('.') == -1) {
        text = "Please enter a valid email adress";
        message_erreur.innerHTML = text;
        return false;
    }
/*boucle affichant un message disant que la section a bien été remplie si les condition inverse a la boucle au dessus ont été remplies*/
    if (mail.length > 8 && mail.indexOf('@') && mail.indexOf('.')) {
        mailValid.style.display = 'flex';
        mailValid.style.justifyContent = 'center';
    }
/*prend la valeur de "message"*/
    var message = document.getElementById("message").value;
/*boucle disant que si le message fait moins de 15 caractères un message d'erreur apparait*/
    if (message.length < 15 || message.indexOf("")) {
        text = "Please enter a message";
        message_erreur.innerHTML = text;
        return false;
    }

    alert("Form has been successfully submitted");

    return true;

}