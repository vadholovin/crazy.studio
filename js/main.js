// DROPNAV
(function() {
  const button = document.querySelector(".dropnav__hamburger");
  const dropnav = document.querySelector(".dropnav");
  const links = document.querySelectorAll(".dropnav__item");

  button.addEventListener('click', function() {
    dropnav.classList.toggle("is-hidden");
  });

  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function() {
      dropnav.classList.add("is-hidden");
    });
  }

  window.onkeydown = function(e) {
    if (e.keyCode ===27) {
      if (!dropnav.classList.contains("is-hidden")) {
        dropnav.classList.add("is-hidden");
      }
    }
  }

  window.onclick = function(e) {
    if (!dropnav.classList.contains("is-hidden")) {
      if (e.target !== dropnav && e.target !== button) {
        dropnav.classList.add("is-hidden");
      }
    }
  }

  window.onresize = function() {
    if (window.innerWidth >= 768 && !dropnav.classList.contains("is-hidden")) {
      dropnav.classList.add("is-hidden");
    }
  }
})();