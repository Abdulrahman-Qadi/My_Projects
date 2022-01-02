let toggleNavstatus = false;

let toggleNav = function() {
	let getSidebar = document.querySelector(".nav-sidebar");
	let getSidebarUl = document.querySelector(".nav-sidebar ul");
	let getSidebarTitle = document.querySelector(".nav-sidebar span");
	let getSidebarLinks = document.querySelectorAll(".nav-sidebar a");

	if (toggleNavstatus == false) {
		getSidebarUl.style.visibility == "visible";
		getSidebar.style.width = "272px";
		getSidebarTitle.style.opacity = "0.5";

		let arrayLength = getSidebarLinks.length;
		for (let i = 0; i < arrayLength; i++) {
			getSidebarLinks[i].style.opacity = "1";
		}

		toggleNavstatus = true;
	}

		else if (toggleNavstatus == true) {
		getSidebarUl.style.visibility == "visible";
		getSidebar.style.width = "50px";
		getSidebarTitle.style.opacity = "0.5";

		let arrayLength = getSidebarLinks.length;
		for (let i = 0; i < arrayLength; i++) {
			getSidebarLinks[i].style.opacity = "0";
		}

		getSidebarUl.style.visibility == "hidden";

		toggleNavstatus = false;
	}
}