// main.js

const img = document.getElementById('img');
const scrollText = document.querySelector('.scroll-text');

function move(direction) {
  let topValue = parseInt(img.style.top) || 0;
  let leftValue = parseInt(img.style.left) || 0;

  switch (direction) {
    case "ArrowLeft":
      leftValue -= 20;
      break;
    case "ArrowRight":
      leftValue += 20;
      break;
    case "ArrowUp":
      topValue -= 20;
      loncat();
      break;
    case "ArrowDown":
      topValue += 20;
      bawah();
      break;
      case "a":
      leftValue -= 20;
      break;
    case "d":
      leftValue += 20;
      break;
    case "w":
      topValue -= 20;
      loncat();
      break;
    case "s":
      topValue += 20;
      bawah();
      break;
  }

  img.style.top = `${topValue}px`;
  img.style.left = `${leftValue}px`;

}

document.addEventListener("keydown", function (event) {
  event.preventDefault();
  const key = event.key;

  switch (key) {
    case "ArrowLeft":
    case "ArrowRight":
    case "ArrowUp":
    case "ArrowDown":
    case "a":
    case "d":
    case "w":
    case "s":
      move(key);
      break;
  }
});

function loncat() {
  img.style.top = '-250px';
  setTimeout(() => {
    img.style.top = '0px';
  }, 900);
}

function bawah() {
  img.style.top = '250px';
  setTimeout(() => {
    img.style.top = '0px';
  }, 900);
}
function setScrollText(text) {
  scrollText.querySelector('span').textContent = text;
}
