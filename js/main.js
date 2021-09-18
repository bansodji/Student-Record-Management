$(document).ready(function () {

    //Hide success & error message 
    function hideMessage(){
        setTimeout(function() {
            $('#error-msg').fadeOut();
        }, 5000);
        setTimeout(function() {
            $('#success-msg').fadeOut();
        }, 5000);
    }

    //load Record
    function loadtable() {
        $.ajax({
            url: "backend/loadtable.php",
            type: "POST",
            success: function (data) {
                $("#table-data").html(data);
            }
        });
    }
    loadtable();

    // Insert new Record
    $("#save-btn").on("click", function (e) {
        e.preventDefault();     //preventing bydafault programming of submit button

        var fullname = $("#fullname").val();
        var age = $("#age").val();
        var department = $("#department").val();

        if (fullname == "" || age == "" || department == "") {
            $("#error-msg").html("All fields are required!").slideDown();
            $("#success-msg").slideUp();
            hideMessage();
        }
        else {
            $.ajax({
                url: "backend/insert_data.php",
                type: "POST",
                data: { s_fullname: fullname, s_age: age, s_department: department },
                success: function (data) {
                    if (data == 1) {
                        loadtable();
                        $("#add-form").trigger("reset");
                        $("#success-msg").html("Data saved successfully").slideDown();
                        $("#error-msg").slideUp();
                        hideMessage();
                    }
                    else {
                        $("#error-msg").html("Can't save data").slideDown();
                        $("#success-msg").slideUp();
                        hideMessage();
                    }
                }
            });
        }
    });

    // Delete Record
    $(document).on("click", "#delete-btn", function () {
        if (confirm("Do you really want to delete this record")) {
            var studentId = $(this).data("id");

            $.ajax({
                url: "backend/delete_data.php",
                type: "POST",
                data: { id: studentId },
                success: function (data) {
                    if (data == 1) {
                        loadtable();
                        $("#success-msg").html("Record deleted successfully").slideDown();
                        $("#error-msg").slideUp();
                        hideMessage();
                    } else {
                        $("#error-msg").html("Can't delete this record right now").slideDown();
                        $("#success-msg").slideUp();
                        hideMessage();
                    }
                }
            });
        }
    });

    //show modal box
    $(document).on("click", "#edit-btn", function () {
        $(".modal").show();
        var studentId = $(this).data("eid");

        $.ajax({
            url: "backend/load_for_modalbox.php",
            type: "POST",
            data: { id: studentId },
            success: function (data) {
                $("#modal-body").html(data);
            }
        });
    });

    //hide modal box
    $(document).on("click", ".btn-close", function () {
        $(".modal").hide();
    });

    //Update record
    $(document).on("click", "#modal-save-btn", function (e) {
        e.preventDefault();

        var stuId = $("#edit-id").val();
        var stuFullname = $("#edit-fullname").val();
        var stuAge = $("#edit-age").val();
        var stuDepartment = $("#edit-department").val();

        $.ajax({
            url: "backend/update_data.php",
            type: "POST",
            data: { id: stuId, fullname: stuFullname, age: stuAge, department: stuDepartment },
            success: function (data) {
                if (data == 1) {
                    $(".modal").hide();
                    loadtable();
                    $("#success-msg").html("Record Updated successfully").slideDown();
                    $("#error-msg").slideUp();
                    hideMessage();
                } else {
                    $(".modal").hide();
                    $("#error-msg").html("Can't Update this record right now").slideDown();
                    $("#success-msg").slideUp();
                    hideMessage();
                }
            }
        });
    });

    //Live Search
    $("#search").on("keyup", function(){
        var search_term = $(this).val();

        $.ajax({
            url: "backend/live_search.php",
            type: "POST",
            data: {search: search_term},
            success: function(data){
                $("#table-data").html(data);
            }
        });
    });

});