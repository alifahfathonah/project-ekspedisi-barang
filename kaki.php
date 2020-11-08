<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- animation -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>

<script>
   $("#form-cek-resi").validate({
      rules: {
         noResi: {
            required: true,
            maxlength: 16
         }
      },
      messages: {
         noResi: {
            required: "No. Resi wajib diisi"
         }
      },
      submitHandler: actCekResi
   });

   function actCekResi() {
      var x = $("#form-cek-resi").serialize();
      $.ajax({
         type: 'POST',
         url: 'modul/show-resi.php',
         data: x,
         beforeSend: function() {
            $("#btnCekResi").attr('disabled', true);
            $("#btnCekResi").html('Please wait...');
         },
         success: function(html) {
            setTimeout(function() {
               $("#btnCekResi").removeAttr('disabled');
               $("#btnCekResi").html('Cek Resi');
               $("#showResi").html(html);
            }, 1000);
         }
      });
   }

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