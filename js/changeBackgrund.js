function changeColor() {
  const d = new Date();
  let hour = d.getHours();
  if (hour > 1 && hour < 10) {
    document.getElementById("loading").style.backgroundColor = "rgb(247, 220, 111)";
  }
  else if (hour > 10 && hour < 17) {
    document.getElementById("loading").style.backgroundColor = "rgb(133, 193, 233)";
  }
  else {
    document.getElementById("loading").style.backgroundColor = "rgb(26, 82, 118)";
  }
}
changeColor();