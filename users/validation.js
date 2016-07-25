var xmlHttp
xmlHttp=GetXmlHttpObject()

function login(str)
{
	var msg="";
	var phone_no=document.getElementById("phone_no").value;
	var pwd=document.getElementById("password").value;
		
	if(msg=="")
	{
		var url="login_code.php?phone_no="+phone_no+"&pwd="+pwd;		
		xmlHttp.onreadystatechange=function()
 		{	   
			if(xmlHttp.readyState==4 && xmlHttp.status==200)
  			{
  				var msg=xmlHttp.responseText.trim();
				if(msg=="welcome")
  					window.location="dashboard.php";
				else if(msg=="Invalid")
				{
					window.location="sign_in.php?msg="+msg;				
				}
  				
			}
		}
		xmlHttp.open("POST",url,true);
		xmlHttp.send(null);
	}
	else
		document.getElementById("err_id").innerHTML=msg;
}


function forgot()
{
	var msg="";	
	var phone_no=document.getElementById("phone_no").value;
if(msg=="")	
	{
		var url="forgot_pwd_code.php?phone_no="+phone_no;	
		xmlHttp.onreadystatechange=function()
		{		
			if(xmlHttp.readyState==4 && xmlHttp.status==200)
			{	
				var msg=xmlHttp.responseText.trim(); 
				alert(msg);
				if(msg=="Invalid")
					{				
						var msg="Invalid";
						window.location="forgot.php?msg="+msg;				
					}					
					else if(msg=="success")
					{
						window.location="forgot.php?msg="+msg;				
					}
			}
		}
	}
	xmlHttp.open("POST",url,true);
	xmlHttp.send(null);
}


//Change password start here
function change_pwd(str)
{
	var msg="";
	var curpwd=document.getElementById("cur_pwd").value;
	var newpwd=document.getElementById("new_pwd").value;
	var conpwd=document.getElementById("confirm_pwd").value;
	if (newpwd != conpwd) 
	{
        alert("Passwords do not match.");
     }
	else {
	if(msg=="")
	{
		var url="change_pwd_code.php?curpwd="+curpwd+"&newpwd="+newpwd+"&conpwd="+conpwd;
		xmlHttp.onreadystatechange=function () 
		{
			if (xmlHttp.readyState==4 && xmlHttp.status==200) 
			{
				var msg=xmlHttp.responseText.trim();
				if(msg=="success")
				{
					var msg="Success";
					window.location="change_password.php?msg="+msg;				
				}
				else if(msg=="Invalid")
				{
					window.location="change_password.php?msg="+msg;				
				}
				else
				document.getElementById("err").innerHTML=msg;
			}
		} 		
		xmlHttp.open("post",url,true);
		xmlHttp.send(null);
	}
}
}

//Order Sign In Function Start Here	
function order_signin(str)
{
	
	var city_name=document.getElementById("city_name").value;
	var address=document.getElementById("address").value;
	//var city=document.getElementById("city").value;
	var services=document.getElementById("services").value;
	var sub_services=document.getElementById("sub_services").value;
	var price=document.getElementById("price").value;
	var date=document.getElementById("datepicker").value;
	var time=document.getElementById("time").value;
	var req=document.getElementById("req").value;
	var name=document.getElementById("name").value;
	var email_id=document.getElementById("email_id").value;
	var phone_no=document.getElementById("phone_no").value;
	var pwd=document.getElementById("password").value;
	var payment_mode=document.getElementById("payment_mode").value;
	if(str=="add")
	{
		 var url="order_signin_add.php?address="+address+"&city_name="+city_name+"&services="+services+"&sub_services="+sub_services+"&price="+price+"&date="+date+"&time="+time+"&req="+req+"&name="+name+"&email_id="+email_id+"&phone_no="+phone_no+"&pwd="+pwd+"&payment_mode="+payment_mode+"&action="+str;
	}
	xmlHttp.onreadystatechange=function()
 	        {	   
				if(xmlHttp.readyState==4 && xmlHttp.status==200)
  				{
  					var msg=xmlHttp.responseText.trim(); 
					if(msg=="Inserted")
					{				
						var msg="Inserted";
						
						window.location="dashboard.php?msg="+msg;				
					}					
					else if(msg=="Exist")
					{
						document.getElementById("pno_err").innerHTML="Phone No already exist";
						//window.location="order.php?msg="+msg;				
					}
					else if(msg=="Invalid City")
					{						
						document.getElementById("city_err").innerHTML="Our service not available to this city";
						//window.location="order.php?msg="+msg;				
					}
					else if(msg=="paypal")
					{						
						window.location="payment.php";				
					}
					
				}
			}
			xmlHttp.open("POST",url,true);
			xmlHttp.send(null);
		
}	

