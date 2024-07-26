const orang = document.getElementById('orang');
let canTriggerEvent = true;

orang.addEventListener('mouseover', () => {
  if (canTriggerEvent) {
    canTriggerEvent = false;

    orang.style.top = '-100px'; // loncatin si orangnya sebanyak 150px

    setTimeout(() => {
      orang.style.top = '0px'; //jatuhin lagi orangnya ke tempat semula
    }, 1000);
    setTimeout(() => {
        canTriggerEvent = true; // bolehin si eventnya buat ke trigger lagi setelah dijeda 1 detik
    }, 1500);
  }
});
