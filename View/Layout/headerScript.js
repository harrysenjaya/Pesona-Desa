var currentLink = window.location.href;
var parts = currentLink.split("/");
var result = parts[parts.length - 1];
if(result == "stay"){
    document.getElementById('stay').className+= " active";
}
else{
    document.getElementById('experience').className+= " active";
}


