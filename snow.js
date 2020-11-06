(function() {
    var quantity = 100;
    var snowflakes = [];
  
    function getRandomNumber(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  
    function createSnowflake() {
      var el = document.createElement("div");
      el.style.position = "fixed";
      el.style.zIndex = "999999";
      el.style.color = "grey";
      el.style.fontSize = getRandomNumber(10, 20) + "px";
      el.style.top = getRandomNumber(0, window.innerHeight) + "px";
      el.style.left = getRandomNumber(0, window.innerWidth) + "px";
      el.innerHTML = "&#10052";
      el.speed = 33 / parseInt(el.style.fontSize);
      return el;
    }
  
    function moveSnowflakes() {
      for (var i = 0; i < quantity; i++) {
        moveSnowflake(snowflakes[i]);
      }
    }
  
    function moveSnowflake(el) {
      var height = window.innerHeight;
      var top = parseInt(el.style.top);
      //top += speed;
  
      if (top > height) {
        resetSnowflake(el);
      } else {
        el.style.top = top + el.speed + "px";
      }
    }
  
    function resetSnowflake(el) {
      el.style.top = "0px";
      el.style.left = getRandomNumber(0, window.innerWidth) + "px";
    }
  
    for (var i = 0; i < quantity; i++) {
      particle = snowflakes[i] = createSnowflake();
      document.body.appendChild(particle);
    }
    setInterval(moveSnowflakes, 33);
  })();
  