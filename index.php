<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System</title>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Body Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fc;
            margin-top: 40px;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #2c3e50;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #ecf0f1 !important;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c12 !important;
        }

        /* Header Section */
        .header-container {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 80px 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .header-container h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .header-container p {
            font-size: 1.2rem;
            font-weight: 300;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 1.6rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .card-body {
            padding: 1.5rem;
            text-align: center;
        }

        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
            text-transform: uppercase;
            padding: 10px 25px;
        }

        .btn-primary:hover {
            background-color: #34495e;
            border-color: #34495e;
        }

        /* Footer Styles */
        footer {
            background-color: #34495e;
            color: #ecf0f1;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
            border-top: 2px solid #2c3e50;
        }

        footer a {
            color: #f39c12;
            text-decoration: none;
        }

        footer a:hover {
            color: #e67e22;
        }

        /* Container & Grid System */
        .container {
            margin-top: 50px;
        }

        .row {
            margin-bottom: 30px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-container h1 {
                font-size: 2.5rem;
            }

            .header-container p {
                font-size: 1rem;
            }

            .btn-primary {
                padding: 8px 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">University Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="instructor.php">Instructors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="department.php">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="classroom.php">Classrooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="timeslot.php">Time Slots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student.php">Students</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="header-container">
        <h1>University Management System</h1>
        <p>Manage all university data from one platform</p>
    </section>

    <!-- Main Content Section -->

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> University Management System</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
