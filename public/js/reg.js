function display(x){


    if(x==1){
        document.getElementById("solo").style.display="block";
        document.getElementById("squad").style.display="none";
    }

    else if(x==2){
        document.getElementById("squad").style.display="block";
        document.getElementById("solo").style.display="block";
    }
    else{

        document.getElementById("solo").style.display="block";
        document.getElementById("squad").style.display="none";
    }
    return;
}

