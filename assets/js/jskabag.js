var url_kabag = "http://localhost/restabes-jateng/kabag/"

$('document').ready(function () {
    $('#password-button').click(function () {
        $('#editModal').modal('hide'); //nanti
        $('#reset-password-modal').modal('show');
    });

    $('#tambah_admin_button').click(function () {
        $('#tambahModal').modal('show');
    });

    $('#tambah_instansi_button').click(function () {
        $('#tambah_instansi_modal').modal('show');
    });

});

//grafik
var ctx = document.getElementById("myChart").getContext('2d');
var data_nama = [];
var data_jumlah = [];

$.post(url_kabag + "grafik",
    function (data) {
        var obj = JSON.parse(data);
        $.each(obj, function (test, item) {
            data_nama.push(item.kesatuan);
            data_jumlah.push(item.jumlah);
        });

        var colorgrafik = [];
        for (i = 0; i <= data_jumlah.length; i++) {
            if (data_jumlah[i] < 20) {
                colorgrafik[i] = 'rgba(255, 99, 132,1)'
            } else {
                colorgrafik[i] = 'rgba(72, 209, 204, 1)'
            }
        }
        var colorborder = [];
        for (i = 0; i <= data_nama.length; i++) {
            if (data_jumlah[i] < 20) {
                colorborder[i] = 'rgba(255,99,132,1)'
            } else {
                colorborder[i] = 'rgba(72, 209, 204, 1)'
            }
        }

        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: data_nama,
                datasets: [{
                    label: 'Jumlah Personel',
                    data: data_jumlah,
                    backgroundColor: colorgrafik,
                    borderColor: colorborder,
                    borderWidth: 1,
                    pointHoverBorderColor: 'rgba(220,220,220,1)',
                    pointBorderColor: 'rgba(17,28, 238, 1)'

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
        url: url_kabag + "edit_Admin/" + nrp,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('#nama').val(data.nama);
            $('#nrp').val(data.nrp);
            $('#jab').val(data.jabatan);
            // $('#pass').val(data.pass);
            if (data.level == 'kabag') {
                document.getElementById("level").selectedIndex = "1";
            } else if (data.level == 'kaurmin') {
                document.getElementById("level").selectedIndex = "2";
            } else {
                document.getElementById("level").selectedIndex = "3";
            }
            $('#editModal').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('error!');
        }

    });

}

function updateEdit() {
    if ($('#level').val() == "") {
        alert("level kosong");
    } else {
        $.ajax({
            url: url_kabag + "update_Admin",
            type: "POST",
            dataType: "JSON",
            data: {
                nama: $('#nama').val(),
                nrp: $('#nrp').val(),
                jab: $('#jab').val(),
                // inst: $('#inst').val(),
                level: $('#level').val()
            },
            success: function () {
                alert('Data berhasil diubah!');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('error!');
            }
        });
    }
}

function changepassword() {
    if ($('#new_password').val() == '') {
        alert("Password Baru Harus Diisi!")
    } else {
        $.ajax({
            url: url_kabag + "ubah_PassAdmin",
            type: "POST",
            dataType: "JSON",
            data: {
                nrp: $('#nrp').val(),
                new_password: $('#new_password').val()
            },
            success: function () {
                alert('Password berhasil diubah!');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('error!');
            }
        });
    }
}

function hapusAdmin(nrp) {
    $('#hapus-admin-modal').modal('show');
    $('#konfirmasi_hapus').click(function () {
        $.ajax({
            url: url_kabag + "hapus_Admin",
            type: "POST",
            dataType: "JSON",
            data: {
                nrp: nrp
            },
            success: function () {
                alert('Data berhasil dihapus!');
                location.reload();
                $('#dataTable');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('error!');
            }

        });
    });

}

function success_tambahAdmin() {
    $.ajax({
        url: url_kabag + "tambah_Admin",
        type: "POST",
        dataType: "JSON",
        data: {
            nama: $('#namaAdmin').val(),
            nrp: $('#nrpAdmin').val(),
            // pass: $('#passAdmin').val(),
            // id_instansi: $('#selectInstansi').val(),
            level: $('#levelAdmin').val()
        },
        success: function (respon) {
            if (respon == 'berhasil') {
                alert('Data Admin berhasil ditambahkan');
                // history.go(0);
                $('#dataTable');
            }
            if (respon == 'sudah') {
                alert('Personel Sudah Menjadi Admin!');
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error!');
        }
    });
}

function pilInstansi() {
    // if ($('#levelAdmin').val() == 'kasium') {
    var isi = "";
    $.ajax({
        url: url_kabag + "pilih_instansi",
        type: "GET",
        dataType: "JSON",
        success: function (data) {

            if ($('#levelAdmin').val() == 'kasium') {
                isi += '<option value="">--Pilih Instansi--</option>';
                for (var i = 1; i < Object.keys(data).length; i++) {
                    isi += '<option value="' + data[i]['id_instansi'] + '">' + data[i]['nama_instansi'] + '</option>';
                }
                $('#selectInstansi').html(isi);
            } else if ($('#levelAdmin').val() == "") {
                isi += '<option value="">--Pilih Instansi--</option>';
                $('#selectInstansi').html(isi);
            } else {
                isi += '<option value="' + data[0]['id_instansi'] + '">' + data[0]['nama_instansi'] + '</option>';
                $('#selectInstansi').html(isi);
            }

        }
    });
}


function get_editInstansi(id_instansi) {
    $.ajax({
        url: url_kabag + "get_Instansi/" + id_instansi,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('#id_instansi').val(data.id_instansi);
            $('#instansi_hid').val(data.id_instansi);
            $('#nama_instansi').val(data.nama_instansi);
            $('#alamat').val(data.alamat);
            document.getElementById("foto").src = "../assets/img/g_instansi/" + data.foto;
            // $('#foto').attr("src", "../assets/img/g_instansi")

            $('#Edit_Instansi_Modal').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('error!');
        }

    });

}

function hapus_Instansi(id_instansi) {
    $('#hapus-instansi-modal').modal('show');
    $('#konf_hapus_modal').click(function () {
        $.ajax({
            url: url_kabag + "hapus_Instansi",
            type: "POST",
            dataType: "JSON",
            data: {
                id_instansi: id_instansi
            },
            success: function () {
                alert('Data berhasil dihapus!');
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('error!');
            }

        });
    });

}