//Order Sign Up Function Start Here	
function order_signup(str)
{
	var city_name=document.getElementById("city_name").value;
	var address=document.getElementById("address").value;
	//var city=document.getElementById("city").value;
	var services=document.getElementById("services").value;
	var sub_services=document.getElementById("sub_services").value;
	var price=document.getElementById("price").value;
	var date=document.getElementById("datepicker").value;
	var time=document.getElementById("time").value;
	var req=document.getElementById("req").value;
	var name=document.getElementById("name").value;
	var order_pno=document.getElementById("order_pno").value;
	var payment_mode=document.getElementById("payment_mode").value;
	if(str=="add")
	{
		 var url="postorder_add.php?address="+address+"&name="+name+"&order_pno="+order_pno+"&city_name="+city_name+"&services="+services+"&sub_services="+sub_services+"&price="+price+"&time="+time+"&req="+req+"&order_date="+date+"&payment_mode="+payment_mode+"&action="+str;
	}
	xmlHttp.onreadystatechange=function()
 	        {	   
				if(xmlHttp.readyState==4 && xmlHttp.status==200)
  				{
  					var msg=xmlHttp.responseText.trim();  
					alert(msg);
					if(msg=="Inserted")
					{				
						var msg="Inserted";						
						window.location="dashboard.php?msg="+msg;				
					}					
					else if(msg=="Invalid")
					{
						document.getElementById("city_err").innerHTML="Our service not available to this city";
						//window.location="postorder.php?msg="+msg;				
					}
					else if(msg=="paypal")
					{						
						window.location="payment.php";				
					}
					
				}
			}
			xmlHttp.open("POST",url,true);
			xmlHttp.send(null);
		
}	
//Profile Edit Code start Here
function edit_profile(str)
{
	var name=document.getElementById("name").value;
	var phone_no=document.getElementById("phone_no").value;
	var city=document.getElementById("city").value;
	var address=document.getElementById("address").value;
	var pin_code=document.getElementById("pin_code").value;
	var gender=document.getElementById("gender").value;
	if(str=="add")
	{
		var url="editpro_add.php?name="+name+"&pno="+phone_no+"&city="+city+"&address="+address+"&pin_code="+pin_code+"&gender="+gender+"&action="+str;
		xmlHttp.onreadystatechange=function()
 	        {	   
				if(xmlHttp.readyState==4 && xmlHttp.status==200)
  				{
  					var msg=xmlHttp.responseText.trim(); 					
					if(msg=="Updated")
					{				
						var msg="Updated";
						window.location="edit-profile.php?msg="+msg;				
					}		
					else if(msg=="Error")
					{
						window.location="edit-profile.php?msg="+msg;				
					}
					else if(msg=="Exist")
					{
						document.getElementById("pno_err").innerHTML="Phone No Already Exist";
						//window.location="edit-profile.php?msg="+msg;				
					}
				}
			}
			xmlHttp.open("POST",url,true);
			xmlHttp.send(null);		
	}		
	
}

