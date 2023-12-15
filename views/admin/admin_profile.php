<!-- app/views/admin/admin_profile.php -->

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

    <!-- Display admin profile data -->
    <p>Name: <?php echo $profileData['adminName']; ?></p>
    <p>Email: <?php echo $profileData['adminEmail']; ?></p>

    <!-- Add more HTML content as needed -->
</body>
</html>
