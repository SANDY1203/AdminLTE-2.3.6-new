//company section

function addRecordCompany() {
    // get values
	var company_id = $("#company_id").val();
    var company_name = $("#company_name").val();
    var company_address = $("#company_address").val();
    var company_phone = $("#company_phone").val();
	var company_email = $("#company_email").val();
	var user_id = $("#user_id").val();

    // Add record
    $.post("ajax/addRecordCompany.php", {
        company_id: company_id,
        company_name: company_name,
        company_address: company_address,
        company_phone: company_phone,
        company_email: company_email,
        user_id: user_id
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#company_id").val("");
        $("#company_name").val("");
        $("#company_address").val("");
        $("#company_phone").val("");
        $("#company_email").val("");
        $("#user_id").val("");
    });
}

// READ records
function readRecordsCompany() {
    $.get("ajax/readRecordsCompany.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteCompany(id) {
    var conf = confirm("Are you sure, do you really want to delete Company?");
    if (conf == true) {
        $.post("ajax/deleteCompany.php", {
                id: id
            },
            function (data, status) {
                // reload Company by using readRecords();
                readRecordsCompany();
            }
        );
    }
}

function GetCompanyDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_company_id").val(id);
    $.post("ajax/readCompanyDetails.php", {
            company_id: company_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_company_name").val(user.company_name);
            $("#update_company_address").val(user.company_address);
            $("#update_company_phone").val(user.company_phone);
            $("#update_company_email").val(user.company_email);
            $("#update_user_id").val(user.user_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateCompanyDetails() {
    // get values
    var company_name = $("#update_company_name").val();
    var company_address = $("#update_company_address").val();
    var company_phone = $("#update_company_phone").val();
    var company_email = $("#update_company_email").val();
    var user_id = $("#update_user_id").val();

    // get hidden field value
    var id = $("#hidden_company_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateCompanyDetails.php", {
            company_id: company_id,
            company_name: company_name,
            company_address: company_address,
            company_phone: company_phone,
            password: password,
            user_id: user_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecordsCompany();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsCompany(); // calling function
});






//contact section
function addRecordContact() {
    // get values
	var id = $("#id").val();
    var contact_name = $("#contact_name").val();
    var contact_position = $("#contact_position").val();
    var contact_number_one = $("#contact_number_one").val();
	var contact_number_two = $("#contact_number_two").val();
	var contact_email_one = $("#contact_email_one").val();
	var contact_email_two = $("#contact_email_two").val();
	var contact_company_allo = $("#contact_company_allo").val();

    // Add record
    $.post("ajax/addRecordContact.php", {
		id: id,
        contact_name: contact_name,
        contact_position: contact_position,
        contact_number_one: contact_number_one,
        contact_number_two: contact_number_two,
        contact_email_one: contact_email_one,
		contact_email_two: contact_email_two,
        contact_company_allo: contact_company_allo
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#contact_name").val("");
        $("#contact_position").val("");
        $("#contact_number_one").val("");
        $("#contact_number_two").val("");
        $("#contact_email_one").val("");
		$("#contact_email_two").val("");
        $("#contact_company_allo").val("");
    });
}

// READ records
function readRecordsContact() {
    $.get("ajax/readRecordsContact.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteContact(id) {
    var conf = confirm("Are you sure, do you really want to delete Contact?");
    if (conf == true) {
        $.post("ajax/deleteContact.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsContact();
            }
        );
    }
}

function GetContactDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_contact_id").val(id);
    $.post("ajax/readContactDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_contact_name").val(user.contact_name);
            $("#update_contact_position").val(user.contact_position);
            $("#update_contact_number_one").val(user.contact_number_one);
            $("#update_contact_number_two").val(user.contact_number_two);
            $("#update_contact_email_one").val(user.contact_email_one);
			$("#update_contact_email_two").val(user.contact_email_two);
            $("#update_contact_company_allo").val(user.contact_company_allo);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateContactDetails() {
    // get values
    var contact_name = $("#update_contact_name").val();
    var contact_position = $("#update_contact_name").val();
    var contact_number_one = $("#update_contact_number_one").val();
    var contact_number_two = $("#update_contact_number_two").val();
	var contact_email_one = $("#update_contact_email_one").val();
    var contact_email_two = $("#update_contact_email_two").val();
    var contact_company_allo = $("#update_contact_company_allo").val();

    // get hidden field value
    var id = $("#hidden_contact_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateContactDetails.php", {
            id: id,
        contact_name: contact_name,
        contact_position: contact_position,
        contact_number_one: contact_number_one,
        contact_number_two: contact_number_two,
        contact_email_one: contact_email_one,
		contact_email_two: contact_email_two,
        contact_company_allo: contact_company_allo
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsContact();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsContact(); // calling function
});




//FEEDBACK section
function addRecordFeedback() {
    // get values
	var id = $("#id").val();
    var user_id = $("#user_id").val();
    var ans_1 = $("#ans_1").val();
    var ans_2 = $("#ans_2").val();
	var ans_3 = $("#ans_3").val();
	var ans_4 = $("#ans_4").val();
	var ans_5 = $("#ans_5").val();
	var remarks = $("#remarks").val();
	var contact_id = $("#contact_id").val();

    // Add record
    $.post("ajax/addRecordFeedback.php", {
		id: id,
        user_id: user_id,
        ans_1: ans_1,
        ans_2: ans_2,
        ans_3: ans_3,
        ans_4: ans_4,
		ans_5: ans_5,
        remarks: remarks,
		contact_id: contact_id
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#user_id").val("");
        $("#ans_1").val("");
        $("#ans_2").val("");
        $("#ans_3").val("");
        $("#ans_4").val("");
		$("#ans_5").val("");
        $("#remarks").val("");
		$("#contact_id").val("");
    });
}

// READ records
function readRecordsFeedback() {
    $.get("ajax/readRecordsFeedback.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteFeedback(id) {
    var conf = confirm("Are you sure, do you really want to delete Feedback?");
    if (conf == true) {
        $.post("ajax/deleteFeedback.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsFeedback();
            }
        );
    }
}

function GetFeedbackDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_feedback_id").val(id);
    $.post("ajax/readFeedbackDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_user_id").val(user.user_id);
            $("#update_ans_1").val(user.ans_1);
            $("#update_ans_2").val(user.ans_2);
            $("#update_ans_3").val(user.ans_3);
            $("#update_ans_4").val(user.ans_4);
			$("#update_ans_5").val(user.ans_5);
            $("#update_remarks").val(user.remarks);
			$("#update_contact_id").val(user.contact_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateFeedbackDetails() {
    // get values
    var user_id = $("#update_user_id").val();
    var ans_1 = $("#update_ans_1").val();
    var ans_2 = $("#update_ans_2").val();
    var ans_3 = $("#update_ans_3").val();
	var ans_4 = $("#update_ans_4").val();
    var ans_5 = $("#update_ans_5").val();
    var remarks = $("#update_remarks").val();
	var contact_id = $("#update_contact_id").val();

    // get hidden field value
    var id = $("#hidden_feedback_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateFeedbackDetails.php", {
            id: id,
        user_id: user_id,
        ans_1: ans_1,
        ans_2: ans_2,
        ans_3: ans_3,
        ans_4: ans_4,
		ans_5: ans_5,
        remarks: remarks,
		contact_id: contact_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsFeedback();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsFeedback(); // calling function
});







//PROJECT section
function addRecordProject() {
    // get values
	var id = $("#id").val();
    var project_name = $("#project_name").val();
    var project_desc = $("#project_desc").val();
    var project_company_id = $("#project_company_id").val();
	var project_price = $("#project_price").val();
	var project_team = $("#project_team").val();
	var project_status = $("#project_status").val();
	var user_id = $("#user_id").val();
	

    // Add record
    $.post("ajax/addRecordProject.php", {
		id: id,
        project_name: project_name,
        project_desc: project_desc,
        project_company_id: project_company_id,
        project_price: project_price,
        project_team: project_team,
		project_status: project_status,
        user_id: user_id,
		
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#project_name").val("");
        $("#project_desc").val("");
        $("#project_company_id").val("");
        $("#project_price").val("");
        $("#project_team").val("");
		$("#project_status").val("");
     	$("#user_id").val("");
    });
}

// READ records
function readRecordsProject() {
    $.get("ajax/readRecordsProject.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteProject(id) {
    var conf = confirm("Are you sure, do you really want to delete Project?");
    if (conf == true) {
        $.post("ajax/deleteProject.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsFeedback();
            }
        );
    }
}

function GetProjectDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_project_id").val(id);
    $.post("ajax/readProjectDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_project_name").val(user.project_name);
            $("#update_project_desc").val(user.project_desc);
            $("#update_project_company_id").val(user.project_company_id);
            $("#update_project_price").val(user.project_price);
            $("#update_project_team").val(user.project_team);
			$("#update_project_status").val(user.project_status);
            $("#update_user_id").val(user.user_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateFeedbackDetails() {
    // get values
    var project_name = $("#update_project_name").val();
    var project_desc = $("#update_project_desc").val();
    var project_company_id = $("#update_project_company_id").val();
    var project_price = $("#update_project_price").val();
	var project_team = $("#update_project_team").val();
    var project_status = $("#update_project_status").val();
    var user_id = $("#update_user_id").val();


    // get hidden field value
    var id = $("#hidden_project_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProjectDetails.php", {
           id: id,
        project_name: project_name,
        project_desc: project_desc,
        project_company_id: project_company_id,
        project_price: project_price,
        project_team: project_team,
		project_status: project_status,
        user_id: user_id,
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsProject();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsProject(); // calling function
});







//PROSERV section

function addRecordProserv() {
    // get values
	var id = $("#id").val();
    var product_name = $("#product_name").val();
    var product_description = $("#product_description").val();
    var product_start_price = $("#product_start_price").val();
	var product_end_price = $("#product_end_price").val();
	var category = $("#category").val();
	

    // Add record
    $.post("ajax/addRecordProserv.php", {
		id: id,
        product_name: product_name,
        product_description: product_description,
        product_start_price: product_start_price,
        product_end_price: product_end_price,
        category: category

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#product_name").val("");
        $("#product_description").val("");
        $("#product_start_price").val("");
        $("#product_end_price").val("");
        $("#category").val("");

    });
}

// READ records
function readRecordsProserv() {
    $.get("ajax/readRecordsProserv.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteProserv(id) {
    var conf = confirm("Are you sure, do you really want to delete Proserv?");
    if (conf == true) {
        $.post("ajax/deleteProserv.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsProserv();
            }
        );
    }
}

function GetProservDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_proserv_id").val(id);
    $.post("ajax/readProservDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_product_name").val(user.product_name);
            $("#update_product_description").val(user.product_description);
            $("#update_product_start_price").val(user.product_start_price);
            $("#update_product_end_price").val(user.product_end_price);
            $("#update_category").val(user.category);
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateProservDetails() {
    // get values
    var product_name = $("#update_product_name").val();
    var product_description = $("#update_product_description").val();
    var product_start_price = $("#update_product_start_price").val();
    var product_end_price = $("#update_product_end_price").val();
	var category = $("#update_category").val();


    // get hidden field value
    var id = $("#hidden_proserv_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProservDetails.php", {
            id: id,
        product_name: product_name,
        product_description: product_description,
        product_start_price: product_start_price,
        product_end_price: product_end_price,
        category: category
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsProserv();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsProserv(); // calling function
});







//PROSERV_PROJECT section

function addRecordProserv_Project() {
    // get values
	var id = $("#id").val();
    var proserv_id = $("#proserv_id").val();
    var project_contractor_id = $("#project_contractor_id").val();
    var project_price = $("#project_price").val();
	var project_team = $("#project_team").val();
	var project_status = $("#project_status").val();
	var category_proserv_project = $("#category_proserv_project").val();
	

    // Add record
    $.post("ajax/addRecordProserv_Project.php", {
		id: id,
        proserv_id: proserv_id,
        project_contractor_id: project_contractor_id,
        project_price: project_price,
        project_team: project_team,
        project_status: project_status,
		category_proserv_project: category_proserv_project

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#proserv_id").val("");
        $("#project_contractor_id").val("");
        $("#project_price").val("");
        $("#project_team").val("");
        $("#project_status").val("");
		$("#category_proserv_project").val("");

    });
}

// READ records
function readRecordsProserv_Project() {
    $.get("ajax/readRecordsProserv_Project.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteProserv_Project(id) {
    var conf = confirm("Are you sure, do you really want to delete Proserv_Project?");
    if (conf == true) {
        $.post("ajax/deleteProserv_Project.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsProserv_Project();
            }
        );
    }
}

function GetProserv_ProjectDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_proserv_project_id").val(id);
    $.post("ajax/readProserv_ProjectDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_proserv_id").val(user.proserv_id);
            $("#update_project_contractor_id").val(user.project_contractor_id);
            $("#update_project_price").val(user.project_price);
            $("#update_project_team").val(user.project_team);
            $("#update_project_status").val(user.project_status);
			$("#update_category_proserv_project").val(user.category_proserv_project);
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateProserv_ProjectDetails() {
    // get values
    var proserv_id = $("#update_proserv_id").val();
    var project_contractor_id = $("#update_project_contractor_id").val();
    var project_price = $("#update_project_price").val();
    var project_team = $("#update_project_team").val();
	var project_status = $("#update_project_status").val();
	var category_proserv_project = $("#update_category_proserv_project").val();


    // get hidden field value
    var id = $("#hidden_proserv_project_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProserv_ProjectDetails.php", {
           id: id,
        proserv_id: proserv_id,
        project_contractor_id: project_contractor_id,
        project_price: project_price,
        project_team: project_team,
        project_status: project_status,
		category_proserv_project: category_proserv_project
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsProserv_Project();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsProserv_Project(); // calling function
});







//QUESTIONS section

function addRecordQuestions() {
    // get values
	var q_id = $("#q_id").val();
    var question = $("#question").val();
    
	

    // Add record
    $.post("ajax/addRecordQuestions.php", {
		q_id: q_id,
        question: question

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#q_id").val("");
        $("#question").val("");
       

    });
}

// READ records
function readRecordsQuestions() {
    $.get("ajax/readRecordsQuestions.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteQuestions(id) {
    var conf = confirm("Are you sure, do you really want to delete Questions?");
    if (conf == true) {
        $.post("ajax/deleteQuestions.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsQuestions();
            }
        );
    }
}

function GetQuestionsDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_questions_id").val(id);
    $.post("ajax/readQuestionsDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_q_id").val(user.q_id);
            $("#update_question").val(user.question);
           
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateQuestionsDetails() {
    // get values
    var q_id = $("#update_q_id").val();
    var question = $("#update_question").val();
    

    // get hidden field value
    var id = $("#hidden_question_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateQuestionsDetails.php", {
           q_id: q_id,
        question: question
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsQuestions();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsQuestions(); // calling function
});







//TEAM section

function addRecordTeam() {
    // get values
	var team_id = $("#team_id").val();
    var team_name = $("#team_name").val();
    var team_lead = $("#team_lead").val();
    
	

    // Add record
    $.post("ajax/addRecordTeam.php", {
		team_id: team_id,
        team_name: team_name,
		team_lead: team_lead

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#team_id").val("");
        $("#team_name").val("");
        $("#team_lead").val("");
       

    });
}

// READ records
function readRecordsTeam() {
    $.get("ajax/readRecordsTeam.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteTeam(id) {
    var conf = confirm("Are you sure, do you really want to delete Team?");
    if (conf == true) {
        $.post("ajax/deleteTeam.php", {
                team_id: team_id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsTeam();
            }
        );
    }
}

function GetTeamDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_team_id").val(id);
    $.post("ajax/readTeamDetails.php", {
            team_id: team_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_team_id").val(user.team_id);
            $("#update_team_name").val(user.team_name);
            $("#update_team_lead").val(user.team_lead);
           
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateTeamDetails() {
    // get values
    var team_id = $("#update_team_id").val();
    var team_name = $("#update_team_name").val();
    var team_lead = $("#update_team_lead").val();
    

    // get hidden field value
    var id = $("#hidden_team_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateTeamDetails.php", {
           team_id: team_id,
        team_name: team_name,
		team_lead: team_lead
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsTeam();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsTeam(); // calling function
});






//TEAM MEMBERS section

function addRecordTeam_Members() {
    // get values
	var team_m_id = $("#team_m_id").val();
    var team_m_first_name = $("#team_m_first_name").val();
    var team_m_last_name = $("#team_m_last_name").val();
    var team_m_position = $("#team_m_position").val();
    var team_m_employement_status = $("#team_m_employement_status").val();
    var team_id = $("#team_id").val();
    
	

    // Add record
    $.post("ajax/addRecordTeam_Members.php", {
		team_m_id: team_m_id,
        team_m_first_name: team_m_first_name,
		team_m_last_name: team_m_last_name,
		team_m_position: team_m_position,
		team_m_employement_status: team_m_employement_status,
		team_id: team_id
		
		

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#team_m_id").val("");
        $("#team_m_first_name").val("");
        $("#team_m_last_name").val("");
        $("#team_m_position").val("");
        $("#team_m_employement_status").val("");
        $("#team_id").val("");
       

    });
}

// READ records
function readRecordsTeam_Members() {
    $.get("ajax/readRecordsTeam_Members.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteTeam_Members(id) {
    var conf = confirm("Are you sure, do you really want to delete Team Members?");
    if (conf == true) {
        $.post("ajax/deleteTeam_Members.php", {
                team_m_id: team_m_id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsTeam_Members();
            }
        );
    }
}

function GetTeam_MembersDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_team_m_id").val(id);
    $.post("ajax/readTeam_MembersDetails.php", {
            team_m_id: team_m_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_team_m_id").val(user.team_m_id);
            $("#update_team_m_first_name").val(user.team_m_first_name);
            $("#update_team_m_last_name").val(user.team_m_last_name);
            $("#update_team_m_position").val(user.team_m_position);
            $("#update_team_m_employement_status").val(user.team_m_employement_status);
            $("#update_team_id").val(user.team_id);
           
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateTeam_MembersDetails() {
    // get values
    var team_m_id = $("#update_team_m_id").val();
    var team_m_first_name = $("#update_team_m_first_name").val();
    var team_m_last_name = $("#update_team_m_last_name").val();
    var team_m_position = $("#update_team_m_position").val();
    var team_m_employement_status = $("#update_team_m_employement_status").val();
    var team_id = $("#update_team_id").val();
    

    // get hidden field value
    var id = $("#hidden_team_members_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateTeam_MembersDetails.php", {
           team_m_id: team_m_id,
        team_m_first_name: team_m_first_name,
		team_m_last_name: team_m_last_name,
		team_m_position: team_m_position,
		team_m_employement_status: team_m_employement_status,
		team_id: team_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsTeam_Members();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsTeam_Members(); // calling function
});







//QUOTATION section

function addRecordQuotation() {
    // get values
	var quotation_id = $("#quotation_id").val();
    var lead = $("#lead").val();
    var opportunity = $("#opportunity").val();
    var proposal = $("#proposal").val();
	var quotation = $("#quotation").val();
	var ra = $("#ra").val();
	var design = $("#design").val();
	var testing = $("#testing").val();
	var development = $("#development").val();
	var support = $("#support").val();
	var maintenance = $("#maintenance").val();
	var invoice = $("#invoice").val();
	var delivery = $("#delivery").val();
	var cancelled = $("#cancelled").val();
	var delayed = $("#delayed").val();
	var completed = $("#completed").val();
	var user_id = $("#user_id").val();

    // Add record
    $.post("ajax/addRecordQuotation.php", {
		quotation_id: quotation_id,
        lead: lead,
        opportunity: opportunity,
        proposal: proposal,
        quotation: quotation,
        ra: ra,
		design: design,
        testing: testing,
		development: development,
		support: support,
		maintenance: maintenance,
		invoice: invoice,
		delivery: delivery,
		cancelled: cancelled,
		delayed: delayed,
		completed: completed,
		user_id: user_id
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#quotation_id").val("");
        $("#lead").val("");
        $("#opportunity").val("");
        $("#proposal").val("");
        $("#quotation").val("");
        $("#ra").val("");
		$("#design").val("");
        $("#testing").val("");
		$("#development").val("");
		$("#support").val("");
		$("#maintenance").val("");
		$("#invoice").val("");
		$("#delivery").val("");
		$("#cancelled").val("");
		$("#delayed").val("");
		$("#completed").val("");
		$("#user_id").val("");
    });
}

// READ records
function readRecordsQuotation() {
    $.get("ajax/readRecordsQuotation.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteQuotation(id) {
    var conf = confirm("Are you sure, do you really want to delete Quotation?");
    if (conf == true) {
        $.post("ajax/deleteQuotation.php", {
                quotation_id: quotation_id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsQuotation();
            }
        );
    }
}

function GetQuotationDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_quotation_id").val(id);
    $.post("ajax/readQuotationDetails.php", {
            quotation_id: quotation_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_lead").val(user.lead);
            $("#update_opportunity").val(user.opportunity);
            $("#update_proposal").val(user.proposal);
            $("#update_quotation").val(user.quotation);
            $("#update_ra").val(user.ra);
			$("#update_design").val(user.design);
            $("#update_testing").val(user.testing);
			$("#update_development").val(user.development);
			$("#update_support").val(user.support);
			$("#update_maintenance").val(user.maintenance);
			$("#update_invoice").val(user.invoice);
			$("#update_delivery").val(user.delivery);
			$("#update_cancelled").val(user.cancelled);
			$("#update_delayed").val(user.delayed);
			$("#update_completed").val(user.completed);
			$("#update_user_id").val(user.user_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateQuotationDetails() {
    // get values
    var lead = $("#update_lead").val();
    var opportunity = $("#update_opportunity").val();
    var proposal = $("#update_proposal").val();
    var quotation = $("#update_quotation").val();
	var ra = $("#update_ra").val();
    var design = $("#update_design").val();
    var testing = $("#update_testing").val();
	var development = $("#update_development").val();
	var support = $("#update_support").val();
	var maintenance = $("#update_maintenance").val();
	var invoice = $("#update_invoice").val();
	var delivery = $("#update_delivery").val();
	var cancelled = $("#update_cancelled").val();
	var delayed = $("#update_delayed").val();
	var completed = $("#update_completed").val();
	var user_id = $("#update_user_id").val();

    // get hidden field value
    var id = $("#hidden_quotation_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateQuotationDetails.php", {
            quotation_id: quotation_id,
        lead: lead,
        opportunity: opportunity,
        proposal: proposal,
        quotation: quotation,
        ra: ra,
		design: design,
        testing: testing,
		development: development,
		support: support,
		maintenance: maintenance,
		invoice: invoice,
		delivery: delivery,
		cancelled: cancelled,
		delayed: delayed,
		completed: completed,
		user_id: user_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsQuotation();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsQuotation(); // calling function
});
//////////////////////////////////////////////////////////////////////////





//company section
function addRecordCompany() {
    // get values
	var company_id = $("#company_id").val();
    var company_name = $("#company_name").val();
    var company_address = $("#company_address").val();
    var company_phone = $("#company_phone").val();
	var company_email = $("#company_email").val();
	var user_id = $("#user_id").val();

    // Add record
    $.post("ajax/addRecordCompany.php", {
        company_id: company_id,
        company_name: company_name,
        company_address: company_address,
        company_phone: company_phone,
        company_email: company_email,
        user_id: user_id
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#company_id").val("");
        $("#company_name").val("");
        $("#company_address").val("");
        $("#company_phone").val("");
        $("#company_email").val("");
        $("#user_id").val("");
    });
}

// READ records
function readRecordsCompany() {
    $.get("ajax/readRecordsCompany.php", {}, function (data, status) {
        $(".records_content1").html(data);
    });
}


function DeleteCompany(id) {
    var conf = confirm("Are you sure, do you really want to delete Company?");
    if (conf == true) {
        $.post("ajax/deleteCompany.php", {
                id: id
            },
            function (data, status) {
                // reload Company by using readRecords();
                readRecordsCompany();
            }
        );
    }
}

function GetCompanyDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_company_id").val(id);
    $.post("ajax/readCompanyDetails.php", {
            company_id: company_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_company_name").val(user.company_name);
            $("#update_company_address").val(user.company_address);
            $("#update_company_phone").val(user.company_phone);
            $("#update_company_email").val(user.company_email);
            $("#update_user_id").val(user.user_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateCompanyDetails() {
    // get values
    var company_name = $("#update_company_name").val();
    var company_address = $("#update_company_address").val();
    var company_phone = $("#update_company_phone").val();
    var company_email = $("#update_company_email").val();
    var user_id = $("#update_user_id").val();

    // get hidden field value
    var id = $("#hidden_company_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateCompanyDetails.php", {
            company_id: company_id,
            company_name: company_name,
            company_address: company_address,
            company_phone: company_phone,
            password: password,
            user_id: user_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecordsCompany();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsCompany(); // calling function
});






//contact section
function addRecordContact() {
    // get values
	var id = $("#id").val();
    var contact_name = $("#contact_name").val();
    var contact_position = $("#contact_position").val();
    var contact_number_one = $("#contact_number_one").val();
	var contact_number_two = $("#contact_number_two").val();
	var contact_email_one = $("#contact_email_one").val();
	var contact_email_two = $("#contact_email_two").val();
	var contact_company_allo = $("#contact_company_allo").val();

    // Add record
    $.post("ajax/addRecordContact.php", {
		id: id,
        contact_name: contact_name,
        contact_position: contact_position,
        contact_number_one: contact_number_one,
        contact_number_two: contact_number_two,
        contact_email_one: contact_email_one,
		contact_email_two: contact_email_two,
        contact_company_allo: contact_company_allo
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#contact_name").val("");
        $("#contact_position").val("");
        $("#contact_number_one").val("");
        $("#contact_number_two").val("");
        $("#contact_email_one").val("");
		$("#contact_email_two").val("");
        $("#contact_company_allo").val("");
    });
}

// READ records
function readRecordsContact() {
    $.get("ajax/readRecordsContact.php", {}, function (data, status) {
        $(".records_content2").html(data);
    });
}


function DeleteContact(id) {
    var conf = confirm("Are you sure, do you really want to delete Contact?");
    if (conf == true) {
        $.post("ajax/deleteContact.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsContact();
            }
        );
    }
}

function GetContactDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_contact_id").val(id);
    $.post("ajax/readContactDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_contact_name").val(user.contact_name);
            $("#update_contact_position").val(user.contact_position);
            $("#update_contact_number_one").val(user.contact_number_one);
            $("#update_contact_number_two").val(user.contact_number_two);
            $("#update_contact_email_one").val(user.contact_email_one);
			$("#update_contact_email_two").val(user.contact_email_two);
            $("#update_contact_company_allo").val(user.contact_company_allo);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateContactDetails() {
    // get values
    var contact_name = $("#update_contact_name").val();
    var contact_position = $("#update_contact_name").val();
    var contact_number_one = $("#update_contact_number_one").val();
    var contact_number_two = $("#update_contact_number_two").val();
	var contact_email_one = $("#update_contact_email_one").val();
    var contact_email_two = $("#update_contact_email_two").val();
    var contact_company_allo = $("#update_contact_company_allo").val();

    // get hidden field value
    var id = $("#hidden_contact_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateContactDetails.php", {
            id: id,
        contact_name: contact_name,
        contact_position: contact_position,
        contact_number_one: contact_number_one,
        contact_number_two: contact_number_two,
        contact_email_one: contact_email_one,
		contact_email_two: contact_email_two,
        contact_company_allo: contact_company_allo
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsContact();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsContact(); // calling function
});




//FEEDBACK section
function addRecordFeedback() {
    // get values
	var id = $("#id").val();
    var user_id = $("#user_id").val();
    var ans_1 = $("#ans_1").val();
    var ans_2 = $("#ans_2").val();
	var ans_3 = $("#ans_3").val();
	var ans_4 = $("#ans_4").val();
	var ans_5 = $("#ans_5").val();
	var remarks = $("#remarks").val();
	var contact_id = $("#contact_id").val();

    // Add record
    $.post("ajax/addRecordFeedback.php", {
		id: id,
        user_id: user_id,
        ans_1: ans_1,
        ans_2: ans_2,
        ans_3: ans_3,
        ans_4: ans_4,
		ans_5: ans_5,
        remarks: remarks,
		contact_id: contact_id
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#user_id").val("");
        $("#ans_1").val("");
        $("#ans_2").val("");
        $("#ans_3").val("");
        $("#ans_4").val("");
		$("#ans_5").val("");
        $("#remarks").val("");
		$("#contact_id").val("");
    });
}

// READ records
function readRecordsFeedback() {
    $.get("ajax/readRecordsFeedback.php", {}, function (data, status) {
        $(".records_content3").html(data);
    });
}


function DeleteFeedback(id) {
    var conf = confirm("Are you sure, do you really want to delete Feedback?");
    if (conf == true) {
        $.post("ajax/deleteFeedback.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsFeedback();
            }
        );
    }
}

function GetFeedbackDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_feedback_id").val(id);
    $.post("ajax/readFeedbackDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_user_id").val(user.user_id);
            $("#update_ans_1").val(user.ans_1);
            $("#update_ans_2").val(user.ans_2);
            $("#update_ans_3").val(user.ans_3);
            $("#update_ans_4").val(user.ans_4);
			$("#update_ans_5").val(user.ans_5);
            $("#update_remarks").val(user.remarks);
			$("#update_contact_id").val(user.contact_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateFeedbackDetails() {
    // get values
    var user_id = $("#update_user_id").val();
    var ans_1 = $("#update_ans_1").val();
    var ans_2 = $("#update_ans_2").val();
    var ans_3 = $("#update_ans_3").val();
	var ans_4 = $("#update_ans_4").val();
    var ans_5 = $("#update_ans_5").val();
    var remarks = $("#update_remarks").val();
	var contact_id = $("#update_contact_id").val();

    // get hidden field value
    var id = $("#hidden_feedback_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateFeedbackDetails.php", {
            id: id,
        user_id: user_id,
        ans_1: ans_1,
        ans_2: ans_2,
        ans_3: ans_3,
        ans_4: ans_4,
		ans_5: ans_5,
        remarks: remarks,
		contact_id: contact_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsFeedback();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsFeedback(); // calling function
});







//PROJECT section
function addRecordProject() {
    // get values
	var id = $("#id").val();
    var project_name = $("#project_name").val();
    var project_desc = $("#project_desc").val();
    var project_company_id = $("#project_company_id").val();
	var project_price = $("#project_price").val();
	var project_team = $("#project_team").val();
	var project_status = $("#project_status").val();
	var user_id = $("#user_id").val();
	

    // Add record
    $.post("ajax/addRecordProject.php", {
		id: id,
        project_name: project_name,
        project_desc: project_desc,
        project_company_id: project_company_id,
        project_price: project_price,
        project_team: project_team,
		project_status: project_status,
        user_id: user_id,
		
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#project_name").val("");
        $("#project_desc").val("");
        $("#project_company_id").val("");
        $("#project_price").val("");
        $("#project_team").val("");
		$("#project_status").val("");
     	$("#user_id").val("");
    });
}

// READ records
function readRecordsProject() {
    $.get("ajax/readRecordsProject.php", {}, function (data, status) {
        $(".records_content4").html(data);
    });
}


function DeleteProject(id) {
    var conf = confirm("Are you sure, do you really want to delete Project?");
    if (conf == true) {
        $.post("ajax/deleteProject.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsFeedback();
            }
        );
    }
}

function GetProjectDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_project_id").val(id);
    $.post("ajax/readProjectDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_project_name").val(user.project_name);
            $("#update_project_desc").val(user.project_desc);
            $("#update_project_company_id").val(user.project_company_id);
            $("#update_project_price").val(user.project_price);
            $("#update_project_team").val(user.project_team);
			$("#update_project_status").val(user.project_status);
            $("#update_user_id").val(user.user_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateFeedbackDetails() {
    // get values
    var project_name = $("#update_project_name").val();
    var project_desc = $("#update_project_desc").val();
    var project_company_id = $("#update_project_company_id").val();
    var project_price = $("#update_project_price").val();
	var project_team = $("#update_project_team").val();
    var project_status = $("#update_project_status").val();
    var user_id = $("#update_user_id").val();


    // get hidden field value
    var id = $("#hidden_project_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProjectDetails.php", {
           id: id,
        project_name: project_name,
        project_desc: project_desc,
        project_company_id: project_company_id,
        project_price: project_price,
        project_team: project_team,
		project_status: project_status,
        user_id: user_id,
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsProject();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsProject(); // calling function
});
=======
>>>>>>> origin/combine






//PROSERV section

function addRecordProserv() {
    // get values
	var id = $("#id").val();
    var product_name = $("#product_name").val();
    var product_description = $("#product_description").val();
    var product_start_price = $("#product_start_price").val();
	var product_end_price = $("#product_end_price").val();
	var category = $("#category").val();
	

    // Add record
    $.post("ajax/addRecordProserv.php", {
		id: id,
        product_name: product_name,
        product_description: product_description,
        product_start_price: product_start_price,
        product_end_price: product_end_price,
        category: category

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#product_name").val("");
        $("#product_description").val("");
        $("#product_start_price").val("");
        $("#product_end_price").val("");
        $("#category").val("");

    });
}

// READ records
function readRecordsProserv() {
    $.get("ajax/readRecordsProserv.php", {}, function (data, status) {
        $(".records_content5").html(data);
    });
}


function DeleteProserv(id) {
    var conf = confirm("Are you sure, do you really want to delete Proserv?");
    if (conf == true) {
        $.post("ajax/deleteProserv.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsProserv();
            }
        );
    }
}

function GetProservDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_proserv_id").val(id);
    $.post("ajax/readProservDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_product_name").val(user.product_name);
            $("#update_product_description").val(user.product_description);
            $("#update_product_start_price").val(user.product_start_price);
            $("#update_product_end_price").val(user.product_end_price);
            $("#update_category").val(user.category);
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateProservDetails() {
    // get values
    var product_name = $("#update_product_name").val();
    var product_description = $("#update_product_description").val();
    var product_start_price = $("#update_product_start_price").val();
    var product_end_price = $("#update_product_end_price").val();
	var category = $("#update_category").val();


    // get hidden field value
    var id = $("#hidden_proserv_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProservDetails.php", {
            id: id,
        product_name: product_name,
        product_description: product_description,
        product_start_price: product_start_price,
        product_end_price: product_end_price,
        category: category
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsProserv();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsProserv(); // calling function
});







//PROSERV_PROJECT section

function addRecordProserv_Project() {
    // get values
	var id = $("#id").val();
    var proserv_id = $("#proserv_id").val();
    var project_contractor_id = $("#project_contractor_id").val();
    var project_price = $("#project_price").val();
	var project_team = $("#project_team").val();
	var project_status = $("#project_status").val();
	var category_proserv_project = $("#category_proserv_project").val();
	

    // Add record
    $.post("ajax/addRecordProserv_Project.php", {
		id: id,
        proserv_id: proserv_id,
        project_contractor_id: project_contractor_id,
        project_price: project_price,
        project_team: project_team,
        project_status: project_status,
		category_proserv_project: category_proserv_project

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#id").val("");
        $("#proserv_id").val("");
        $("#project_contractor_id").val("");
        $("#project_price").val("");
        $("#project_team").val("");
        $("#project_status").val("");
		$("#category_proserv_project").val("");

    });
}

// READ records
function readRecordsProserv_Project() {
    $.get("ajax/readRecordsProserv_Project.php", {}, function (data, status) {
        $(".records_content6").html(data);
    });
}


function DeleteProserv_Project(id) {
    var conf = confirm("Are you sure, do you really want to delete Proserv_Project?");
    if (conf == true) {
        $.post("ajax/deleteProserv_Project.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsProserv_Project();
            }
        );
    }
}

function GetProserv_ProjectDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_proserv_project_id").val(id);
    $.post("ajax/readProserv_ProjectDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_proserv_id").val(user.proserv_id);
            $("#update_project_contractor_id").val(user.project_contractor_id);
            $("#update_project_price").val(user.project_price);
            $("#update_project_team").val(user.project_team);
            $("#update_project_status").val(user.project_status);
			$("#update_category_proserv_project").val(user.category_proserv_project);
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateProserv_ProjectDetails() {
    // get values
    var proserv_id = $("#update_proserv_id").val();
    var project_contractor_id = $("#update_project_contractor_id").val();
    var project_price = $("#update_project_price").val();
    var project_team = $("#update_project_team").val();
	var project_status = $("#update_project_status").val();
	var category_proserv_project = $("#update_category_proserv_project").val();


    // get hidden field value
    var id = $("#hidden_proserv_project_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateProserv_ProjectDetails.php", {
           id: id,
        proserv_id: proserv_id,
        project_contractor_id: project_contractor_id,
        project_price: project_price,
        project_team: project_team,
        project_status: project_status,
		category_proserv_project: category_proserv_project
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsProserv_Project();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsProserv_Project(); // calling function
});







//QUESTIONS section

function addRecordQuestions() {
    // get values
	var q_id = $("#q_id").val();
    var question = $("#question").val();
    
	

    // Add record
    $.post("ajax/addRecordQuestions.php", {
		q_id: q_id,
        question: question

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#q_id").val("");
        $("#question").val("");
       

    });
}

// READ records
function readRecordsQuestions() {
    $.get("ajax/readRecordsQuestions.php", {}, function (data, status) {
        $(".records_content7").html(data);
    });
}


function DeleteQuestions(id) {
    var conf = confirm("Are you sure, do you really want to delete Questions?");
    if (conf == true) {
        $.post("ajax/deleteQuestions.php", {
                id: id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsQuestions();
            }
        );
    }
}

function GetQuestionsDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_questions_id").val(id);
    $.post("ajax/readQuestionsDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_q_id").val(user.q_id);
            $("#update_question").val(user.question);
           
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateQuestionsDetails() {
    // get values
    var q_id = $("#update_q_id").val();
    var question = $("#update_question").val();
    

    // get hidden field value
    var id = $("#hidden_question_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateQuestionsDetails.php", {
           q_id: q_id,
        question: question
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsQuestions();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsQuestions(); // calling function
});







//TEAM section

function addRecordTeam() {
    // get values
	var team_id = $("#team_id").val();
    var team_name = $("#team_name").val();
    var team_lead = $("#team_lead").val();
    
	

    // Add record
    $.post("ajax/addRecordTeam.php", {
		team_id: team_id,
        team_name: team_name,
		team_lead: team_lead

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#team_id").val("");
        $("#team_name").val("");
        $("#team_lead").val("");
       

    });
}

// READ records
function readRecordsTeam() {
    $.get("ajax/readRecordsTeam.php", {}, function (data, status) {
        $(".records_content8").html(data);
    });
}


function DeleteTeam(id) {
    var conf = confirm("Are you sure, do you really want to delete Team?");
    if (conf == true) {
        $.post("ajax/deleteTeam.php", {
                team_id: team_id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsTeam();
            }
        );
    }
}

function GetTeamDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_team_id").val(id);
    $.post("ajax/readTeamDetails.php", {
            team_id: team_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_team_id").val(user.team_id);
            $("#update_team_name").val(user.team_name);
            $("#update_team_lead").val(user.team_lead);
           
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateTeamDetails() {
    // get values
    var team_id = $("#update_team_id").val();
    var team_name = $("#update_team_name").val();
    var team_lead = $("#update_team_lead").val();
    

    // get hidden field value
    var id = $("#hidden_team_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateTeamDetails.php", {
           team_id: team_id,
        team_name: team_name,
		team_lead: team_lead
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsTeam();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsTeam(); // calling function
});






//TEAM MEMBERS section

function addRecordTeam_Members() {
    // get values
	var team_m_id = $("#team_m_id").val();
    var team_m_first_name = $("#team_m_first_name").val();
    var team_m_last_name = $("#team_m_last_name").val();
    var team_m_position = $("#team_m_position").val();
    var team_m_employement_status = $("#team_m_employement_status").val();
    var team_id = $("#team_id").val();
    
	

    // Add record
    $.post("ajax/addRecordTeam_Members.php", {
		team_m_id: team_m_id,
        team_m_first_name: team_m_first_name,
		team_m_last_name: team_m_last_name,
		team_m_position: team_m_position,
		team_m_employement_status: team_m_employement_status,
		team_id: team_id
		
		

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#team_m_id").val("");
        $("#team_m_first_name").val("");
        $("#team_m_last_name").val("");
        $("#team_m_position").val("");
        $("#team_m_employement_status").val("");
        $("#team_id").val("");
       

    });
}

// READ records
function readRecordsTeam_Members() {
    $.get("ajax/readRecordsTeam_Members.php", {}, function (data, status) {
        $(".records_content8").html(data);
    });
}


function DeleteTeam_Members(id) {
    var conf = confirm("Are you sure, do you really want to delete Team Members?");
    if (conf == true) {
        $.post("ajax/deleteTeam_Members.php", {
                team_m_id: team_m_id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsTeam_Members();
            }
        );
    }
}

function GetTeam_MembersDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_team_m_id").val(id);
    $.post("ajax/readTeam_MembersDetails.php", {
            team_m_id: team_m_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_team_m_id").val(user.team_m_id);
            $("#update_team_m_first_name").val(user.team_m_first_name);
            $("#update_team_m_last_name").val(user.team_m_last_name);
            $("#update_team_m_position").val(user.team_m_position);
            $("#update_team_m_employement_status").val(user.team_m_employement_status);
            $("#update_team_id").val(user.team_id);
           
			
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateTeam_MembersDetails() {
    // get values
    var team_m_id = $("#update_team_m_id").val();
    var team_m_first_name = $("#update_team_m_first_name").val();
    var team_m_last_name = $("#update_team_m_last_name").val();
    var team_m_position = $("#update_team_m_position").val();
    var team_m_employement_status = $("#update_team_m_employement_status").val();
    var team_id = $("#update_team_id").val();
    

    // get hidden field value
    var id = $("#hidden_team_members_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateTeam_MembersDetails.php", {
           team_m_id: team_m_id,
        team_m_first_name: team_m_first_name,
		team_m_last_name: team_m_last_name,
		team_m_position: team_m_position,
		team_m_employement_status: team_m_employement_status,
		team_id: team_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsTeam_Members();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsTeam_Members(); // calling function
});







//QUOTATION section

function addRecordQuotation() {
    // get values
	var quotation_id = $("#quotation_id").val();
    var lead = $("#lead").val();
    var opportunity = $("#opportunity").val();
    var proposal = $("#proposal").val();
	var quotation = $("#quotation").val();
	var ra = $("#ra").val();
	var design = $("#design").val();
	var testing = $("#testing").val();
	var development = $("#development").val();
	var support = $("#support").val();
	var maintenance = $("#maintenance").val();
	var invoice = $("#invoice").val();
	var delivery = $("#delivery").val();
	var cancelled = $("#cancelled").val();
	var delayed = $("#delayed").val();
	var completed = $("#completed").val();
	var user_id = $("#user_id").val();

    // Add record
    $.post("ajax/addRecordQuotation.php", {
		quotation_id: quotation_id,
        lead: lead,
        opportunity: opportunity,
        proposal: proposal,
        quotation: quotation,
        ra: ra,
		design: design,
        testing: testing,
		development: development,
		support: support,
		maintenance: maintenance,
		invoice: invoice,
		delivery: delivery,
		cancelled: cancelled,
		delayed: delayed,
		completed: completed,
		user_id: user_id
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#quotation_id").val("");
        $("#lead").val("");
        $("#opportunity").val("");
        $("#proposal").val("");
        $("#quotation").val("");
        $("#ra").val("");
		$("#design").val("");
        $("#testing").val("");
		$("#development").val("");
		$("#support").val("");
		$("#maintenance").val("");
		$("#invoice").val("");
		$("#delivery").val("");
		$("#cancelled").val("");
		$("#delayed").val("");
		$("#completed").val("");
		$("#user_id").val("");
    });
}

// READ records
function readRecordsQuotation() {
    $.get("ajax/readRecordsQuotation.php", {}, function (data, status) {
        $(".records_content9").html(data);
    });
}


function DeleteQuotation(id) {
    var conf = confirm("Are you sure, do you really want to delete Quotation?");
    if (conf == true) {
        $.post("ajax/deleteQuotation.php", {
                quotation_id: quotation_id
            },
            function (data, status) {
                // reload Contact by using readRecords();
                readRecordsQuotation();
            }
        );
    }
}

function GetQuotationDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_quotation_id").val(id);
    $.post("ajax/readQuotationDetails.php", {
            quotation_id: quotation_id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_lead").val(user.lead);
            $("#update_opportunity").val(user.opportunity);
            $("#update_proposal").val(user.proposal);
            $("#update_quotation").val(user.quotation);
            $("#update_ra").val(user.ra);
			$("#update_design").val(user.design);
            $("#update_testing").val(user.testing);
			$("#update_development").val(user.development);
			$("#update_support").val(user.support);
			$("#update_maintenance").val(user.maintenance);
			$("#update_invoice").val(user.invoice);
			$("#update_delivery").val(user.delivery);
			$("#update_cancelled").val(user.cancelled);
			$("#update_delayed").val(user.delayed);
			$("#update_completed").val(user.completed);
			$("#update_user_id").val(user.user_id);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateQuotationDetails() {
    // get values
    var lead = $("#update_lead").val();
    var opportunity = $("#update_opportunity").val();
    var proposal = $("#update_proposal").val();
    var quotation = $("#update_quotation").val();
	var ra = $("#update_ra").val();
    var design = $("#update_design").val();
    var testing = $("#update_testing").val();
	var development = $("#update_development").val();
	var support = $("#update_support").val();
	var maintenance = $("#update_maintenance").val();
	var invoice = $("#update_invoice").val();
	var delivery = $("#update_delivery").val();
	var cancelled = $("#update_cancelled").val();
	var delayed = $("#update_delayed").val();
	var completed = $("#update_completed").val();
	var user_id = $("#update_user_id").val();

    // get hidden field value
    var id = $("#hidden_quotation_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateQuotationDetails.php", {
            quotation_id: quotation_id,
        lead: lead,
        opportunity: opportunity,
        proposal: proposal,
        quotation: quotation,
        ra: ra,
		design: design,
        testing: testing,
		development: development,
		support: support,
		maintenance: maintenance,
		invoice: invoice,
		delivery: delivery,
		cancelled: cancelled,
		delayed: delayed,
		completed: completed,
		user_id: user_id
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload contact by using readRecords();
            readRecordsQuotation();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsQuotation(); // calling function
});