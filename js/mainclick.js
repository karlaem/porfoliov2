function myFunction() {
    var x = document.getElementById("art");
    var work = document.getElementById("work");
    if (x.style.display === "none") {
      x.style.display = "block";
      work.style.display = "none";
    } else {
      x.style.display = "none";
      work.style.display = "block";
    }
}
function myFunction2() {
    var x = document.getElementById("work");
    var art = document.getElementById("art");
    if (x.style.display === "none") {
      x.style.display = "block";
      art.style.display = "none";
    } else {
      x.style.display = "none";
      art.style.display = "block";
    }
}