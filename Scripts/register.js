
function val()
{
    console.log('hello');
    //Manufacturer Name 
    var mn = false;
    var manufacturerName = document.getElementById('manufacturerName').value;
    if(manufacturerName == "")
    {
       document.getElementById('manufacturerNameMSG').innerHTML = "Please Enter your Manufacturer Name";
       mn = false;
    }
    else
    {
        if(manufacturerName.length >= 2)
        {
            var i = 0;
            while(i < manufacturerName.length)
            {
                if(!((manufacturerName[i]>='A' && manufacturerName[i]<='Z') || (manufacturerName[i]>='a' && manufacturerName[i]<='z')))
                {
                    document.getElementById("manufacturerName").innerHTML = "invalid Name!!";
                    mn = false;
                }
                i = i +1;
            }
            document.getElementById("manufacturerName").innerHTML = "";
            mn = true;
        }
        else
        {
            document.getElementById("manufacturerName").innerHTML = "at least 2 words";
            mn = false;
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
    else
    {
        if(manufacturerID.length == 6)
        {
            if(manufacturerID[0] == 'M' && manufacturerID[1] == '-' && (manufacturerID[2]>='0' && manufacturerID[2]<='9') && (manufacturerID[3]>='0' && manufacturerID[3]<='9') && (manufacturerID[4]>='0' && manufacturerID[4]<='9') && (manufacturerID[5]>='0' && manufacturerID[5]<='9'))
            {
                document.getElementById('manufacturerIDMSG').innerHTML="";
                mid = true;
            }
            else
            {
                document.getElementById('manufacturerIDMSG').innerHTML = "Invalid ID";
                mid = false;                
            }
        }
    }

    //Owner Name
    var on = false;
    var ownerName = document.getElementById('ownerName').value;
    if(ownerName == "")
    {
        document.getElementById('ownerNameMSG').innerHTML = "Please Enter Owner Name";
        on = false;
    }
    else
    {
        if(ownerName.length < 30)
        {
            var i = 0
            while(i <= ownerName.length)
            {
                if((ownerName[i] >= 'A' && ownerName[i] >= 'Z') ||  (ownerName[i] >= 'a' && ownerName[i] >= 'z'))
                {
                    document.getElementById('ownerNameMSG').innerHTML = "";
                    on = true;
                }
                else
                {
                    document.getElementById('ownerNameMSG').innerHTML = "Invalid Syntex";
                    on = false;
                }
            }
        }
        else
        {
            document.getElementById('ownerNameMSG').innerHTML = "Name is too long";
            on = false;
        }
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
    if (phone == "")
    {
        document.getElementById('phoneMSG').innerHTML="Must be filled up";
        phn = false;
    }
    else
    {
        if(phone.length < 20)
        {
            document.getElementById('phoneMSG').innerHTML="";
            phn  =true;
        }
        else
        {
            document.getElementById('phoneMSG').innerHTML="Invalid";
            phn  =false;
        }
    }

    //Address
    var address = document.getElementById('address').value;
    var ads = false;
    if (address == "")
    {
        document.getElementById('addressMSG').innerHTML="Must be filled up";
        ads = false;
    }
    else
    {
        document.getElementById('addressMSG').innerHTML="";
        ads  =true;
    }

    //TRADE Number
    var tradeNember = document.getElementById('tradeNumber').value;
    var tn = false;
    if (tradeNember == "")
    {
        document.getElementById('tradeNumberMSG').innerHTML="Must be filled up";
        tn = false;
    }
    else
    {
        if(tradeNember.length < 11)
        {
            document.getElementById('tradeNumberMSG').innerHTML="";
            tn  =true;
        }
        else
        {
            document.getElementById('tradeNumberMSG').innerHTML="Invalid Number.";
            tn  =false;
        }
    }

    //password
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var pass = false;
    var conpass = false;
    if((password.length == 8) && (confirmPassword.length == 8))
    {
        if(password == confirmPassword)
        {
            document.getElementById('passwordMSG').innerHTML = "";
            var pass = true;
            var conpass = true;
        }
        else
        {
            document.getElementById('passwordMSG').innerHTML = "Password and Confirm Password is not match."
            var pass = false;
            var conpass = false;
        }
    }
    else
    {
        document.getElementById('passwordMSG').innerHTML = "Too long. Must be 8 digit.";
        var pass = false;
        var conpass = false;
    }


    if(mn && mid && on && eml && phn && ads && tn && pass && conpass)
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
        document.getElementById('manufacturerNameMSG').innerHTML="";
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
      document.getElementById('ownerNameMSG').innerHTML="";
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

function removerAddress()
{
    var address =document.getElementById('address').value;
    if(address!="")
    {
      document.getElementById('addressMSG').innerHTML="";
    }
}

function removerTradeNumber()
{
    var tradeNumber =document.getElementById('tradeNember').value;
    if(tradeNumber!="")
    {
      document.getElementById('tradeNumberMSG').innerHTML="";
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
