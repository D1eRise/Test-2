	<script>
		$(document).ready(() => {
			$(".alert").hide();
			$("#reg").on("click", () => {
				let requestData = {};

				requestData.firstName = $('#inputFirstName').val();
				requestData.secondName = $('#inputSecondName').val();
				requestData.email = $('#inputEmail').val();
				requestData.password = $('#inputPassword').val();
				requestData.confPass = $('#inputPassword2').val();

				$.ajax({
		            url: 'reg.php',
		            type: 'POST',
		            data: requestData,
		            success: function(res){
		                let result = JSON.parse(res);
		                if (result.status === "error") {
			                if (!$("#error").is(":visible")) 
			                	$("#error").show();
			                $("#error").html(result.message);
		                } else if (result.status === "success") {
		                	if ($("#error").is(":visible")) 
		                		$("#error").hide();
		                	$("form").hide();
		                	$("#success").show();
		                } 
		            },
		            error: function(e){
		                console.log(e)  
		            }
		        });
			})
		})
	</script>
	</body>
</html>