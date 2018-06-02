$(document).ready(function() {
  console.log();
  $("#burger").on("click", function(){
    $("#burger").toggleClass("active");
  	$("#burgermain").toggleClass("active");
  	$("#navigation").toggleClass("active");
  	$("#navigation-ul").toggleClass("active");
  	$("#navigation-a1").toggleClass("active");
  	$("#navigation-a2").toggleClass("active");
  	$("#navigation-a3").toggleClass("active");
  	$("#text-auto-red").toggleClass("active");
  	$("#text-auto").toggleClass("active");
  });
});

$(document).ready(function(){
    $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
        scrollTop: $(hash).offset().top
        }, 900, function(){
      window.location.hash = hash - 100;
      });
    }
    });
});