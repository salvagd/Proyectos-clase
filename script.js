var box = document.getElementById("box");
box.addEventListener("mouseenter", function(){
box.style.width = "+25%";
box.style.height = "+25%";
box.style.backgroundColor="#3498DB ";
box.style.border = "dotted";
} );

box.addEventListener("mouseleave", function(){
  box.style.width = (parseInt(box.style.width) - 10 ) + "px" ;
  box.style.height = (parseInt(box.style.height) - 10 ) + "px" ;
  box.style.backgroundColor="#E74C3C";
  box.style.border = "dashed";
});
box.addEventListener("click", function() {
    box.style.width = "+5%";
    box.style.height = "+5%";
    box.style.backgroundColor = "#F7DC6F";
    box.style.border = "double";
});