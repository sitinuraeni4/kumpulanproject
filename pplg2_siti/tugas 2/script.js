const mobil = document.getElementById('mobil2');
let canTriggerEvent = true;

mobil.addEventListener('mouseover', () => {
  if (canTriggerEvent) {
    canTriggerEvent = false;

    mobil.style.top = '-100px'; // loncatin si mobilnya sebanyak 150px

    setTimeout(() => {
      mobil.style.top = '0px'; //jatuhin lagi mobilnya ke tempat semula
    }, 1000);
    setTimeout(() => {
        canTriggerEvent = true; // bolehin si eventnya buat ke trigger lagi setelah dijeda 1 detik
    }, 1500);
  }
});
const playerScore = document.getElementById("score")

    let score = 0;
    let interval = null;

    let jumlahScore = () => {
      score++;
      playerScore.innerHTML = `Score : ${score} `
    };
    function jump(){
        if(char.classList != "animate"){
          char.classList.add("animate");
        }
        setTimeout(function(){
          char.classList.remove("animate")
        },500)
          let score = 0
          interval = setInterval(jumlahScore, 100)
        }
  
        const ifHitBatu = setInterval(function(){
          const charBottom = parseInt(window.getComputedStyle(char).getPropertyValue("bottom"))
          const batuLeft = parseInt(window.getComputedStyle(batu).getPropertyValue("left"))
        if(batuLeft < 120 && batuLeft > 0 && charBottom <=0 ){
          batu.style.animation = "none"
          batu.style.display = "none"
          if(confirm("mobil kamu nabrak batu, mulai ulang?")){
            window.location.reload()
          }
        }
        })
      