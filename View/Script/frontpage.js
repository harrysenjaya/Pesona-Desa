var modal = document.getElementById("loginModal");

var btn = document.getElementById("loginText");

var span = document.getElementsByClassName("close")[0];

var stay = document.getElementById('stay');
stay.addEventListener('click', function() {
  document.location.href = 'stay';
});

btn.onclick = function () {
  modal.style.display = "block";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

