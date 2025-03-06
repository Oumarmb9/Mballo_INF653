<?php
require_once "course_db.php";

// Get the course details
$course_id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM courses WHERE id = ?");
$stmt->execute([$course_id]);
$course = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<?php include "header.php"; ?>

<h2>Update Course</h2>
<form method="POST" action="controller.php">
    <input type="hidden" name="course_id" value="<?= $course['id']; ?>">
    <label>Course Name:</label>
    <input type="text" name="course_name" value="<?= $course['name']; ?>" required>

    <button type="submit" name="update_course">Update Course</button>
</form>

<?php include "footer.php"; ?>
