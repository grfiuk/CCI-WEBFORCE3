<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <script>
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

    </script>
</body>
</html> 