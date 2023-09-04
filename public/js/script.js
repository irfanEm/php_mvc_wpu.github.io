$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });
});

$(function () {
  $(".tampilModalUbah").on("click", function () {
    $("#judulModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php_mvc_wpu/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/php_mvc_wpu/public/mahasiswa/getUbah",
      data: { id: id },
      dataType: "json",
      method: "post",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
