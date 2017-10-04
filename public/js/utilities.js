    function myFunction() {
    var x = document.createElement("TEXTAREA");
    x.name="domicilio[]";
    var div = document.createElement("Div");
    div.class="form-group";
    div.appendChild(x)
    var f = document.getElementById("form");
    var guardar = document.getElementById("guardar");
    f.insertBefore(div,guardar) ;
    
   
    
}


