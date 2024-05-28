$(document).ready(function() {

  // Preview gambar

  $("#file").on("change", function() {
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#image-preview").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  });

});
