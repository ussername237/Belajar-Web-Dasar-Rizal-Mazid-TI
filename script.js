function gantiTeks() {
  document.getElementById("teks").innerHTML = "Tombol berhasil dipencet 🔥";
}

function tambahNama() {
  const namaBaru = prompt("Masukkan nama:");

  if (namaBaru) {
    const li = document.createElement("li");
    li.textContent = namaBaru;
    document.getElementById("listNama").appendChild(li);
  }
}
