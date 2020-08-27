function showTime(){
var  date = new Date();
let hour= date.getHours();
let min = date.getMinutes();
let second= date.getSeconds();
let day = date.getDay();
let exactDate = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
exactDate = exactDate[day];
let dateNumber = date.getDate();
let Month = date.getMonth();
let ExactMonth = ["January","Februrary","March","April","May", "June","July", "August","September","October","November","December"]
ExactMonth = ExactMonth[Month];
hour = hour<10? "0"+hour: hour;
min = min<10? "0"+min: min;
second = second<10? "0"+second: second;
let time = hour +":" +min + ":"+second;
 

document.getElementById("cometime").innerHTML = " "+ time+"    "+ exactDate +"  "+ ExactMonth +" "+dateNumber + ",  "+ date.getFullYear();

setTimeout(showTime, 1000);
}
showTime();

//validating the login form

function ValReg(){
    
    var password1 = document.getElementById("ConPass");
    var password2 = document.getElementById("confPass");
     if(password2.value!=password1.value){
         alert ("Password do not match");
         return false;
     }else{
         true;
     }
    
    }
  

    function validateLog(){
  
        var uname = document.getElementById("logUser");
        var pass = document.getElementById("logPass");
        if(uname.value.trim().length==0)  {
            alert("Username cannot be blank");
            return false;
    }
       else if(uname.value.trim().length<=3 ){
           alert("Username must be 3 or more characters")
            return false;}
    else if(pass.value.trim().length==0)  {
                alert("Password cannot be blank");
                return false;
        }
         
           
       
        
    
        
        else {
           true;
        }
        
    
    }
    var visible = false;

        document.getElementById("login-form").style.visibility = "hidden";
function showLogform(){
      if (visible == false){
          document.getElementById("login-form").style.visibility = "visible";
          visible =true;
      }
   else if (visible == true){
          document.getElementById("login-form").style.visibility = "hidden";
          visible = false;
      }



}
