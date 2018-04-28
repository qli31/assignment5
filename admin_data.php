<?php

$title = "Admin";

// Initialize the session
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}

require_once "includes/html-head.php";

?>

    <body>
        <?php
require_once "includes/navbar.php";
?>

            <div class="container">

                <h2>Pizza Admin data managing</h2>

                <br />
                <br />
                <br />
                <div class="table-responsive">
                    <span id="result"></span>
                    <div id="live_data"></div>
                </div>
            </div>

            <?php
require_once "includes/footer.php";
?>

    </body>

    </html>

    <script>
        $(document).ready(function () {
            function fetch_data() {
                $.ajax({
                    url: "includes/select.php",
                    method: "POST",
                    success: function (data) {
                        $('#live_data').html(data);
                    }
                });
            }
            fetch_data();
            $(document).on('click', '#btn_add', function () {
                var name = $('#name').text();
                var email = $('#email').text();
                var frequency = $('#frequency').text();
                var favorite = $('#favorite').text();
                if (name == '') {
                    alert("Enter A Name");
                    return false;
                }
                if (email == '') {
                    alert("Enter An Email");
                    return false;
                }
                if (frequency == '') {
                    alert("Enter A Frequency");
                    return false;
                }
                if (favorite == '') {
                    alert("Enter A Favorite");
                    return false;
                }
                $.ajax({
                    url: "includes/insert.php",
                    method: "POST",
                    data: {
                        name: name,
                        email: email,
                        frequency: frequency,
                        favorite: favorite
                    },
                    dataType: "text",
                    success: function (data) {
                        alert(data);
                        fetch_data();
                    }
                })
            });

            function edit_data(id, text, column_name) {
                $.ajax({
                    url: "includes/edit.php",
                    method: "POST",
                    data: {
                        id: id,
                        text: text,
                        column_name: column_name
                    },
                    dataType: "text",
                    success: function (data) {
                        //alert(data);
                        $('#result').html("<div class='alert alert-success'>" + data + "</div>");
                    }
                });
            }
            $(document).on('blur', '.name', function () {
                var id = $(this).data("id1");
                var name = $(this).text();
                edit_data(id, name, "name");
            });
            $(document).on('blur', '.email', function () {
                var id = $(this).data("id2");
                var email = $(this).text();
                edit_data(id, email, "email");
            });
            $(document).on('blur', '.frequency', function () {
                var id = $(this).data("id3");
                var frequency = $(this).text();
                edit_data(id, frequency, "frequency");
            });
            $(document).on('blur', '.favorite', function () {
                var id = $(this).data("id4");
                var favorite = $(this).text();
                edit_data(id, name, "favorite");
            });
            $(document).on('click', '.btn_delete', function () {
                var id = $(this).data("id5");
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: "includes/delete.php",
                        method: "POST",
                        data: {
                            id: id
                        },
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            fetch_data();
                        }
                    });
                }
            });
        });
    </script>