<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #85A3A8;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 700px;
            margin: 0 auto;
            border-collapse: collapse;
            table-layout: fixed;
            background-color: #fff; /* Ensure table is not affected */
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            vertical-align: top;
            text-align: center;
            word-wrap: break-word;
        }
        .profile {
            width: 150px;
            vertical-align: middle;
            text-align: center;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }
        .nav-item {
            padding: 10px;
            background-color: #f4f4f4;
        }
        .nav-item:hover {
            background-color: #e0e0e0;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Resume</h2>

    <table>
        <tr>
            <td class="profile" rowspan="2" style="vertical-align: middle;">
                <img src="me.jpg" class="profile-pic" alt="Profile Photo">
            </td>
            <td style="vertical-align: middle; text-align: left;">
                <strong>Personal information</strong><br>
                <?php
                echo "Name: Gerard Aytona<br>";
                echo "Email: aytooonagerard@gmail.com<br>";
                echo "Phone: 09214******<br>";
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="1" class="nav-item" style="text-align: left;">
                <strong>• Career Objective:</strong><br>
                To obtain a position that will enable me to use my strong organizational skills, educational background, and ability to work well with people.
            </td>
        </tr>
        <tr>
            <td colspan="2" class="nav-item" style="text-align: left;">
                Far Eastern University Institute of Technology<br>
                2022 -
            </td>
        </tr>
        <tr>
            <td colspan="2" class="nav-item" style="text-align: left;">
                <strong>• Skills Page</strong><br>
                Python <br>
                C++
            </td>
        </tr>
        <tr>
            <td colspan="2" class="nav-item" style="text-align: left;">
                <strong>• Affiliation Page</strong><br>
                • Member of the Far Eastern University Institute of Technology ACM 2022-2023
            </td>
        </tr>
        <tr>
            <td colspan="2" class="nav-item" style="text-align: left;">
                <strong>• Work Experience Page</strong><br>
                • Customer Support and Technical Support for Credit One Bank 2024-2025
            </td>
        </tr>
    </table>

</body>
</html>
