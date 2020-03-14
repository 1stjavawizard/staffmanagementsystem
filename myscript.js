$(document).ready(function(){

	//When someone clicks on the navigation links
	$('.nav li').click(function(e){
		$('.nav li').attr('id', ''); //make all navtabs inactive
		$(this).attr('id', 'activetab'); //make the one we clicked active
		
		//hide all of the fieldsets
		$('fieldset').attr('class', 'hidden');

		whichitem=$(this).attr('title'); //get the title of the nav we clicked

		//make the class of what we cleared not hidden
		$("fieldset[title='"+whichitem+"']").attr('class', ''); 
	});
	
	
	//When someone clicks on the previous button
	$('.prev').click(function(e){
		var listItem = document.getElementById('activetab'); //find out which navtab is active
		whichOne=$('li').index(listItem); //get the index of the navtab

		$('.nav li').attr('id', ''); //make all the navtabs inactive
		$(".nav li:eq("+(whichOne-1)+")").attr('id', 'activetab'); //make previous tab active

		$('fieldset').attr('class', 'hidden'); //hide all the fieldsets
		$("fieldset:eq("+(whichOne-1)+")").attr('class', ''); //show the previous fieldset
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




	
});
