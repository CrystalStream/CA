$(document).ready(function(){
	$('#card-table').bootstrapTable({
		pagination: true,
		pageSize: 10,
		search: true,
		showToggle: true
	});
	$('#creationDate').datepicker({
    todayBtn: true,
    clearBtn: true,
    language: "es",
    orientation: "top auto",
    autoclose: true,
    todayHighlight: true
	});
});