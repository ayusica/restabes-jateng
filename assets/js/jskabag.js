var urlKabag = "http://localhost/restabes-jateng/kabag/";

$("document").ready(function () {
    $("#password-button").click(function () {
        $("#editModal").modal("hide");
        $("#reset-password-modal").modal("show");
    });

    $("#tambah_admin_button").click(function () {
        $("#tambahModal").modal("show");
    });

    $("#tambah_instansi_button").click(function () {
        $("#tambah_instansi_modal").modal("show");
    });

});

//grafik
var ctx = document.getElementById("myChart").getContext("2d");
var dataNama = [];
var dataJumlah = [];

$.post(urlKabag + "grafik",
    function (data) {
        var obj = JSON.parse(data);
        $.each(obj, function (test, item) {
            dataNama.push(item.kesatuan);
            dataJumlah.push(item.jumlah);
        });

        var colorgrafik = [];
        var i = 0;
        var j = 0;

        for (i = 0; i <= dataJumlah.length; i++) {
            if (dataJumlah[i] < 20) {
                colorgrafik[i] = "rgba(255, 99, 132,1)";
            } else {
                colorgrafik[i] = "rgba(72, 209, 204, 1)";
            }
        }
        var colorborder = [];
        for (j = 0; j <= dataNama.length; j++) {
            if (dataJumlah[j] < 20) {
                colorborder[j] = "rgba(255,99,132,1)";
            } else {
                colorborder[j] = "rgba(72, 209, 204, 1)";
            }
        }

        var myChart = new Chart(ctx, {
            type: "horizontalBar",
            data: {
                labels: dataNama,
                datasets: [{
                    label: "Jumlah Personel",
                    data: dataJumlah,
                    backgroundColor: colorgrafik,
                    borderColor: colorborder,
                    borderWidth: 1,
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointBorderColor: "rgba(17,28, 238, 1)"

                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });

// Kabag
function edit(nrp) {
    $.ajax({
        url: urlKabag + "edit_Admin/" + nrp,
        type: "GET",
        dataType: "JSON",
        success(data) {
            $("#nama").val(data.nama);
            $("#nrp").val(data.nrp);
            $("#jab").val(data.jabatan);
            // $("#pass").val(data.pass);
            if (data.level === "kabag") {
                document.getElementById("level").selectedIndex = "1";
            } else if (data.level === "kaurmin") {
                document.getElementById("level").selectedIndex = "2";
            } else {
                document.getElementById("level").selectedIndex = "3";
            }
            $("#editModal").modal("show");
        },
        error(jqXHR, textStatus, errorThrown) {
            alert("error!");
        }

    });

}

function updateEdit() {
    if ($("#level").val() === "") {
        alert("level kosong");
    } else {
        $.ajax({
            url: urlKabag + "update_Admin",
            type: "POST",
            dataType: "JSON",
            data: {
                nama: $("#nama").val(),
                nrp: $("#nrp").val(),
                jab: $("#jab").val(),
                // inst: $("#inst").val(),
                level: $("#level").val()
            },
            success() {
                alert("Data berhasil diubah!");
            },
            error(jqXHR, textStatus, errorThrown) {
                alert("error!");
            }
        });
    }
}

function changePassword() {
    if ($("#new_password").val() === "") {
        alert("Password Baru Harus Diisi!");
    } else {
        $.ajax({
            url: urlKabag + "ubahPassadmin",
            type: "POST",
            dataType: "JSON",
            data: {
                nrp: $("#nrp").val(),
                newPassword: $("#new_password").val()
            },
            success() {
                alert("Password berhasil diubah!");
            },
            error(jqXHR, textStatus, errorThrown) {
                alert("error!");
            }
        });
    }
}

function hapusAdmin(nrp) {
    $("#hapus-admin-modal").modal("show");
    $("#konfirmasi_hapus").click(function () {
        $.ajax({
            url: urlKabag + "hapusAdmin",
            type: "POST",
            dataType: "JSON",
            data: {
                nrp: nrp
            },
            success() {
                alert("Data berhasil dihapus!");
                location.reload();
                $("#dataTable");
            },
            error(jqXHR, textStatus, errorThrown) {
                alert("error!");
            }

        });
    });

}

function successTambahAdmin() {
    $.ajax({
        url: urlKabag + "tambahAdmin",
        type: "POST",
        dataType: "JSON",
        data: {
            nama: $("#namaAdmin").val(),
            nrp: $("#nrpAdmin").val(),
            // pass: $("#passAdmin").val(),
            // id_instansi: $("#selectInstansi").val(),
            level: $("#levelAdmin").val()
        },
        success(respon) {
            if (respon === "berhasil") {
                alert("Data Admin berhasil ditambahkan");
                // history.go(0);
                $("#dataTable");
            }
            if (respon === "sudah") {
                alert("Personel Sudah Menjadi Admin!");
            }
        },
        error(jqXHR, textStatus, errorThrown) {
            alert("Error!");
        }
    });
}

function pilInstansi() {
    // if ($("#levelAdmin").val() == "kasium") {
    var isi = "";
    $.ajax({
        url: urlKabag + "pilihInstansi",
        type: "GET",
        dataType: "JSON",
        success(data) {

            if ($("#levelAdmin").val() === "kasium") {
                isi += "<option value=''>--Pilih Instansi--</option>";
                for (var i = 1; i < Object.keys(data).length; i++) {
                    isi += "<option value='" + data[i]["id_instansi"] + "'>" + data[i]["nama_instansi"] + "</option>";
                }
                $("#selectInstansi").html(isi);
            } else if ($("#levelAdmin").val() === "") {
                isi += "<option value=''>--Pilih Instansi--</option>";
                $("#selectInstansi").html(isi);
            } else {
                isi += "<option value='" + data[0]["id_instansi"] + "'>" + data[0]["nama_instansi"] + "</option>";
                $("#selectInstansi").html(isi);
            }

        }
    });
}


function getEditInstansi(idInstansi) {
    $.ajax({
        url: urlKabag + "getInstansi/" + idInstansi,
        type: "GET",
        dataType: "JSON",
        success(data) {
            $("#id_instansi").val(data.id_instansi);
            $("#instansi_hid").val(data.id_instansi);
            $("#nama_instansi").val(data.nama_instansi);
            $("#alamat").val(data.alamat);
            document.getElementById("foto").src = "../assets/img/g_instansi/" + data.foto;
            // $("#foto").attr("src", "../assets/img/g_instansi")

            $("#Edit_Instansi_Modal").modal("show");
        },
        error(jqXHR, textStatus, errorThrown) {
            alert("error!");
        }

    });

}

// function hapusInstansi(idInstansi) {
//     $("#hapus-instansi-modal").modal("show");
//     $("#konf_hapus_modal").click(function () {
//         $.ajax({
//             url: urlKabag + "hapusInstansi",
//             type: "POST",
//             dataType: "JSON",
//             data: {
//                 idInstansi: idInstansi
//             },
//             success: function () {
//                 alert("Data berhasil dihapus!");
//                 location.reload();
//             },
//             error: function (jqXHR, textStatus, errorThrown) {
//                 alert("error!");
//             }

//         });
//     });

// }




