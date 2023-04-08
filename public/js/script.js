function showCategories() {
  document.getElementById("categories").style.display = "block";
}

function hideCategories() {
  document.getElementById("categories").style.display = "none";
}

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