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
  document.getElementById("result").textContent = total;
}
