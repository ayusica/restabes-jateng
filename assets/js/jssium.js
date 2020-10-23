var urlSium = "http://localhost/restabes-jateng/sium/";

$("document").ready(function () {
    $("#tambah_personel_polsek").click(function () {
        $("#tambah_polsek_modal").modal("show");
    });

    $("#Polsek-edit").click(function () {
        $("#Detail_Modal").modal("hide");
        $("#polsek-edit-modal").modal("show");
    });

});



// Kasium
function tambahPolsek() {
    $.ajax({
        url: urlSium + "tambahPolsek",
        type: "POST",
        dataType: "JSON",
        data: {
            nama: $("#nama_polsek").val(),
            nrp: $("#nrp_polsek").val(),
            pkt: $("#pkt_polsek").val(),
            jabatan: $("#jab_polsek").val(),
            tempat: $("#tmpt_lahir_polsek").val(),
            tglLahir: $("#tgl_lahir_polsek").val(),
            agama: $("#agama_polsek").val(),
            suku: $("#suku_polsek").val(),
            tmtJab: $("#tmt_jab_polsek").val(),
            idInstansi: $("#instansi_polsek").val(),
            idBagian: $("#bagian_polsek").val()
        },
        success(respon) {
            if (respon === "sudah") {
                alert("Data Personel Sudah Terekam!");
            } else {
                alert("Data Berhasil Terekam!");
            }
        },
        error(jqXHR, textStatus, errorThrown) {
            alert("Lengkapi Data!");
        }
    });
}

function detailPolsek(nrp) {
    $.ajax({
        url: urlSium + "detailPolsek/" + nrp,
        type: "GET",
        dataType: "JSON",
        success(data) {
            $("#polsek_nama").val(data.nama);
            $("#polsek_nrp").val(data.nrp);
            $("#polsek_pkt").val(data.pkt);
            $("#polsek_jab").val(data.jabatan);
            $("#polsek_tmpt").val(data.tempat);
            $("#polsek_tgl").val(data.tgl_lahir);
            $("#polsek_agama").val(data.agama);
            $("#polsek_suku").val(data.suku);
            $("#polsek_tmt").val(data.tmt_jab);
            $("#polsek_instansi").val(data.id_instansi);
            $("#polsek_bagian").val(data.id_bagian);

            $("#Detail_Modal").modal("show");
        },
        error(jqXHR, textStatus, errorThrown) {
            alert("error!");
        }

    });

}

function updatePolsek() {
    $.ajax({
        url: urlSium + "updatePolsek",
        type: "POST",
        dataType: "JSON",
        data: {
            nama: $("#polsek_nama").val(),
            nrp: $("#polsek_nrp").val(),
            pkt: $("#polsek_pkt").val(),
            jab: $("#polsek_jab").val(),
            tempat: $("#polsek_tmpt").val(),
            tglLahir: $("#polsek_tgl").val(),
            suku: $("#polsek_suku").val(),
            tmtJab: $("#polsek_tmt").val(),
            idInstansi: $("#polsek_instansi").val(),
            idBagian: $("#polsek_bagian").val()

        },
        success() {
            alert("data berhasil diubah!");
            // window.location.reload();
            history.go(0);
        },
        error(jqXHR, textStatus, errorThrown) {
            alert("error!");
        }
    });
}

//get nrp untuk ganti password
function getNrpPass(nrp) {
    $("#reset-pass").modal("show");
    $("#save_password").attr("onclick", "gantiPassword(" + nrp + ")");
}

//ganti password 
function gantiPassword(nrp) {
    if ($("#new_password").val() === "") {
        alert("Password Baru Harus Diisi!");
    } else {
        $.ajax({
            url: urlSium + "gantiPassword",
            type: "POST",
            dataType: "JSON",
            data: {
                nrp: nrp,
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

//hapus personel polsek
function hapusPersonelpolsek(nrp) {
    $("#hapus-polsek-modal").modal("show");
    $("#konfirmasi_hapus_modal").click(function () {
        $.ajax({
            url: urlSium + "hapusPol",
            type: "POST",
            dataType: "JSON",
            data: {
                nrp: nrp
            },
            success() {
                alert("Data berhasil dihapus!");
                location.reload();
            },
            error(jqXHR, textStatus, errorThrown) {
                alert("error!");
            }

        });
    });
}