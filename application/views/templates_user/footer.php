<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

<script src="<?= base_url('assets/jquery-3.4.1.js') ?>"></script>
<script src="<?= base_url('assets/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/js/jquery.magnify.js"></script>
<script>
	$(function() {
		$('[data-toggle="popover"]').popover();

		$('form').on('submit', function(e) {
			let isi = $('#upload_file').val();
			let isi2 = $('#upload_file2').val();
			if (isi2 == "") {
				alert('Kosong');
			}
			console.log(isi);

			$.ajax({
				url: "<?= base_url('pengajuan/ajax_upload') ?>",
				method: "post",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {

				}
			})

		});
	});
</script>
</body>

</html>
