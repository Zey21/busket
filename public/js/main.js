var i = 0;
function loading() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("loadBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 200) {
        clearInterval(id);
        i = 0;
      } else {
        width+= 5;
        elem.style.width = width + "px";
      }
    }
  }
  setTimeout(function () {
    window.location.href = "/home"; //will redirect to your blog page (an ex: blog.html)
  }, 1200);
}