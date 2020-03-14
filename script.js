(function(){

	$(document).ready(function(){
		//$("#menus").metisMenu();
		
		
		//grab the page height and use it to set  for main page min-height
		var wrapperHeight = $("#wrapper").height();
        $("#main_page").css("min-height", wrapperHeight + "px");

		 
        var navigationheight = $('#navigation').height();
        var mainpageheight = $('#main_page').height();

       
        if(navigationheight > mainpageheight){
            $('#main_page').css("min-height", navigationheight + "px");
        }

        if(navigationheight < mainpageheight){
            $('#main_page').css("min-height", $(window).height()  + "px");
        }

       // when a nav link is clicked 
    $('.nav li').click(function(e){
	//make all navtabs inactive by setting id to empty
		$('.nav li').attr('id', '');
		
    //make the one we clicked active		
		$(this).attr('id', 'activetab'); 
		
	//hide all of the fieldsets
		$('fieldset').attr('class', 'hidden');
     
	//get the title of the nav we clicked
		whichitem=$(this).attr('title'); 

	//make the fieldset we clicked appear by removing the hidden class
		$("fieldset[title='"+whichitem+"']").attr('class', ''); 
	});
    
	
   //When someone clicks on the previous button
	$('.prev').click(function(e){
		//find out which navtab is active
		var listItem = document.getElementById('activetab'); 
		
		//get the index of the navtab
		whichOne=$('li').index(listItem); 
        
		//make all the navtabs inactive
		$('.nav li').attr('id', ''); 
		
		//make previous tab active
		$(".nav li:eq("+(whichOne-1)+")").attr('id', 'activetab'); 
         
		 //hide all the fieldsets
		$('fieldset').attr('class', 'hidden');
       
		//show the previous fieldset	   
		$("fieldset:eq("+(whichOne-1)+")").attr('class', ''); 
	});
	
	
	//When someone clicks on the next button
	$('.next').click(function(e){
		var listItem = document.getElementById('activetab'); //find out which navtab is active
		whichOne=$('li').index(listItem); //get the index of the navtab

		$('.nav li').attr('id', ''); //make all the navtabs inactive
		$(".nav li:eq("+(whichOne+1)+")").attr('id', 'activetab'); //make next tab active

		$('fieldset').attr('class', 'hidden'); //hide all the fieldsets
		$("fieldset:eq("+(whichOne+1)+")").attr('class', ''); //show the next fieldset
	});

	
		
	})
})()
function closenav(elem){
	var studentsnavtog = $("#"+elem);
	studentsnavtog.css("display","none");
	studentsnavtog.css("margin-left","0%");
	
	if(document.getElementsByClassName){
	studentsnavtog = document.getElementsByClassName(elem);
				
		for(var i=0;i<studentsnavtog.length;i++){
			studentsnavtog[i].classList.toggle();
			
			
		}
	}
	
	
}




function opennav(elem){
	var openele = $("#"+elem);
	if(openele.css("display") ==="block"){
		closenav(elem);
	}
	else{
		openele.css("display","block");
		
	}
	
	
}


function tscopen(){
	var cs = document.getElementById("main_page");
	var sm = document.getElementById("navigation");
	
	if(!cs.classList.contains("closed")){
		cs.classList = "closed";
		sm.classList = "closed";
	}
     else if(cs.classList.contains("closed")){
		cs.classList.remove("closed");
		sm.classList.remove("closed");
	 }
	  
	
}











function writedate(){
 var second = new Date().getSeconds();
 var hour = new Date().getUTCHours()+1;
 var mins = new Date().getMinutes()+1;
 var pmam ="PM";
 //var pmhour = (hour>12 && hour <= 24)? hour % 12 :hour;
		  
		
	 
 setInterval(function(){
	 var tim = document.getElementById("timer");
	tim.innerHTML = hour+":"+mins+":"+second+pmam;
	 if(second >=60){
		 second = 01;
		 mins++;
	 }
	 if(mins >= 60){
		 mins = 01;
		 hour++;
	 }
	
	 if(hour >= 0 && hour <12){
        		 
		  pmam ="AM";
	 }
	 else if(hour>12 && hour <= 24){
		 tim.innerHTML = hour % 12 +":"+mins+":"+second+pmam;
		 //hour = pmhour;
		 
	 }
	 second++;
 },1000);
 
}

//writedate();

