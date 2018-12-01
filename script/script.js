$(function() {  
   
    $("html").niceScroll();
    
    // full window height 
    $("header,.aboutus").height($(window).height());

   // dispay form on click log in 
    $(".logspan").click(
        function(){              
            $(".mid").fadeOut(500);
            $(".login").fadeIn(1500);   });
                           
                 
    // dispay form on click sign up
     $(".signspan").click(
        function(){
            $(".signup").fadeIn(1500);  
            $(".mid").fadeOut(500); });
    
    // animate scroll to about
    $(".about").click(
    function(){
        $("html,body").animate({
            scrollTop:$(".aboutus").offset().top},1000);
    });
    
    // on click spaninfo  read more detils
    $(".s1").click(
    function(){$(".c1").fadeIn();});
      $(".s2").click(
    function(){$(".c2").fadeIn();});
    
    //nbar next back
   
        //chiking function 
    function chiker(){
        if($('.salepro:first').hasClass("trep")) 
            $(".nbar .back").fadeOut();
        else 
            $(".nbar .back").fadeIn();  
        
        if($('.salepro:last').hasClass("stock")) 
            $(".nbar .next").fadeOut();
        else 
            $(".nbar .next").fadeIn();   
    };
            //coall function chiker
    chiker();
    //  next back function 
    $(".nbar i").click(function(){
        if($(this).hasClass('next'))
        {
            $(".salepro.trep").fadeOut(00,function(){
                $(this).removeClass('trep').next(".salepro").addClass('trep');
                $(".salepro.stock").removeClass('stock').next(".salepro").addClass('stock').fadeIn(00);
                chiker();
            });
        }else{
             $(function(){
                 $(".salepro.trep").removeClass('trep').prev(".salepro").addClass('trep').fadeIn(00);
                $(".salepro.stock").fadeOut(00).removeClass('stock').prev(".salepro").addClass('stock');
                chiker();
            });
        }
    });
      $(".salepro").click(
    function(){
		 $(".buy").fadeIn();  
            
    });
$(".probuy").click(
    function(){
		 $(".buy").fadeIn();  
		$("html,body").animate({
            scrollbottom:$(".buy").offset().top},1000);
            
    });

});