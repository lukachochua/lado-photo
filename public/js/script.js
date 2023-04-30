function showCategories() {
  document.getElementById("categories").style.display = "block";
  document.getElementById("categories-sm").style.display = "block";

}

function hideCategories() {
  document.getElementById("categories").style.display = "none";
  document.getElementById("categories-sm").style.display = "none";
}

if (window.innerWidth >= 768) {
  function showPopup(imageUrl) {
    var popup = document.getElementById("popup");
    var popupImage = document.getElementById("popup-image");
    popupImage.src = imageUrl;
    popup.style.display = "flex";
  }

  function hidePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
  }


  document.addEventListener('click', function (event) {
    var popup = document.getElementById("popup");
    if (event.target == popup) {
      popup.style.display = "none";
    }
  });

  document.addEventListener('keydown', function (event) {
    var popup = document.getElementById("popup");
    if (event.key === "Escape" && popup.style.display === "flex") {
      popup.style.display = "none";
    }
  });


}

if (window.innerWidth <= 640) {
  function clicked() {
    var navbar = document.getElementById('navbar-sm');
    var dropdown = document.getElementById('dropdown');

    navbar.classList.toggle('hidden');

    document.addEventListener('click', function (event) {
      if (!dropdown.contains(event.target)) {
        navbar.classList.add('hidden');
      }
    });
  }

  document.addEventListener("DOMContentLoaded", function (event) {
    document.getElementById('touch-start').addEventListener("touchstart", showCategories, { passive: true });
    document.getElementById('touch-start').addEventListener("touchstart", hideCategories, { passive: true });
  });
}




