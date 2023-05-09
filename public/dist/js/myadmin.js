if (document.querySelectorAll(".pop_up").length) {
	let pop_up = '.pop_up';
  document.addEventListener('click',function(){
	 $(pop_up).find('ul').addClass('none');
})
	//

let localisation= document.querySelectorAll(pop_up);

  localisation.forEach(item => {
	  let item_localisation = item;
	  const burger = item_localisation.querySelector('.burger');
	  
	  if(burger != null){
        burger.addEventListener('click',function(event){
			event.stopPropagation(); 
			const ul = item_localisation.getElementsByTagName('ul');
			
			if(ul.length){
				ul[0].addEventListener('click',function(event){
				event.stopPropagation();
			});
			let display = true;
			if(ul[0].classList.contains('none') === false){
				display = false;
			}
			 $(pop_up).find('ul').addClass('none');
			  
				if(display){
					  ul[0].classList.toggle('none');
				    }
			  
		    
		}
		
			
			
			
		})
	  }
    });
	
	

}	
/*

if (document.querySelectorAll(".localisation").length) {
$('.localisation').each(function( index ) {
	let item = this;
	$(this).find('.burger').on('click',function(){
		$('ul').addClass('none');
		const ul = $(item).find('ul');
		ul.removeClass('none');
	});
});
}


*/