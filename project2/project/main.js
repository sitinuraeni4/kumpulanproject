// Deklarasi
const img = document.getElementById('img') 
let posx = parseInt(getComputedStyle(img).right, 10);
const tendang = document.getElementById('tendang') 
const tank2 = document.getElementById('tank2');
const sound = document.getElementById("sound")


// Fungsi

function tembak() {
  sound.play()
  tendang.style.top = '-550px'
  setTimeout(() => {
    tendang.style.top = '0px'
  }, 900)
}

function loncat() {
  sound.play()
  img.style.top = '-250px'
  setTimeout(() => {
    img.style.top = '0px'
  }, 900)

  tendang.style.top = '-250px'
  setTimeout(() => {
    tendang.style.top = '0px'
  }, 900)
}

function kekanan() {
    img.style.right= (posx - 100) + "px";
    posx = parseInt(getComputedStyle(img).right, 10);

    tendang.style.right= (posx - 0) + "px";
    posx = parseInt(getComputedStyle(tendang).right, 10);
}
function kekiri() {
    tendang.style.right= (posx + 30) + "px";
    posx = parseInt(getComputedStyle(tendang).right, 10);

    img.style.right= (posx + 0) + "px";
    posx = parseInt(getComputedStyle(img).right, 10);
}

document.addEventListener('DOMContentLoaded', function () {
  // Get the tankmonster2 element
  var tankmonster2 = document.getElementById('tankmonster2');

  // Set initial position
  var isMovingRight = true;
  var currentPosition = 0;

  // Function to update tankmonster2 position
  function updateTankPosition() {
      // Update position based on direction
      currentPosition += isMovingRight ? 5 : -5;

      // Set tankmonster2 position
      tankmonster2.style.left = currentPosition + 'px';

      // Change direction if tankmonster2 reaches the viewport edges
      if (currentPosition >= window.innerWidth - tankmonster2.width || currentPosition <= 0) {
          isMovingRight = !isMovingRight;
      }

      // Request the next animation frame
      requestAnimationFrame(updateTankPosition);
  }

  // Start the animation
  updateTankPosition();
});

// Event
document.addEventListener("keydown", function(event) {
    event.preventDefault();
    const key = event.key; 
    switch (key) { 

      case " ":
        loncat()
      break;
      
      case "ArrowLeft":
        kekiri()
      break;

      case "ArrowRight":
        kekanan()
      break;

      case "z":
        tembak()
      break;

  }
  });