//sub services select function
function sub_select(str)
{	
	if(str=="select")
  	{
  		document.getElementById("sub_services").options.length=0;
  		var sel=document.getElementById("sub_services");		
  		sel.options[0]=new Option("Select","select"); 
 	}
   else
   {
   	var services=document.getElementById("services").value;  	
  		get_cour_name1(str,services);
 		get_cour_id1(str,services);
  		var dps_name1=cour1;
  		var dps_id1=cour2; 
  		var dpname1=dps_name1.split("#");
  		var dpid1=dps_id1.split("#"); 
  		document.getElementById("sub_services").options.length=0;
  		var sel=document.getElementById("sub_services");
  		//sel.options[0]=new Option("None","None"); 
  		for(var i=1;i<dpid1.length;i++)
  		{
  			sel.options[i]=new Option(dpname1[i-1],dpid1[i-1]); 
  		}	
   }
}
var cour1="";
function get_cour_name1(str)
{
	var url="services_change.php?type="+'name'+"&sub_id="+str;
	xmlHttp.onreadystatechange=function()
	{
		if (xmlHttp.readyState==4)
		{
			cour1=xmlHttp.responseText; 
		}
	}
	xmlHttp.open("POST",url,false);	
	xmlHttp.send(null);
}
var cour2="";
function get_cour_id1(str)
{
	var url="services_change.php?type="+'id'+"&sub_id="+str;
	xmlHttp.onreadystatechange=function()
	{
		if (xmlHttp.readyState==4)
		{
			cour2=xmlHttp.responseText; 
		}
	}
		xmlHttp.open("POST",url,false);	
		xmlHttp.send(null);
}
function price_select(str)
{
	var url="price_change.php?studid="+str;
	xmlHttp.onreadystatechange=function()
	 {   
		if(xmlHttp.readyState==4 && xmlHttp.status==200)
  		{
			var msg1=xmlHttp.responseText.trim();
			document.getElementById("price").value=msg1;
		}
	 }
	xmlHttp.open("POST",url,true);
	xmlHttp.send(null);      
}
//Become a cleaner Function Start Here	
function cleaner(str)
{	
	var email=document.getElementById("email").value;
	var cemail=document.getElementById("cemail").value;
	var fname=document.getElementById("fname").value;	
	var lname=document.getElementById("lname").value;
	var mob_no=document.getElementById("mob_no").value;
	var post_code=document.getElementById("post_code").value;
	var exp=document.getElementById("exp").value;
	var paid_work=document.getElementById("paid_work").value;
	var gender=document.getElementById("gender").value;
	var dob=document.getElementById("datepicker").value;
	var nation=document.getElementById("nation").value;
	var address=document.getElementById("address").value;
	var suburb=document.getElementById("suburb").value;
	var abt=document.getElementById("abt").value;

	if(str=="add")
	{
		 var url="cleaner_add.php?email="+email+"&cemail="+cemail+"&fname="+fname+"&lname="+lname+"&mob_no="+mob_no+"&post_code="+post_code+"&exp="+exp+"&paid_work="+paid_work+"&gender="+gender+"&dob="+dob+"&nation="+nation+"&address="+address+"&suburb="+suburb+"&abt="+abt+"&action="+str;
	}
	xmlHttp.onreadystatechange=function()
 	        {	   
				if(xmlHttp.readyState==4 && xmlHttp.status==200)
  				{
  					var msg=xmlHttp.responseText.trim();  	
					if(msg=="Inserted")
					{				
						var msg="Inserted";
						window.location="apply.php?msg="+msg;				
					}					
					else if(msg=="Error")
					{
						window.location="apply.php?msg="+msg;				
					}
				}
			}
			xmlHttp.open("POST",url,true);
			xmlHttp.send(null);
		
}	

/*  Contact us start here -------------------*/
function contact(str)
{	
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var pho_no=document.getElementById("pho_no").value;	
	var msg=document.getElementById("msg").value;
	
	if(str=="add")
	{
		 var url="contact_add.php?name="+name+"&email="+email+"&pho_no="+pho_no+"&msg="+msg+"&action="+str;
		
	}
	xmlHttp.onreadystatechange=function()
 	        {	   
				if(xmlHttp.readyState==4 && xmlHttp.status==200)
  				{
  					var msg=xmlHttp.responseText.trim();  	
					if(msg=="Inserted")
					{			
						
						var msg="Inserted";
						window.location="contact.php?msg="+msg;				
					}					
					else if(msg=="Error")
					{
						window.location="contact.php?msg="+msg;				
					}
				}
			}
			xmlHttp.open("POST",url,true);
			xmlHttp.send(null);
		
}	


function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    var aVersions = [ "MSXML2.XMLHttp.5.0",
        "MSXML2.XMLHttp.4.0","MSXML2.XMLHttp.3.0",
        "MSXML2.XMLHttp","Msxm12.XMLHTTP","Microsoft.XMLHttp"];

    for (var i = 0; i < aVersions.length; i++) 
	 {
        try {
            var xmlHttp = new ActiveXObject(aVersions[i]);
            return xmlHttp;
            } 
		catch (oError) 
		   {
            //Do nothing
           }
    }
    }
  catch (e)
    {
    }
  }
  if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  } 
return xmlHttp;
}