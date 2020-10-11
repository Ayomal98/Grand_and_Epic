function openSlideMenu() {
  document.getElementById("side-nav").style.width = "250px";
  document.getElementById("header-container").style.marginLeft = "250px";
}
function closeSlideMenu() {
  document.getElementById("side-nav").style.width = "0px";
  document.getElementById("header-container").style.marginLeft = "0";
}
// document.getElementById("nav-svg").addEventListener("click", function () {
//   document.getElementById("side-nav").style.width = "250px";
//   document.getElementById("header-container").style.marginLeft = "250px";
// });
document.getElementById("btn-login").addEventListener("click", function () {
  document.querySelector(".bg-modal").style.display = "flex";
});

document.querySelector(".close").addEventListener("click", function () {
  document.querySelector(".bg-modal").style.display = "none";
});
