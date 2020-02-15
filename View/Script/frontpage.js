console.log("halo dunia");
var modal = document.getElementById("loginModal");

var btn = document.getElementById("loginText");

var span = document.getElementsByClassName("close")[0];

var stay = document.getElementById('stay');
stay.addEventListener('click', function() {
  document.location.href = 'stay';
});

var experience = document.getElementById('experience');
experience.addEventListener('click', function(){
  document.location.href = 'experience';
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

