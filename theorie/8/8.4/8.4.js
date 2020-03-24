const time = () => {
  const date = new Date();
  const hours = (date.getHours() < 10 ? "0" : "") + date.getHours();
  const minutes = (date.getMinutes() < 10 ? "0" : "") + date.getMinutes();
  return `${hours} : ${minutes}`;
};

const set_colors = () => {
  const date = new Date();
  const c = date.getSeconds() * 30;
  clock.style.backgroundImage = `linear-gradient( ${c}deg,  rgba(75,207,250,1) 6.2%, rgba(25,159,249,1) 98.9% )`;
};

let clock = document.getElementById("clock");
let clocktime = document.getElementById("clocktime");

clocktime.innerHTML = time();
clock.style.backgroundColor = set_colors();

window.setInterval(() => {
  clocktime.innerHTML = time();
  set_colors();
}, 1000);

window.setInterval(() => {
  new Audio("./clocktick.mp3").play();
}, 2000); //klinkt als '1 seconde' wanneer ik interval van 2 neem
