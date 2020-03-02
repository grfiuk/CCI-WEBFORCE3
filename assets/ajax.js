function ajax(){
    let xhr = null;

    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }else if(window.ActiveXObject){
        try{
            xhr = new ActiveXObject("Msxm12.XMLHTTP");
        }
        catch(e){
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }else{
        alert("mettez a jour votre navigateur");
        xhr = false;
    }
}