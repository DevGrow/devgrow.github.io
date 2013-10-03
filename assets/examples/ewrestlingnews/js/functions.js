$(document).ready( function(){ 
	sfHover = function() {
		var sfEls = document.getElementById("nav-list").getElementsByTagName("LI");
		for (var i=0; i<sfEls.length; i++) {
			sfEls[i].onmouseover=function() {
				this.className+=" sfhover";
			}
			sfEls[i].onmouseout=function() {
				this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
			}
		}
	}
	
	var navselect = $("#nav a.selected").parents("li").attr("class");
	$("#nav").attr('class', navselect);
	$("#nav li a").click(function(){
		$("#nav li a").removeClass("selected");
		$(this).addClass("selected");
		var newselect = $(this).parents("li").attr("class");
		$("#nav").attr('class', newselect);
		return false;
	});
	
	$(".tabbed").hide(); //Hide all content
	$("ul.tabs li:first").addClass("selected").show(); //Activate first tab
	$(".tabbed:first").show(); //Show first tab content

	$("ul.tabs li a").click(function() {

		$("ul.tabs li a").removeClass("selected"); //Remove any "active" class
		$(this).addClass("selected"); //Add "active" class to selected tab
		$(".tabbed").hide(); //Hide all tab content

		var activeTab = $(this).attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).show(); //Fade in the active ID content
		return false;
	});
	
});

$(function() {
	$('.tip').tipsy({
		fade: true,
		gravity: 'w'
	});
});
