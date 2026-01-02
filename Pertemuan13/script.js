const API = "http://localhost:3000";

let edit = false;
let editId = null;

document.addEventListener("DOMContentLoaded", loadData);

function loadData() {
  fetch(`${API}/mahasiswaGet`)
    .then(res => res.json())
    .then(data => tampilkan(data));
}

function tampilkan(data) {
  const tbody = document.getElementById("listMahasiswa");
  tbody.innerHTML = "";

  if (data.length === 0) {
    tbody.innerHTML = `<tr><td colspan="6">Data kosong</td></tr>`;
    return;
  }

  data.forEach((m, i) => {
    tbody.innerHTML += `
      <tr>
        <td>${i + 1}</td>
        <td>${m.nama}</td>
        <td>${m.nim}</td>
        <td>${m.jurusan}</td>
        <td>${m.email}</td>
        <td>
          <button onclick="editData(${m.id}, '${m.nama}', '${m.nim}', '${m.jurusan}', '${m.email}')">Edit</button>
          <button onclick="hapusData(${m.id})">Hapus</button>
        </td>
      </tr>
    `;
  });
}

function simpanMahasiswa() {
  const data = {
    nama: nama.value,
    nim: nim.value,
    jurusan: jurusan.value,
    email: email.value
  };

  const url = edit
    ? `${API}/mahasiswaUpdate/${editId}`
    : `${API}/mahasiswaCreate`;

  const method = edit ? "PUT" : "POST";

  fetch(url, {
    method,
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data)
  }).then(() => {
    reset();
    loadData();
  });
}

function editData(id, n, nimM, j, e) {
  edit = true;
  editId = id;

  nama.value = n;
  nim.value = nimM;
  jurusan.value = j;
  email.value = e;


  document.getElementById("formTitle").innerText = "Edit Mahasiswa";
  document.getElementById("btnText").innerText = "Update";
  document.getElementById("btnBatal").style.display = "inline-block";
}


function hapusData(id) {
  if (!confirm("Hapus data?")) return;

  fetch(`${API}/mahasiswaDelete/${id}`, {
    method: "DELETE"
  }).then(() => loadData());
}

function reset() {
  edit = false;
  editId = null;

  nama.value = "";
  nim.value = "";
  jurusan.value = "";
  email.value = "";
}

function batalEdit() {
  reset();
  document.getElementById("formTitle").innerText = "Tambah Mahasiswa";
  document.getElementById("btnText").innerText = "Tambah";
  document.getElementById("btnBatal").style.display = "none";
}
