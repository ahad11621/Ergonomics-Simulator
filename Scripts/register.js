
function val()
{
    //Manufacturer Name 
  var mn=false;
  var manufacturerName = document.getElementById('manufacturerName').value;
  if(manufacturerName=="")
  {
    document.getElementById('manufacturerNammMSG').innerHTML="cannot be empty";
    mn=false;
  }
  else
  {
      if((manufacturerName[0]>='A' && manufacturerName[0]<='Z') ||(manufacturerName[0]>='a' && manufacturerName[0]<='z'))
      {
          if(manufacturerName.length>=2)
          {
              var i=0;
              while(i<manufacturerName.length)
              {
                  if(!((manufacturerName[i]>='A' && manufacturerName[i]<='Z') ||(manufacturerName[i]>='a' && manufacturerName[i]<='z') || manufacturerName[i]=='.' || manufacturerName[i]=='-' || manufacturerName[i]==' '))
                  {
                      document.getElementById('manufacturerNammMSG').innerHTML="Invalid!!";
                      mn=false;
                    }
                    i=i+1;
                }
        document.getElementById('manufacturerNammMSG').innerHTML="";
        mn=true;
      }
      else
      {
        document.getElementById('manufacturerNammMSG').innerHTML="at least 2 words";
        mn=false;
      }
    }
    else
    {
      document.getElementById('manufacturerNammMSG').innerHTML="Must start with a letter";
      mn=false;
    }
  }


    //Manufacturer ID
    var mid = false;
    var manufacturerID = document.getElementById('manufacturerID').value;
    if(manufacturerID == "")
    {
       document.getElementById('manufacturerIDMSG').innerHTML = "Please Enter your Manufacturer ID like M-1234";
       mid = false;
    }
    else if(manufacturerID[0] == 'M' && manufacturerID[1] == '-' && (manufacturerID[2]>='0' && manufacturerID[2]<='9') && (manufacturerID[3]>='0' && manufacturerID[3]<='9') && (manufacturerID[4]>='0' && manufacturerID[4]<='9') && (manufacturerID[5]>='0' && manufacturerID[5]<='9'))
    {
        document.getElementById('manufacturerIDMSG').innerHTML="";
        mid = true;
    }
    else
    {
        document.getElementById('manufacturerIDMSG').innerHTML = "Invalid ID";
        mid = false; 
    }

    //Owner Name
    var on = false;
    var ownerName = document.getElementById('ownerName').value;
    if(ownerName == "")
    {
        document.getElementById('ownermanufacturerNammMSG').innerHTML = "Please Enter Owner Name";
        on = false;
    }
    else if((ownerName[i] >= 'A' && ownerName[i] >= 'Z') ||  (ownerName[i] >= 'a' && ownerName[i] >= 'z')){
        document.getElementById('ownermanufacturerNammMSG').innerHTML = "";
        on = true;
    }
    else
    {
        document.getElementById('ownermanufacturerNammMSG').innerHTML = "Invalid !";
        on = false;
    }

    //EMAIL
    var email = document.getElementById('email').value;
    var eml = false;
    if (email == "")
    {
        document.getElementById('emailMSG').innerHTML="Must be filled up";
        eml = false;
    }
    else
    {
        document.getElementById('emailMSG').innerHTML="";
        eml  =true;
    } 


    //Phone
    var phone = document.getElementById('phone').value;
    var phn = false;
    if (phone == "" || phone.length > 11)
    {
        document.getElementById('phoneMSG').innerHTML="Must be filled up";
        phn = false;
    }
    else
    {
        document.getElementById('phoneMSG').innerHTML="";
        phn  = true;
    }

    //password
    var password = document.getElementById('password').value;
    var pass = false;

    if (password == "" || !(password.length > 6))
    {
        document.getElementById('passwordMSG').innerHTML="Invalid!";
        pass = false;
    }
    else
    {
        document.getElementById('passwordMSG').innerHTML="";
        pass  =true;
    }

    var conPassword = document.getElementById('confirmPassword').value;
    var conpass = false;

    if (conPassword == password)
    {
        document.getElementById('cpasswordMSG').innerHTML="Invalid!";
        conpass = false;
    }
    else
    {
        document.getElementById('cpasswordMSG').innerHTML="";
        conpass  =true;
    }

    


    if(mn && mid && on && eml && phn && pass && conpass)
    {
        return true;
    }
    else
    {
        return false;
    }

}



function removermanufacturerName()
{
    var manufacturerName =document.getElementById('manufacturerName').value;
    if(manufacturerName!="")
    {
        document.getElementById('manufacturermanufacturerNammMSG').innerHTML="";
    }
}

function removermanufacturerID()
{

    var manufacturerID =document.getElementById('manufacturerID').value;
    if(manufacturerID!="")
    {
        document.getElementById('manufacturerIDMSG').innerHTML="";
    }
}

function removerOwnerName()
{
    var ownerName =document.getElementById('ownerName').value;
    if(ownerName!="")
    {
      document.getElementById('ownermanufacturerNammMSG').innerHTML="";
    }
}

function removerEmail()
{
    var email =document.getElementById('email').value;
    if(email!="")
    {
      document.getElementById('emailMSG').innerHTML="";
    }
}

function removerPhone()
{
    var phone =document.getElementById('phone').value;
    if(phone!="")
    {
      document.getElementById('phoneMSG').innerHTML="";
    }
}

function removerPassword()
{
    var password =document.getElementById('password').value;
    if(password!="")
    {
      document.getElementById('passwordMSG').innerHTML="";
    }
}

function removerConfirmPassword()
{
    var confirmPassword =document.getElementById('confirmPassword').value;
    if(confirmPassword!="")
    {
      document.getElementById('passwordMSG').innerHTML="";
    }
}
