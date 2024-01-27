function login()
{
    var email = document.getElementById("t1").value;
    var pwd = document.getElementById("t2").value;
    var pwd_expression = 
        /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?@!$%^&*-])/;
    var letter = /^[A-Za-z]+$/;
    var filter = 
        /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(email == "")
    {
        alert("please enter user email id");
    }
    else if (!filter.test(email))
    {
        alert("Invalid Email");
    }
    else if (pwd =="")
    {
        alert("Please enter password");
    }
    else if(!pwd_expression.test(pwd)){
        alert("password must have caps small special char number......")
    }
    else 
    {
        alert("Thank you for log in ");
        window.location = "register.html";
    }

}