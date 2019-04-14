const hamburger = document.querySelector(".menu-hamburger");
const menuList = document.querySelector(".menu-list");
const menuListItems = document.querySelectorAll(".menu-list li");

hamburger.addEventListener("click", () => {
	menuList.classList.toggle("open");
	hamburger.classList.toggle("active");
});
