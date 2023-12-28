function validation(){
    if(document.Formfill.Username.value==""){
        document.getElementById("result").innerHTML =" Enter Full name*";
        return false;
    }
    else if(document.Formfill.Email.value==""){
        document.getElementById("result").innerHTML ="Enter Email*";
        return false;
    }
    else if(document.Formfill.Subject.value==""){
        document.getElementById("result").innerHTML ="Enter Subject*";
        return false;
    }
    else if(document.Formfill.AdditionalDetail.value==""){
        document.getElementById("result").innerHTML ="Give a description *";
        return false;
    }
}
    