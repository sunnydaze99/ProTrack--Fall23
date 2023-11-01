<?php
// Place any authentication logic here to ensure the user is logged in.
// If the user is not authenticated, you can redirect them back to the login page.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idashstyle.css">
    <title>Student View</title>
    <script>
    // Your JavaScript code here
    </script>
</head>
<body>
    <!-- Your HTML content for the student view page -->
    <!-- ... (your HTML for the student view page) ... -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 80%; /* Set to a percentage of the viewport width */
            max-width: 1000px; /* Optional maximum width */
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        label, input, textarea {
            display: block;
            margin: 10px 0;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #ff3333;
        }
    </style>
    <script>
        function addRow(sectionId) {
            const section = document.getElementById(sectionId);
            const newRow = document.querySelector(`.${sectionId}-row`).cloneNode(true);
            newRow.className = `${sectionId}-row`;
            newRow.querySelectorAll('input[type="text"], textarea').forEach(input => {
                input.value = ''; // Clear input values in the cloned row
            });

            // Add a delete button
            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.classList.add("delete-button");
            deleteButton.onclick = function () {
                deleteRow(this, sectionId);
            };
            newRow.appendChild(deleteButton);

            section.appendChild(newRow);
        }

        function deleteRow(button, sectionId) {
            const row = button.parentNode;
            const section = document.getElementById(sectionId);
            section.removeChild(row);
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Project Plan</h1>
        <form action="process.php" method="post">
            <!-- Team Information -->
            <h2>Team Information</h2>
            <label for="team_number">Team Number:</label>
            <input type="text" id="team_number" name="team_number" required>

            <!-- Team Members -->
            <h2>Team Members</h2>
            <div id="members">
                <div class="members-row">
                    <label for="name_1">Name:</label>
                    <input type="text" id="name_1" name="name_1" required>
                    <label for="student_id_1">Student ID:</label>
                    <input type="text" id="student_id_1" name="student_id_1" required>
                    <label for="contact_1">Contact:</label>
                    <input type="text" id="contact_1" name="contact_1" required>
                    <label for="description_1">Description:</label>
                    <textarea id="description_1" name="description_1" rows="4" required></textarea>
                    <button type="button" onclick="addRow('members')">Add Member</button>
                </div>
            </div>

            <!-- Meeting Time -->
            <h2>Meeting Time</h2>
            <label for="meeting_time">Meeting Time:</label>
            <input type="text" id="meeting_time" name="meeting_time" required>

            <!-- Meeting Place -->
            <h2>Meeting Place</h2>
            <label for="meeting_place">Meeting Place:</label>
            <input type="text" id="meeting_place" name="meeting_place" required>

            <!-- Deliverables -->
            <h2>Deliverables</h2>
            <div id="deliverables">
                <div class="deliverables-row">
                    <label for="task_1">Task:</label>
                    <input type="text" id="task_1" name="task_1" required>
                    <label for="item_1">Item:</label>
                    <input type="text" id="item_1" name="item_1" required>
                    <label for="phase_1">Phase:</label>
                    <input type="text" id="phase_1" name="phase_1" required>
                    <label for="member_responsible_1">Member Responsible:</label>
                    <input type="text" id="member_responsible_1" name="member_responsible_1" required>
                    <label for="mode_1">Mode:</label>
                    <input type="text" id="mode_1" name="mode_1" required>
                    <label for="comment_1">Comment:</label>
                    <textarea id="comment_1" name="comment_1" rows="4" required></textarea>
                    <button type="button" onclick="addRow('deliverables')">Add Deliverable</button>
                </div>
            </div>

            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

