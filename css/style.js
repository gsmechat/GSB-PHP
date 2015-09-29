function verif() {
    return confirm("Etes vous sur de vouloir vous déconnecter ?");
}




function getRequeteHttp()
{
    var requeteHttp;
    if (window.XMLHttpRequest)
    {   // Mozilla
        requeteHttp=new XMLHttpRequest();
        if (requeteHttp.overrideMimeType)
        { // problème firefox
            requeteHttp.overrideMimeType('text/xml');
        }
    }
    else
    {
        if (window.ActiveXObject)
        {   // C'est Internet explorer < IE7
            try
            {
                requeteHttp=new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch(e)
            {
                try
                {
                    requeteHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch(e)
                {
                    requeteHttp=null;
                }
            }
        }
    }
    return requeteHttp;
}

//------------------------------- CHOISIE CARACTERISTIQUE DESCRIPTIF ORDI  --------------------------------------

function envoyerRequete(url,idCateg)
{
    var requeteHttp=getRequeteHttp();
    if (requeteHttp==null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        
        requeteHttp.open('GET',url + '?categ=' + escape(idCateg),true);
        requeteHttp.onreadystatechange=
                                                    function() {recevoirReponse(requeteHttp);};
        requeteHttp.send(null);
        console.log(requeteHttp);

    }
    return;
}
function recevoirReponse(requeteHttp)
{
    if (requeteHttp.readyState==4)
    {
        if (requeteHttp.status==200)
        {
            
            traiterReponse(requeteHttp.responseText);
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée");
        }
    }

}

function traiterReponse(reponse)
{
    document.getElementById("nbPdt").innerHTML=reponse;
}

//------------------------------- CHOISIE MACHINE  -------------------------------------- 

function envoyerRequeteOrdi(url,ordi)
{
    var requeteHttpOrdi=getRequeteHttp();
    if (requeteHttpOrdi==null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        
        requeteHttpOrdi.open('GET',url + '?ordi=' + escape(ordi),true);
        requeteHttpOrdi.onreadystatechange=
                                                    function() {recevoirReponseOrdi(requeteHttpOrdi);};
        requeteHttpOrdi.send(null);
        console.log(requeteHttpOrdi);

    }
    return;
}

function recevoirReponseOrdi(requeteHttpOrdi)
{
    if (requeteHttpOrdi.readyState==4)
    {
        if (requeteHttpOrdi.status==200)
        {
            
            traiterReponseOrdi(requeteHttpOrdi.responseText);
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée");
        }
    }

}

function traiterReponseOrdi(reponse)
{
 //   document.getElementById("ordinateur_select").innerHTML=reponse;

 document.getElementById("nbPdt").innerHTML=reponse;
}

//------------------------------- CHOISIE TYPE  --------------------------------------

function envoyerRequeteType(url,type)
{

    if(type ==="Hardware" )
    {
        document.getElementById('composant').style.display = "block";
    }else{
        document.getElementById('composant').style.display = "none";
    }

    var requeteHttpType=getRequeteHttp();
    if (requeteHttpType==null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        
        requeteHttpType.open('GET',url + '?type_select=' + escape(type),true);
        requeteHttpType.onreadystatechange=
                                                    function() {recevoirReponseType(requeteHttpType);};
        requeteHttpType.send(null);
        console.log(requeteHttpType);

    }
    return;
}

function recevoirReponseType(requeteHttpType)
{
    if (requeteHttpType.readyState==4)
    {
        if (requeteHttpType.status==200)
        {
            
            traiterReponseType(requeteHttpType.responseText);
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée");
        }
    }

}

function traiterReponseType(reponse)
{
 //   document.getElementById("type_select").innerHTML=reponse;
document.getElementById("nbPdt").innerHTML=reponse;
}

//------------------------------- CHOISIE COMPOSANT  --------------------------------------

function envoyerRequeteComposant(url,composant)
{
    var requeteHttpComposant=getRequeteHttp();
    if (requeteHttpComposant==null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        
        requeteHttpComposant.open('GET',url + '?composant_select=' + escape(composant),true);
        requeteHttpComposant.onreadystatechange=
                                                    function() {recevoirReponseComposant(requeteHttpComposant);};
        requeteHttpComposant.send(null);
        console.log(requeteHttpComposant);

    }
    return;
}

function recevoirReponseComposant(requeteHttpComposant)
{
    if (requeteHttpComposant.readyState==4)
    {
        if (requeteHttpComposant.status==200)
        {
            
            traiterReponseComposant(requeteHttpComposant.responseText);
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée");
        }
    }

}

function traiterReponseComposant(reponse)
{
//    document.getElementById("composant_select").innerHTML=reponse;
document.getElementById("nbPdt").innerHTML=reponse;
}

function affiche_composant(){
            if(document.getElementById('ici').value == 'Hardware' ){
                document.getElementById('composant').style.display = "block";
                document.getElementById('changer').style.display = "block"; 
            }
            else{
                document.getElementById('composant').style.display = "none";
                document.getElementById('changer').style.display = "none";
            }
}

function type_materiel(type){
            if(type == "Peripherique")
                document.getElementById('periph').style.display = "block";
            else
                document.getElementById('periph').style.display = "none";
}