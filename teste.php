<!DOCTYPE HTML>
<html lang="en">
  <head>
      <style>
          main{
              background-color:green;
          }
            nav {
            position: fixed;
            padding: 4px;
            border: 2px solid #000;
            width: 100%;
            line-height: 2.25em;
            background-color: yellow;
            }

            h2 {
            padding: 4px;
            border: 1px solid #000;
            width: 100%;
            line-height: 100px;
            background-color: red;
            }
      </style>
  </head>
  <body id="home">
    <!-- Navigation -->
    <nav><a href="#section1">Section #1</a></nav>
    <!-- Main Content -->
    <main>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h2 id="section1">section1</h2>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

$(window).on('hashchange', function() {
  window.scrollTo(window.scrollX, window.scrollY - 80);
});

$('a[href*="#"]').on('click', function(event) {
  let hash = this.hash;
  if (hash) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 80
    }, 750, function() {
      window.location.hash = hash;
    });
  }
});
});
    </script>
  </body>
</html>