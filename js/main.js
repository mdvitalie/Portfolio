$(document).ready(function(){

  //Calling the mobileMenu() function
  mobileMenu();
  //calling accordion() function
  accordion();
  scroll();
  addEvents();


});//end of the ready function

//JQuery Event Listener
function addEvents() {
  //calling the contact formValidation ()
	$('#formValidate').click(formValidation);

}


//Scroll function
function scroll(){
  //Scroll function
  	$(".scroll").click(function(event){
  		event.preventDefault();
  		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
  	});

    //back to top button function
   $('body').prepend('<a href="#header" class="back-to-top scroll" aria-label="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>');

    $(window).scroll(function(){
      if($(window).scrollTop() > 400){
        $('a.back-to-top').fadeIn("fast");
      }else{
        $('a.back-to-top').fadeOut("fast");
      }
    })

    $('a.back-to-top').click(function(){
      $('html,body').animate({
        scrollTop: 0
      }, 1000);
      return false;
    });

}//End of Scroll() function

//ACCORDION function
function accordion(){
  //Accordion function
  $('#accordion').accordion();

}//End of accordion() function

//Mobile menu function
function mobileMenu(){
  //nav burger menu
  $(".menu-icon").click(function(){
    $(".menu-icon").toggleClass("active")
  })

  $(".menu-icon").click(function(){
    $(".sidebarNav").toggleClass("active")
  })

  $(".autohide").click(function(){
     $(".sidebarNav").toggleClass("active")
     $(".menu-icon").toggleClass("active")
   })//End of nav burger menu

} //End Of mobileMenu() function

/*##################### Contact form validation  #####################*/

//contact form imput id's
var fields = ["name","email","phone","message"];
//This script validats the contact form  fields
function formValidation(){
//Loops through the contact form inputs
  for(i=0; i<fields.length; i++)
  {
// if no value in the input  will alert the user to type some value
    if( document.getElementById(fields[i]).value=="" )
    {
      document.getElementById(fields[i]).focus();
       var err =document.getElementById(fields[i]);
       err.style.borderBottom="2px dotted red";
      var displError=document.getElementById("errorMes");
      displError.innerHTML = "All fields must be filled *";
      displError.style.color="red";
      // return false;
    }else{
      var err=document.getElementById(fields[i]);
      // err.style.borderBottom="2px solid green";
      err.style.borderBottom="";
    }
  }

}


/*##################### End of  Contact form validation  #####################*/
