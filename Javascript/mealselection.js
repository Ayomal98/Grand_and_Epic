function breakfastTime() {
  document.getElementById("breakfast-times").style.display = "inline";
}
document.getElementById("lunch-period").addEventListener("click", function () {
  document.getElementById("lunch-time").style.display = "inline";
});
document.getElementById("dinner-period").addEventListener("click", function () {
  document.getElementById("dinner-time").style.display = "inline";
});
