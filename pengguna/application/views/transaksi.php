<div class="dashboard-content">
    <h2>Silakan Lakukan Pembayaran</h2>
    <button id="pay-button">Bayar Sekarang</button>
</div>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            snap.pay('<?= $snapToken ?>', {
                onSuccess: function (result) {
                    alert("Pembayaran berhasil!");
                    console.log(result);
                },
                onPending: function (result) {
                    alert("Menunggu pembayaran...");
                    console.log(result);
                },
                onError: function (result) {
                    alert("Pembayaran gagal!");
                    console.log(result);
                }
            });
        });
    </script>
    
<!-- </body>
</html> -->
