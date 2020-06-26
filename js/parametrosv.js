<script type= "text/javascript">
$(function () {
$('#myform'), validate({
rules:{

nombre:{
	required:true
	minlength:3
	maxlength:20

       },
apellido:{
	required:true
	minlength:4
	maxlength:30
	         },
nacionalidad:{
	required:true
	minlength:6
	maxlength:30
	         },
tiempo:{
	required:true
	digits:true
	minlength:1
	maxlength:2
	         },
año:{
	required:true
	digits:true
	minlength:4
	maxlength:4
	         },
torneo:{
	required:true
	minlength:6
	maxlength:30
	         },

}
});
});
</script>