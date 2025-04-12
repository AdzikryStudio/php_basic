$(function () {
  // Event listener for dynamically or statically loaded elements
  $(document).on("click", ".tampilModalUbah", function () {
    console.log("Button clicked!"); // Debugging
    $("#forModalLabel").html("Ubah Data Dokter");
  });
});
