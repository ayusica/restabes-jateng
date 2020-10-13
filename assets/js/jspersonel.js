var urlPersonel = "http://localhost/restabes-jateng/personel/";

$("document").ready(function () {
    //tampilkan modal ganti password
    $("#pass-button").click(function () {
        $("#editprofilModal").modal("hide");
        $("#password-modal-profil").modal("show");
    });
    $("#passwordreset").click(function () {
        $("#password-top-bar").modal("show");
    });
});

//edit profil
function eProfil(nrp) {
    // alert(nrp);
    $.ajax({
        url: urlPersonel + "edit_Profil/" + nrp,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            // alert(data);
            $("#nrp").val(data.nrp);
            $("#nama").val(data.nama);
            $("#nrp_hid").val(data.nrp);
            $("#pkt").val(data.pkt);
            $("#jab").val(data.jabatan);
            $("#tempat").val(data.tempat);
            $("#tgl_lahir").val(data.tgl_lahir);
            $("#agama").val(data.agama);
            $("#suku").val(data.suku);
            $("#tmt_jab").val(data.tmt_jab);
            $("#nama_instansi").val(data.nama_instansi);
            $("#alamat").val(data.alamat);

            $("#editprofilModal").modal("show");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("error!");
        }
    });
}

function gantiPass() {
    var old_password = $("#old_password").val();
    var new_password = $("#new_password").val();
    var re_new_password = $("#re-new-password").val();

    if (old_password === "") {
        $("#lama").html('<div class="text text-danger">Password Lama Kosong!</div>');
    }
    else if (new_password === "") {
        $("#baru").html('<div class="text text-danger">Password Baru Kosong!</div>');
    }
    else if (re_new_password === "") {
        $("#konf").html('<div class="text text-danger">Password Konfirmasi Kosong!</div>');
    }
    else if (
        old_password === "" ||
        new_password === "" ||
        re_new_password === ""
    ) {
        if ($(".gantiPassword").children().hasClass("alert") !== true) {
            $(".gantiPassword").prepend(
                '<div class="alert alert-danger">Form Masih Kosong!</div>'
            );
            $("#old_password").val("");
            $("#new_password").val("");
            $("#re-new-password").val("");
        } else {
            $(".gantiPassword>.alert").replaceWith(
                '<div class="alert alert-danger">Form Masih Kosong!</div>'
            );
            $("#old_password").val("");
            $("#new_password").val("");
            $("#re-new-password").val("");
        }
    } else if (old_password === new_password) {
        if ($(".gantiPassword").children().hasClass("alert") !== true) {
            $(".gantiPassword").prepend(
                '<div class="alert alert-danger">Password Lama dan Baru Tidak Boleh Sama!</div>'
            );
            $("#old_password").val("");
            $("#new_password").val("");
            $("#re-new-password").val("");
        } else {
            $(".gantiPassword>.alert").replaceWith(
                '<div class="alert alert-danger">Password Lama dan Baru Tidak Boleh Sama!</div>'
            );
            $("#old_password").val("");
            $("#new_password").val("");
            $("#re-new-password").val("");
        }
    } else if (new_password !== re_new_password) {
        if ($(".gantiPassword").children().hasClass("alert") !== true) {
            $(".gantiPassword").prepend(
                '<div class="alert alert-danger">Password Baru dan Konfirmasi Password Tidak Sama!</div>'
            );
            $("#old_password").val("");
            $("#new_password").val("");
            $("#re-new-password").val("");
        } else {
            $(".gantiPassword>.alert").replaceWith(
                '<div class="alert alert-danger">Password Baru dan Konfirmasi Password Tidak Sama!</div>'
            );
            $("#old_password").val("");
            $("#new_password").val("");
            $("#re-new-password").val("");
        }
    } else {
        $.ajax({
            url: urlPersonel + "ubahPass",
            type: "POST",
            dataType: "JSON",
            data: {
                old_password: $("#old_password").val(),
                new_password: $("#new_password").val(),
                re_new_password: $("#re-new-password").val()
            },
            beforeSend: function () { },
            success: function (respon) {
                if (respon == "berhasil") {
                    alert("Password behasil diubah!");
                    window.location.href = "http://localhost/restabes-jateng/login/logout";
                } else {
                    if ($(".gantiPassword").children().hasClass("alert") !== true) {
                        $(".gantiPassword").prepend(
                            '<div class="alert alert-danger">Password Lama Salah!</div>'
                        );
                        $("#old_password").val("");
                        $("#new_password").val("");
                        $("#re-new-password").val("");
                    } else {
                        $(".gantiPassword>.alert").replaceWith(
                            '<div class="alert alert-danger">Password Lama Salah!</div>'
                        );
                        $("#old_password").val("");
                        $("#new_password").val("");
                        $("#re-new-password").val("");
                    }
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
            },
        });
    }
}

function balik() {
    $(".gantiPassword>.alert").remove();
    $("#password-modal-profil").find("input").val("").end();
    $("#lama").remove();
    $("#baru").remove();
    $("#konf").remove();

}

function gantiPassPer() {
    if ($("#lama_password").val() === "") {
        alert("Password Lama Harus Diisi!");
        $("#password-top-bar").modal("show");
    }
    else if ($("#baru_password").val() === "") {
        alert("Password Baru Harus Diisi!");
        $("#password-top-bar").modal("show");
    } else if ($("#konf-password").val() === "") {
        alert("Konfirmasi Password Harus Diisi!");
        $("#password-top-bar").modal("show");
    } else {
        $.ajax({
            url: urlPersonel + "ubah_PassPer",
            type: "POST",
            dataType: "JSON",
            data: {
                lama_password: $("#lama_password").val(),
                baru_password: $("#baru_password").val(),
                konf_password: $("#konf-password").val()
            },
            success: function (respon) {
                if (respon === "berhasil") {
                    alert("Password behasil diubah!");
                    window.location.href = "http://localhost/restabes-jateng/login/logout";
                } else if (respon === "tidak") {
                    alert("Password Konfirmasi Salah!"); //password baru ga kaya konf
                    $("#password-top-bar").modal("show");
                } else {
                    alert("Password Lama salah!");
                    $("#password-top-bar").modal("show");
                }
                // history.go(0);
                $("#lama_password").val(""),
                    $("#baru_password").val(""),
                    $("#konf-password").val("")
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("error!");
            }
        });
    }

}

function kembali() {
    $("#password-top-bar").find("input").val("").end();
}


