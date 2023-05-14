function increaseCount(a, b) {
  var input = b.previousElementSibling;
  var value = parseInt(input.value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  input.value = value;
}

function decreaseCount(a, b) {
  var input = b.nextElementSibling;
  var value = parseInt(input.value, 10);
  if (value > 1) {
    value = isNaN(value) ? 0 : value;
    value--;
    input.value = value;
  }
}

function calculateTotal() {
  const quantity = parseInt(document.getElementById("qty").value);
  const price = parseFloat(document.getElementById("harga-satuan").textContent);
  const total = quantity * price;
  document.getElementById("result").textContent = total.toFixed(3);
  document.getElementById("barang").textContent = quantity;

  const persen = 0.05;
  const totalBayar = parseFloat(document.getElementById("result").textContent);
  const layanan = persen * totalBayar;
  document.getElementById("layanan").textContent = layanan.toFixed(3);

  const tagihan = totalBayar + layanan;
  document.getElementById("tagihan").textContent = tagihan.toFixed(3);
}
