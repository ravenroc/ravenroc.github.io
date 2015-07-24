$(function(){

	$(document).on("click", "a[href='#'], a[href='']", function(e){  e.preventDefault();  });
	$(document).on("click", "a[rel='external']", function(e){  e.preventDefault(); window.open($(e.currentTarget).attr("href"), "_blank");  });

	$(document).on("click", "nav.main .nav-item", function(e){
		e.preventDefault();
		var sec = $(e.currentTarget).data("section");
		$("main > section").removeClass("active");
		$("main > section."+sec).addClass("active");
	});

});