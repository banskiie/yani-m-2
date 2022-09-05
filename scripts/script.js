const intimaBodaCard = document.getElementById("intima-boda-card");
const fullCard = document.getElementById("full-card");
const otdCard = document.getElementById("otd-card");
const intimaBodaText = document.getElementById("intima-boda-title");
const fullText = document.getElementById("full-title");
const otdText = document.getElementById("otd-title");

function showIntimaBoda() {
  intimaBodaText.style.opacity = 1;
}

function hideIntimaBoda() {
  intimaBodaText.style.opacity = 0;
}

intimaBodaCard.addEventListener("mouseover", showIntimaBoda);
intimaBodaCard.addEventListener("mouseout", hideIntimaBoda);

function showFull() {
  fullText.style.opacity = 1;
}

function hideFull() {
  fullText.style.opacity = 0;
}

fullCard.addEventListener("mouseover", showFull);
fullCard.addEventListener("mouseout", hideFull);

function showOTD() {
  otdText.style.opacity = 1;
}

function hideOTD() {
  otdText.style.opacity = 0;
}

otdCard.addEventListener("mouseover", showOTD);
otdCard.addEventListener("mouseout", hideOTD);
