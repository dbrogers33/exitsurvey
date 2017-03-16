<script>
	$(document).ready(function() {
		$('select').material_select();
		$('#textarea1').val('New Text');
  		$('#textarea1').trigger('autoresize');
	});
</script>

<footer class="page-footer">
	<div class="footer-copyright">
		<div class="container">
			© <?php echo date("Y"); ?> Hutson Inc.
		</div>
	</div>
</footer>

</body>
</html>
