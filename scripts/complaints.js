const statusButton = (x) => {
    console.log("Button has been clicked !" + x);
    var heading = document.getElementById("solveStatus" + x);
    heading.textContent = "Solved";
    heading.style.color = "green";
}