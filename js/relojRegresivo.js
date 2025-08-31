//Reloj regresivo 

   // Fecha objetivo
   const targetDate = new Date("2025-12-20T13:00:00").getTime();

   const countdownElement = document.getElementById("countdown");

   function updateCountdown() {
     const now = new Date().getTime();
     const distance = targetDate - now;

     if (distance <= 0) {
       countdownElement.innerHTML = "¡Es la hora!";
       return;
     }

     const days = Math.floor(distance / (1000 * 60 * 60 * 24));
     const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     const seconds = Math.floor((distance % (1000 * 60)) / 1000);

     countdownElement.innerHTML = 
       `${days} : ${hours.toString().padStart(2,"0")} : ${minutes.toString().padStart(2,"0")} : ${seconds.toString().padStart(2,"0")}`;
   }

   setInterval(updateCountdown, 1000);
   updateCountdown();