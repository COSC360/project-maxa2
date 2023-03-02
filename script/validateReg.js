window.onload = function(){

    document.getElementById("reg").addEventListener("click", function(e){
        var fields = document.getElementsByClassName("required")
        var email = fields[0];
        var user = fields[1];
        var pass = fields[2];

        if(email.value == null || email.value == ""){
            e.preventDefault();
            alert("Enter a valid email");
        }
        if(user.value == null || user.value == ""){
            e.preventDefault();
            alert("Enter a valid username");
        }
        if(pass.value == null || pass.value == ""){
            e.preventDefault();
            alert("Enter a valid password");
        }
      });

}