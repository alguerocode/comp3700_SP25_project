    // dynamic date and time 
    function updateBanner() {
        const date = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const today = date.toLocaleDateString(undefined, options);
        const time = date.toLocaleTimeString();
        document.getElementById('moving-text-content').textContent =
          `Welcome to the Hajz website! Today is ${today}, and the time is ${time}`;
      }
  
      setInterval(updateBanner, 1000);
      window.onload = updateBanner;
