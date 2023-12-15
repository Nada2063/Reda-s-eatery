<!-- app/views/admin/admin_dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['pageTitle']; ?></title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <h1><?php echo $data['pageTitle']; ?></h1>
    <p><?php echo $data['content']; ?></p>

    <!-- Display admin dashboard data -->
    <p>Total Users: <?php echo $dashboardData['totalUsers']; ?></p>
    <p>Total Products: <?php echo $dashboardData['totalProducts']; ?></p>

    <!-- Add more HTML content as needed -->
</body>
</html>
