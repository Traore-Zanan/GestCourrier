

var truc = document.querySelector('#connexion')
if(truc.innerText == "connecté"){
    document.querySelector("#accueil").setAttribute('href', 'index.php');
    document.querySelector("#courrierE").setAttribute('href', 'courrierE.php');
    document.querySelector("#courrierS").setAttribute('href', 'courrierS.php');
    document.querySelector("#parag").setAttribute('href', 'paragraphes.php');
    document.querySelector("#decon").removeAttribute('hidden');
    document.querySelector("#ajouter").setAttribute('href', 'ajouterUser.php');
    document.querySelector("#suprimer").setAttribute('href', 'suprimerUser.php');
}else{
    document.querySelector("#accueil").setAttribute('href', 'login.php');
    document.querySelector("#courrierE").setAttribute('href', 'login.php');
    document.querySelector("#courrierS").setAttribute('href', 'login.php');
    document.querySelector("#parag").setAttribute('href', 'login.php');
    document.querySelector("#ajouter").setAttribute('href', 'login.php');
    document.querySelector("#suprimer").setAttribute('href', 'login.php');
    document.querySelector("#decon").setAttribute('hidden', 'true');
}