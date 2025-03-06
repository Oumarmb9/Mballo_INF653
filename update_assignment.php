<?php
require_once "assignment_db.php";
require_once "course_db.php";

// Get the assignment ID from the URL
$assignment_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$assignment_id) {
    die("Error: Assignment ID is missing.");
}

// Fetch the assignment details
$stmt = $pdo->prepare("SELECT * FROM assignments WHERE id = ?");
$stmt->execute([$assignment_id]);
$assignment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$assignment) {
    die("Error: Assignment not found.");
}

// Fetch all courses for the dropdown list
$courses = getCourses();
?>

<?php include "header.php"; ?>

<h2>Update Assignment</h2>

<form method="POST" action="controller.php">
    <!-- Hidden field to keep the assignment ID -->
    <input type="hidden" name="assignment_id" value="<?= $assignment['id']; ?>">

    <!-- Description input -->
    <label>Description:</label>
    <input type="text" name="description" value="<?= htmlspecialchars($assignment['description']); ?>" required>

    <!-- Course selection dropdown -->
    <label>Course:</label>
    <select name="course_id">
        <?php foreach ($courses as $course) : ?>
            <option value="<?= $course['id']; ?>" <?= $assignment['course_id'] == $course['id'] ? 'selected' : ''; ?>>
                <?= htmlspecialchars($course['name']); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <!-- Submit button -->
    <button type="submit" name="update_assignment">Update Assignment</button>
</form>

<?php include "footer.php"; ?>
