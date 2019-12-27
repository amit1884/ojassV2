$(document).ready(function(){
	console.log("jquery loaded");

	
	$(document).on('click','.event-name',function(e){
		e.preventDefault();
		$('.event-img').hide();
		$('.load-img').hide();
		
		$('.details').children().hide();

		$('*').removeClass('selected');
		$(this).addClass('selected');
		var eventname=$(this).attr('name');
		eventname=eventname.replace(/\s/g, '').replace(/\(|\)/g, '').replace(/&/g,"").replace(/'/g, '').replace(/!/g,"").replace(/,/g,"");
		console.log(eventname);
		$('.event-wrapper').hide();
		$('.event-wrapper').filter('#'+eventname).fadeIn();
		$('.'+eventname+'.about').fadeIn();
		$('#'+eventname).find('[name="about"]').addClass('selected');

		$(document).on('click','.sidebarmenu > *',function(e){
			//Shows the three sub-event menu tabs and about section is open
			e.preventDefault();
			var name=$(this).attr('name');
			//Adds selected class to clicked button
			$(this).parent().children('a').removeClass('selected');
			$(this).addClass('selected');
			//Shows about text
			$('.details').children().hide();
			$('.'+name+'.'+eventname).fadeIn();
		})
	})


	//For displaying of text in the loader
	// var blink_speed = 2000;
	// var wordArray = ['Searching for events...','Fetching  Events  from  Space...', 'Sending signals...', 'Almost there...','Loading...'];
	// var count=0;
	// var t = setInterval(function () {
	//     var ele = document.getElementById('loadText');
	    
	//     if(ele)
	//     ele.innerHTML = wordArray[count++];
	    
	//     if(count===wordArray.length)
	//       count=0;
	  
	// }, blink_speed);

})
