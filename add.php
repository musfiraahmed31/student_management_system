<?php
include 'config.php';
include 'includes/header.php';
?>

<div>
    <h1 class="display-lg" style="margin-bottom: 8px;">Enrollment Portal</h1>
    <p style="color: var(--on-surface-variant); margin-bottom: 32px;">Ensure all institutional data is accurate before entering into the database.</p>

    <?php
    if (isset($_SESSION['success_message'])) {
        echo "<div class='alert'>" . $_SESSION['success_message'] . "</div>";
        unset($_SESSION['success_message']);
    }
    if (isset($_SESSION['error_message'])) {
        echo "<div class='alert error'>" . $_SESSION['error_message'] . "</div>";
        unset($_SESSION['error_message']);
    }
    ?>

    <form id="addRecordForm" action="add_process.php" method="POST" class="card" style="padding: 48px; max-width: 800px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
            <div>
                <label class="label-md" for="student_id">STUDENT ID</label>
                <input type="text" id="student_id" name="student_id" class="input-field" placeholder="e.g., S1005" required>
            </div>
            <div>
                <label class="label-md" for="full_name">FULL NAME</label>
                <input type="text" id="full_name" name="full_name" class="input-field" placeholder="Enter your name" required>
            </div>
            <div>
                <label class="label-md" for="course">ACADEMIC PROGRAM</label>
                <input type="text" id="course" name="course" class="input-field" placeholder="Enter program" required>
            </div>
            <div>
                <label class="label-md" for="year">ENROLLMENT YEAR</label>
                <select id="year" name="year" class="input-field" required>
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                </select>
            </div>
            <div>
                <label class="label-md" for="status">STUDENT STATUS</label>
                <select id="status" name="status" class="input-field" required>
                    <option value="Active">Active</option>
                    <option value="Probation">Probation</option>
                    <option value="LOA">LOA</option>
                </select>
            </div>
            <div>
                <label class="label-md" for="email">EMAIL</label>
                <input type="email" id="email" name="email" class="input-field" placeholder="name@university.edu" required>
            </div>
            <div style="grid-column: span 2;">
                <label class="label-md" for="phone">CONTACT NUMBER</label>
                <input type="tel" id="phone" name="phone" class="input-field" placeholder="Enter contact number" style="width: 50%;" required>
            </div>
        </div>
        
        <div style="margin-top: 48px; border-top: 1px solid var(--outline-variant); padding-top: 32px; display: flex; justify-content: flex-end; gap: 16px;">
            <button type="reset" class="btn btn-secondary">Clear Form</button>
            <button type="submit" class="btn btn-primary">Enroll Now</button>
        </div>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
