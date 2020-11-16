var currentPage=0; //initialize the current page to 0
showPage(currentPage);

//displaying the specific page for the specific form
function showPage(n){
    var x=document.getElementsByClassName("form-page");
    console.log(x);
    n[x].style.display="flex";
    
}
