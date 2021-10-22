

  $(document).ready(() => {
      $("#btnShake").click(() => {
      $("#Shake_container").addClass("animate__animated animate__bounce");
  });
  

 });


  var hotbod = document.querySelector("body");

  function doStuff() {
      hotbod.className += " animate";
  }
  
  window.onload = function() {
      doStuff();
  };


  /* Rotate an Image */
  function myFunction() {
    var img = document.getElementById("image");
    img.setAttribute("class", "rotated-image");
  }