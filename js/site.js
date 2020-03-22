$(document).ready(function(){
//alert('ask');

$("#loginValidation").validate({
		rules:{
			sltUserType:{
				required:true,
			},
			userEmail:{
				required:true,
				email: true
			},
			userPassword:{
				required:true,
				minlength:8,
			},

		},
		messages:{
			sltUserType:{
				required: "Choose User Role",
			},
			userEmail:{
				required :"Enter User Email ID",
				email: "Please enter a valid email address",
			},
			userPassword:{
				required:"Enter User Password",
				minlength: "Your password must be at least 8 characters long"
			},
		},
	});

	$("#quesAllocation").validate({
		rules:{
			sltBatchType:{
				required:true,
			},
			sltBatch:{
				required:true,
			},
			sltCourse:{
				required:true,	
			},
			searchBySubject:{
				required:true,	
			},
			sltStaff:{
				required:true,	
			}

		},
		messages:{
			sltBatchType:{
				required: "Choose Batch Type",
			},
			sltBatch:{
				required:"Choose Batch"
			},
			sltCourse:{
				required:"Select Course"	
			},
			searchBySubject:{
				required:"Select Subject"
			},
			sltStaff:{
				required:"Select Staff"
			}
		},
	});

	$("#addCourseVal").validate({
		rules:{
			txtCourse:{
				required:true,
			},
			txtCoursecode:{
				required:true,
			},
		},
			messages:{
				txtCourse:{
					required:"Enter Course Name",
				},
				txtCoursecode:{
					required:"Enter Course Code",	
				}
			}
		
	});

	$("#subjectValidation").validate({
		rules:{
			sltSubjectType:{
				required:true,
			},
			txtSubjectCode:{
				required:true,
			},
			txtSubjectName:{
				required:true,
			},
			sltSemester:{
				required:true,
			},
			txtCredits:{
				required:true,
			},
		},
			messages:{
				sltSubjectType:{
					required:"Select Subject Type",
				},
				txtSubjectCode:{
					required:"Enter Subject Code",	
				},
				txtSubjectName:{
					required:"Enter Subject Name",
				},
				sltSemester:{
					required:"Select Semester",
				},
				txtCredits:{
					required:"Enter Credits",
				},
			}
	});

$("#lstSubValidate").validate({
		rules:{
			searchBySem:{
				required:true,
			},
		},
			messages:{
				searchBySem:{
					required:"Select Semester",
				},
			}
	});


	$("#staffValidation").validate({
		rule:{
			txtStaffName:{
				required:true,
			},
			txtStaffCode:{
				required:true,	
			},
			txtStaffEmail:{
				required:true,
				email: true
			},
			txtStaffMobNo:{
				number:true
			}
		},
		messages:{
			txtStaffName:{
				required:'Enter Staff Name',
			},
			txtStaffCode:{
				required:'Enter Staff Code',
			},
			txtStaffEmail:{
				required:'Enter Staff Email ID',
			},
			txtStaffMobNo:{
				number:true
			}
		}
	});


	$("#questValidation").validate({
		rules:{
			selCourse :{
				required:true,
			},
			selSubject :{
				required:true,	
			},
			selUnit:{
				required:true,
			},
			txtQuestion:{
				required:true,	
			}
		},
		messages :{
			selCourse :{
				required:"Select Course",
			},
			selSubject :{
				required:"Select Subject",
			},
			selUnit:{
				required:"Select Unit",
			},
			txtQuestion:{
				required:"Enter Question",
			}	
		}
	});

	$("#changePwdValidation").validate({
		rules:{
			txtOldPwd:{
				required:true,
				minlength: 8
			},
			txtNewPwd:{
				required:true,
				minlength: 8
			},
			txtConfirmPwd:{
				required:true,
				minlength: 8,
				equalTo: "#txtNewPwd"
			}
		},
		messages:{
			txtOldPwd:{
				required:"Enter Old Password"
			},
			txtNewPwd:{
				required:"Enter New Password",
				minlength: "Your password must be at least 5 characters long"
			},
			txtConfirmPwd:{
				required:"Enter Confirm Password",
				equalTo: "Please enter the same password as above"
			}
		}
	});

	$("#usersValidation").validate({
		rules:{
			txtUserName:{
				required:true,
			},
			txtUserEmail:{
				required:true,
				minlength: 8
			},
			txtUserPassword:{
				required:true,
				minlength: 8,
			}
		},
		messages:{
			txtUserName:{
				required:"Enter User Name"
			},
			txtUserEmail:{
				required:"Enter User Email",
				email: "Please enter a valid email address",
			},
			txtUserPassword:{
				required:"Enter Password",
				minlength: "Your password must be at least 8 characters long"
			}
		}
	});

	$("#addInternalMarks").validate({
		rules:{
			txtMarks1:{
				required:true,
				number: true,
				 digits: true,
			},
			txtMarks2:{
				required:true,
				number: true,
				digits: true,
			},
			txtMarks3:{
				required:true,
				number: true,
				digits: true,
			},
			txtMarks4:{
				required:true,
				number: true,
				digits: true,
			},
			txtMarks5:{
				required:true,
				number: true,
				digits: true,
			},
		},
			messages:{
			txtMarks1:{
				required:"Enter Marks"
			},
			txtMarks2:{
				required:"Enter Marks"
			},
			txtMarks3:{
				required:"Enter Marks"
			},
			txtMarks4:{
				required:"Enter Marks"
			},
			txtMarks5:{
				required:"Enter Marks"
			}

		}
		
	});


$("#searchQuesValidate").validate({
		rules:{
			searchByCourse:{
				required:true,
			},
			searchBySubject:{
				required:true,
			},
		},
		messages:{
			searchByCourse:{
				required: "Choose Course",
			},
			searchBySubject:{
				required :"Choose Subject",
			},
		},
	});

$("#assignSummValidate").validate({
		rules:{
			searchByCourse:{
				required:true,
			},
		},
		messages:{
			searchByCourse:{
				required: "Choose Course",
			},
		},
	});

$("#addBatchVal").validate({
		rules:{
			sltBatchType:{
				required:true,
			},
			txtBatchYear:{
				required:true,
			},

		},
		messages:{
			sltBatchType:{
				required: "Choose Batch Type",
			},
			txtBatchYear:{
				required :"Enter Batch Year",
			},
		},
	});
$("#uploadDocVal").validate({
	onfocusout: function(e) {
        this.element(e);
    },
		rules:{
			uploadFile:{
				required:true,
	            extension: "docx|rtf|doc|pdf"

			},
			txtNoOfQuesAttend:{
				required:true,
			},
			txtNoOfPages:{
				required:true,
			},

		},
		messages:{
			uploadFile:{
				required: "Upload ",
		        extension:"select valid input file format"
			},
			txtNoOfQuesAttend:{
				required :"Enter No of Questions Attend",
			},
			txtNoOfPages:{
				required :"Enter No of Pages in document",
			},
		},
	});

$("#internalMarksViewValidate").validate({
		rules:{
			searchBySem:{
				required:true,
			},
		},
		messages:{
			searchBySem:{
				required: "Choose Semester",
			},
		},
	});
$("#assignCorrectionValidation").validate({
		rules:{
			searchByBatchType:{
				required:true,
			},
			searchByBatchYear:{
				required:true,
			},
			searchBySubject:{
				required:true,
			},
		},
		messages:{
			searchByBatchType:{
				required: "Choose Batch Type",
			},
			searchByBatchYear:{
				required: "Choose Batch Year",
			},
			searchBySubject:{
				required: "Choose Subject",
			}
		},
	});
});