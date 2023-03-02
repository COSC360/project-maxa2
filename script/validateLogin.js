window.onload = function(){

    document.getElementById("login").addEventListener("click", function(e){
        var fields = document.getElementsByClassName("required")
        var email = fields[0];
        var pass = fields[1];

        if(email.value == null || email.value == ""){
            e.preventDefault();
            alert("Enter your email");
        }
        if(pass.value == null || pass.value == ""){
            e.preventDefault();
            alert("Enter your password");
        }
      });

}