var a,b,c,d,f,g,h,j,k,l;
 a= document.getElementById("students");
 b = document.getElementById("studentsnav");
 c =  document.getElementById("messages");
 d = document.getElementById("messagesnav");
 f = document.getElementById("alerts"); 
 g = document.getElementById("alertsnav");
 h = document.getElementsByClassName("alignr");
 j = document.getElementById("activitytoggler1");
 k = document.getElementById("activity1");
 l = document.getElementsByClassName("closing");
document.addEventListener("click",function(e){
		 if(a === e.target){
		  b.style.display = "block";
          a.firstElementChild.classList ="fa fa-caret-up";		  
	  }
	  else{
		  for(var i=0;i<h.length;i++){
		  if(h[i] === e.target){
			  h[i].parentElement.style.display ="none";
		  }
		  
	  }
		  b.style.display = "none";
		  a.firstElementChild.classList ="fa fa-caret-down";
	  }
	  
	  if(c === e.target){
		  d.style.display = "block";
          c.firstElementChild.classList ="fa fa-caret-up";			  
	  }
	  else{
		  for(var i=0;i<h.length;i++){
		  if(h[i] === e.target){
			  h[i].parentElement.style.display ="none";
		  }
		  
	  }
		  d.style.display = "none";
		  c.firstElementChild.classList ="fa fa-caret-down";	
	  }
	  
	  if(f === e.target){
		  g.style.display = "block";
          f.firstElementChild.classList ="fa fa-caret-up";			  
	  }
	  else{
		  for(var i=0;i<h.length;i++){
		  if(h[i] === e.target){
			  h[i].parentElement.style.display ="none";
		  }
		  
	  }
		  g.style.display = "none";
		  f.firstElementChild.classList ="fa fa-caret-down";	
	  }
	  
	 
	 }) 

/*function showopen(elem,elem2){
	
	   $(document).on("click",function(e){
		 if(e.relatedTarget === "$(elem)"){
		  $(elem2).style.display = "block";		 
	  }
	  else{
		  $(elem2).style.display = "none";
	  }
	   
	    if($(elem+" "+"i:first-child").hasClass("fa fa-caret-down")){
	   $(elem+" "+"i:first-child").attr("class","fa fa-caret-up");
	   
   }
   else if($(elem+" "+"i:first-child").hasClass("fa fa-caret-up")){
	     $(elem+" "+"i:first-child").attr("class","fa fa-caret-down");
	   
	  }
	  
	  
	  
});

}

showopen("#students","#studentsnav");
showopen("#messages","#messagesnav");
showopen("#alerts","#alertsnav");

*/
function submitlogin(){
	var username = document.getElementsByClassName("logininput")[0].value;
	var password = document.getElementsByClassName("logininput")[1].value;
	var err = document.getElementsByClassName("error")[0];
	var err2 = document.getElementsByClassName("error2")[0];
	if(username === undefined || username===""){
		err.innerHTML = "<p> Please enter a valid username";
		return false;
	}
	else{
		err.innerHTML = "";
		
	}
	if(password === undefined || password===""){
		err2.innerHTML = "<p> Please enter a valid password";
		return false;
	}
	else{
		
		
		
		err2.innerHTML = "";
		
		
	}
	
	if(password !=="" && username !==""){
		
		return true;
	}
}

/* 
function showopen(elem,elem2,close1,close2){
	 $(elem).on("click",function(e){
	   if($(elem2).css("display") ==="block"){
		   $(elem2).css("display","none");
	   }
	   else if($(elem2).css("display") ==="none"){
		   $(elem2).css("display","block");
		   $(elem2).slideDown(200);
	   }
	    if($(elem+" "+"i:first-child").hasClass("fa fa-caret-down")){
	   $(elem+" "+"i:first-child").attr("class","fa fa-caret-up");
	   
   }
   else if($(elem+" "+"i:first-child").hasClass("fa fa-caret-up")){
	     $(elem+" "+"i:first-child").attr("class","fa fa-caret-down");
	   
	  }
	  
	  
	  if(e.relatedTarget !== window){
		 $(close1).css("display","none");
		 $(close2).css("display","none");
	  }
});

}

showopen("#students","#studentsnav","#messagesnav","#alertsnav");
showopen("#messages","#messagesnav","#studentsnav","#alertsnav");
showopen("#alerts","#alertsnav","#studentsnav","#messagesnav");


*/