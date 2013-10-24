var mainvideo = document.getElementsByClassName("mainvideo").item(0);
var mixloop = document.getElementsByClassName("mixloop").item(0);

mainvideo.addEventListener('ended', function(event){
	this.parentNode.removeChild(mainvideo);
},false);


window.onscroll = menuShows;

function menuShows(){
	var scrollValueY = window.scrollY;
	// console.log(scrollValueY);
	var menuContainer = document.getElementsByClassName("menu_container").item(0);
	var menuContainerPosY = menuContainer.offsetTop;
	console.log(menuContainerPosY);

	if(scrollValueY > menuContainerPosY){

		var menu_first_column = document.getElementsByClassName("thm_first_column").item(0);
		menu_first_column.classList.add("is-active");
		var menu_second_column = document.getElementsByClassName("thm_second_column").item(0);
		menu_second_column.classList.add("is-active");
		var menu_third_column = document.getElementsByClassName("thm_third_column").item(0);
		menu_third_column.classList.add("is-active");
		var menu_fourth_column = document.getElementsByClassName("thm_fourth_column").item(0);
		menu_fourth_column.classList.add("is-active");
	}
}




