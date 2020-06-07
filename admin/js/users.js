//======================
//Author: Silvher
//Date: June 5, 2020
//======================
$(document).ready(function(){
	var usersData = $('#userList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"searching": false,
		"ajax":{
			url:"action.php",
			type:"POST",
			data:{action:'listUser'},
			dataType:"json"
		},
		"columnDefs":[
			{ "visible": false, "targets": 0 },
			{ targets: 4,
				className: 'dt-body-center',
				mRender: function ( data, type, row ) { 
					return Math.floor(moment(row.timestamp).diff(data, 'years', true))
				}
			},
			{ targets: 5,
				className: 'dt-body-center',
				mRender: function ( data, type, row ) { 
					let d1 = new Date();
					let d2 = new Date(data);
					let dd1 = getFormattedDate(d1);
					let dd2 = getFormattedDate(d2);
					return calcNoOfYr(dd2, dd1);
				}
			}
		],
		"pageLength": 10
	});

	function calcNoOfYr(d1, d2) {
		let date1 = new Date(d1);
		let date2 = new Date(d2);
	
		let yearsDiff = date2.getFullYear() - date1.getFullYear();
		let months = (yearsDiff * 12) + (date2.getMonth() - date1.getMonth());
		let fYear = yearsDiff;
		let fMonth = months % 12;
	
		return fYear +'y '+ fMonth + 'm' ;
	}

	function getFormattedDate(date) {
		let year = date.getFullYear();
		
		let month = (1 + date.getMonth()).toString();
		month = month.length > 1 ? month : '0' + month;
		
		let day = date.getDate().toString();
		day = day.length > 1 ? day : '0' + day;
		
		return month + '/' + day + '/' + year;
	}

	$(document).on('click', '.delete', function(){
		var userid = $(this).attr("id");		
		var action = "userDelete";
		if(confirm("Are you sure you want to delete this user?")) {
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{userid:userid, action:action},
				success:function(data) {					
					usersData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
	$('#addUser').click(function(){
		$('#employeeModal').modal('show');
		$('#employeeForm')[0].reset();
		$('#passwordSection').show();
		$('.modal-title').html('<i class="fa fa-plus"></i> Add Employee');
		$('#action').val('addUser');
		$('#save').val('Save Employee');
	});	
	$(document).on('click', '.update', function(){
		var userid = $(this).attr("id");
		var action = 'getUser';
		$.ajax({
			url:'action.php',
			method:"POST",
			data:{userid:userid, action:action},
			dataType:"json",
			success:function(data){
				$('#employeeModal').modal('show');
				$('#userid').val(data.id);
				$('#firstname').val(data.first_name);
				$('#middlename').val(data.middle_name);
				$('#lastname').val(data.last_name);
				$('#address').val(data.address);
				$('#birthdate').val(data.birth_date);
				$('#hireddate').val(data.hired_date);
				$('#email').val(data.email);
				$('#password').val(data.password);
				$('#passwordSection').hide();
				if(data.gender == 'male') {
					$('#male').prop("checked", true);
				} else if(data.gender == 'female') {
					$('#female').prop("checked", true);
				}
				if(data.martial_status == 'single') {
					$('#single').prop("checked", true);
				} else if(data.martial_status == 'married') {
					$('#married').prop("checked", true);
				}

				if(data.status == 'active') {
					$('#active').prop("checked", true);
				} else if(data.gender == 'pending') {
					$('#pending').prop("checked", true);
				}
				if(data.type == 'general') {
					$('#general').prop("checked", true);
				} else if(data.type == 'administrator') {
					$('#administrator').prop("checked", true);
				}
				$('#mobile').val(data.mobile);
				$('#designation').val(data.designation);	
				$('.modal-title').html('<i class="fa fa-plus"></i> Edit Employee');
				$('#action').val('updateUser');
				$('#save').val('Update Employee');
			}
		})
	});	
	$(document).on('submit','#employeeForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#employeeForm')[0].reset();
				$('#employeeModal').modal('hide');				
				$('#save').attr('disabled', false);
				usersData.ajax.reload();
			}
		})
	});	
});