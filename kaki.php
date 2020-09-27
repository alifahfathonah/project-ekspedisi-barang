<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- animation -->
<script src="https://unpkg.com/scrollreveal"></script>

<script>
   function lihatPassword() {
      var temp = document.getElementById("password");
      if (temp.type === "password") {
         temp.type = "text";
      } else {
         temp.type = "password";
      }
   }

   // banner
   ScrollReveal().reveal('.a-banner', {
      distance: '100px',
      dellay: '900',
      origin: 'bottom',
      duration: 2500,
      opacity: 0.1,
   });


   // kerjasama
   ScrollReveal().reveal('.a-kerjasama', {
      distance: '100px',
      dellay: '900',
      origin: 'left',
      duration: 2500,
      opacity: 0.1,
   });

   ScrollReveal().reveal('.b-kerjasama', {
      distance: '100px',
      dellay: '900',
      origin: 'right',
      duration: 2500,
      opacity: 0.1,
   });
</script>