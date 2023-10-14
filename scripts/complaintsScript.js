const statusButton = (x) => {
    console.log("Button has been clicked !" + x);
    var heading = document.getElementById("solveStatus" + x);
    heading.textContent = "Solved";
    heading.style.color = "green";
}

function abc(btn) {
  console.log(btn.id);
    document.getElementById(btn.id).parentElement.children[1].style.display = "block";
   
}

function close1(btn){
  document.getElementById(btn.id).parentElement.children[1].style.display = "none";
}
modal=document.getElementsByClassName("modal");


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}