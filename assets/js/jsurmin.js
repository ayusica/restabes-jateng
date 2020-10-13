var urlUrmin = "http://localhost/restabes-jateng/urmin/";

$("document").ready(function () {
	$("#tambah_personel_button").click(function () {
		$("#tambah_pers_modal").modal("show");
	});

	$("#Poltabes-edit").click(function () {
		$("#Detail_Poltabes_Modal").modal("hide");
		$("#konf-edit-modal").modal("show");
	});

	$.ajax({
		url: urlUrmin + "selectBagian",
		type: "GET",
		dataType: "JSON",
		success: function (data) {
			var bag = "";
			bag += '<option value="0">' + "SEMUA</option>";
			for (var i = 0; i < 19; i++) {
				bag +=
					'<option value="' +
					data[i]["id_bagian"] +
					'">' +
					data[i]["nama_bagian"] +
					"</option>";
			}
			$("#selectBagian").html(bag);
			tabelperBagian();
		}
	});

	$("#pdf_bagian").click(function () {
		$.ajax({
			url: urlUrmin + "getPersonelBagian/" + $("#selectBagian").val(),
			type: "GET",
			dataType: "JSON",
			success: function (data) {
				if (data) {
					window.open(
						"http://localhost/restabes-jateng/urmin/pdf_bagian/" +
						$("#selectBagian").val(), "_blank"
					);
				} else {
					alert("maaf");
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert("error!");
			}
		});
	});
});

//urmin
function poltabes() {
	$.ajax({
		url: urlUrmin + "tambah_Poltabes",
		type: "POST",
		dataType: "JSON",
		data: {
			nama: $("#nama_poltabes").val(),
			nrp: $("#nrp_poltabes").val(),
			pkt: $("#pkt_poltabes").val(),
			jabatan: $("#jab_poltabes").val(),
			tempat: $("#tmpt_lahir_poltabes").val(),
			tgl_lahir: $("#tgl_lahir_poltabes").val(),
			agama: $("#agama_poltabes").val(),
			suku: $("#suku_poltabes").val(),
			id_bagian: $("#bagian_poltabes").val(),
			tmt_jab: $("#tmt_jab_poltabes").val()
		},
		success: function (respon) {
			if (respon == "sudah") {
				alert("Data Personel Sudah Terekam!");
			} else {
				alert("Data Berhasil Terekam!");
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert("Lengkapi Data!");
		}
	});
}

function detailPoltabes(nrp) {
	$.ajax({
		url: urlUrmin + "detail_poltabes/" + nrp,
		type: "GET",
		dataType: "JSON",
		success: function (data) {
			$("#poltabes_nama").val(data.nama);
			$("#poltabes_nrp").val(data.nrp);
			$("#poltabes_pkt").val(data.pkt);
			$("#poltabes_jab").val(data.jabatan);
			$("#poltabes_tmpt").val(data.tempat);
			$("#poltabes_tgl").val(data.tgl_lahir);
			$("#poltabes_agama").val(data.agama);
			$("#poltabes_suku").val(data.suku);
			$("#poltabes_tmt").val(data.tmt_jab);
			$("#poltabes_instansi").val(data.id_instansi);
			$("#poltabes_bagian").val(data.id_bagian);
			$("#Detail_Poltabes_Modal").modal("show");
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert("error!");
		}
	});
}

function hapusAja(nrp) {
	$("#hapus-poltabes-modal").modal("show");
	$("#konfirmasi_hapus_modal").click(function () {
		$.ajax({
			url: urlUrmin + "hapus_Pol",
			type: "POST",
			dataType: "JSON",
			data: {
				nrp: nrp
			},
			success: function () {
				alert("Data berhasil dihapus!");
				location.reload();
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert("error!");
			}
		});
	});
}

function updatePoltabes() {
	if ($("#poltabes_nama").val() == '') {
		alert("Isi Nama Personel!");
	} else if ($("#poltabes_pkt").val() == '') {
		alert("Isi Pangkat!");
	} else if ($("#poltabes_jab").val() == '') {
		alert("Isi Jabatan");
	} else if ($("#poltabes_tmt").val() == '') {
		alert("Isi Tmt Jab");
	} else {
		$.ajax({
			url: urlUrmin + "update_Poltabes",
			type: "POST",
			dataType: "JSON",
			data: {
				nama: $("#poltabes_nama").val(),
				nrp: $("#poltabes_nrp").val(),
				pkt: $("#poltabes_pkt").val(),
				jab: $("#poltabes_jab").val(),
				tempat: $("#poltabes_tmpt").val(),
				tglLahir: $("#poltabes_tgl").val(),
				suku: $("#poltabes_suku").val(),
				tmtJab: $("#poltabes_tmt").val(),
				idInstansi: $("#poltabes_instansi").val(),
				idBagian: $("#poltabes_bagian").val()
			},
			success: function () {
				alert("Data Berhasil Diubah!");
				tabelperBagian();
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert("error!");
			}
		});
	}
}

//get password dr nrp
function get_nrpPass(nrp) {
	$("#reset-pass").modal("show");
	$("#save_password").attr("onclick", "ganti_password(" + nrp + ")");
}

//ganti password urmin
function ganti_password(nrp) {
	if ($('#new_password').val() == '') {
		alert("Password Baru Harus Diisi!");
	} else {
		$.ajax({
			url: urlUrmin + "ganti_Password",
			type: "POST",
			dataType: "JSON",
			data: {
				nrp: nrp,
				newPassword: $("#new_password").val()
			},
			success: function () {
				alert("Password berhasil diubah!");
				$("#new_password").val('');

			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert("Gagal Ubah Password!");
			}
		});
	}
}

function tabelperBagian() {
	$("#dataTable_wrapper").remove();
	$.ajax({
		url: urlUrmin + "getPersonelBagian/" + $("#selectBagian").val(),
		type: "GET",
		dataType: "JSON",
		success: function (data) {
			var tabel = "";
			var no = 0;
			// if (data) {
			tabel +=
				'<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><thead><tr><th>No</th><th>Nama</th><th>NRP</th><th>Jabatan</th><th width="60">Aksi</th></tr></thead><tbody style="text-transform: uppercase;">';
			for (var i = 0; i < Object.keys(data).length; i++) {
				tabel +=
					'<tr role="row" class="odd"><td>' +
					++no +
					"</td><td>" +
					data[i]["nama"] +
					"</td><td>" +
					data[i]["nrp"] +
					"</td><td>" +
					data[i]["jabatan"] +
					'</td><td>';
				if (data[i]["level"] == "personel") {
					var string = "'" + data[i]["nrp"] + "'";
					tabel +=
						'<button type="button" class="badge badge-info" id="detail_poltabes_button" onclick="detailPoltabes(' +
						string +
						')"><i class="fas fa-fw fa-edit"></i></button><button type = "submit" class="badge badge-success" onclick = "get_nrpPass(' +
						string +
						')" > <i class="fas fa-fw fa-key"></i></button><button type="submit" class="badge badge-danger" id="hapus" onclick="hapusAja(' +
						string +
						')"><i class="fas fa-fw fa-trash"></i></button><a target= "_blank" href="http://localhost/restabes-jateng/personel/pdf_profil/' +
						data[i]["nrp"] +
						'"><button type="button" class="badge badge-warning"><i class="fas fa-fw fa-print"></i></button></a>';
				}
			}
			tabel += "</tbody></table>";
			$("#tabel").html(tabel);
			$("#dataTable").DataTable();
		}
	});
}
