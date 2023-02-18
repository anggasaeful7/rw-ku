const el = document.getElementById("select");
const sec1 = document.getElementById("section_div1");
const sec2 = document.getElementById("section_div2");
const sec3 = document.getElementById("section_div3");
const sec4 = document.getElementById("section_div4");
const sec5 = document.getElementById("section_div5");
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const btn3 = document.getElementById("btn3");
const btn4 = document.getElementById("btn4");
const btn5 = document.getElementById("btn5");

el.addEventListener("change", function handleChange(event) {
  if (event.target.value == "1") {
    sec1.style.display = "block";
    btn1.style.display = "block";
    btn2.style.display = "none";
    btn3.style.display = "none";
    btn4.style.display = "none";
    btn5.style.display = "none";
  } else if (event.target.value == "2") {
    sec1.style.display = "block";
    sec2.style.display = "block";
    btn1.style.display = "none";
    btn2.style.display = "block";
    btn3.style.display = "none";
    btn4.style.display = "none";
    btn5.style.display = "none";
  } else if (event.target.value == "3") {
    sec1.style.display = "block";
    sec2.style.display = "block";
    sec3.style.display = "block";
    btn1.style.display = "none";
    btn2.style.display = "none";
    btn3.style.display = "block";
    btn4.style.display = "none";
    btn5.style.display = "none";
  } else if (event.target.value == "4") {
    sec1.style.display = "block";
    sec2.style.display = "block";
    sec3.style.display = "block";
    sec4.style.display = "block";
    btn1.style.display = "none";
    btn2.style.display = "none";
    btn3.style.display = "none";
    btn4.style.display = "block";
    btn5.style.display = "none";
  } else if (event.target.value == "5") {
    sec1.style.display = "block";
    sec2.style.display = "block";
    sec3.style.display = "block";
    sec4.style.display = "block";
    sec5.style.display = "block";
    btn1.style.display = "none";
    btn2.style.display = "none";
    btn3.style.display = "none";
    btn4.style.display = "none";
    btn5.style.display = "block";
  } else {
    sec1.style.display = "none";
    sec2.style.display = "none";
    sec3.style.display = "none";
    sec4.style.display = "none";
    sec5.style.display = "none";
    btn1.style.display = "none";
    btn2.style.display = "none";
    btn3.style.display = "none";
    btn4.style.display = "none";
    btn5.style.display = "none";
  }
});
