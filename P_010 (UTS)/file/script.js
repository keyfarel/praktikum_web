function processForm() {
    const nama = document.getElementById("nama").value;
    const gaji = document.getElementById("gaji").value;
    const resultDiv = document.getElementById("result");

    if (nama || gaji) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `file/process.php?nama=${encodeURIComponent(nama)}&gaji=${encodeURIComponent(gaji)}`, true);
        xhr.onload = function() {
            if (this.status === 200) {
                resultDiv.innerHTML = this.responseText;
            }
        };
        xhr.send();
    } else {
        resultDiv.innerHTML = "Masukkan nama atau gaji terlebih dahulu.";
    }
}
