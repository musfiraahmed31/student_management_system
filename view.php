<?php
include 'config.php';
include 'includes/header.php';

// Prepare dynamic query based on optional search
$search_query = "";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $search_query = "WHERE full_name LIKE '%$search%' OR student_id LIKE '%$search%' OR course LIKE '%$search%'";
}

$sql = "SELECT * FROM students $search_query ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<div>
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 32px;">
        <div>
            <h1 class="display-lg">Student Repository (Database)</h1>
            <p style="color: var(--on-surface-variant); margin-top: 8px;">Displays records fetched via SELECT query from MySQL.</p>
        </div>
        <div style="display: flex; gap: 12px;">
            <a href="add.php" class="btn btn-primary">➕ New Record</a>
        </div>
    </div>

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

    <div class="card" style="padding: 0px; overflow: hidden;">
        <div style="padding: 24px; border-bottom: 1px solid var(--outline-variant); display: flex; justify-content: space-between;">
            <form action="view.php" method="GET" style="position: relative; width: 400px; display: flex; gap: 8px;">
                <input 
                    type="text" 
                    name="search"
                    placeholder="Search by name, ID, or program..." 
                    class="input-field" 
                    style="margin-top: 0; flex: 1;"
                    value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
                />
                <button type="submit" class="btn btn-secondary">Search</button>
            </form>
            <p class="label-md" style="align-self: center;"><?= $result->num_rows ?> ENTRIES FOUND</p>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th class="label-md">STUDENT ID</th>
                    <th class="label-md">NAME</th>
                    <th class="label-md">PROGRAM</th>
                    <th class="label-md">YEAR</th>
                    <th class="label-md">STATUS</th>
                    <th class="label-md" style="text-align: right;">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        // Dynamic Status Styling
                        $statusColor = 'var(--on-surface-variant)';
                        $statusBg = 'var(--surface-container-high)';
                        if ($row['status'] == 'Active') {
                            $statusColor = '#2e7d32';
                            $statusBg = '#e8f5e9';
                        } else if ($row['status'] == 'Probation') {
                            $statusColor = '#ef6c00';
                            $statusBg = '#fff3e0';
                        }

                        echo "<tr>";
                        echo "<td style='font-weight: 600; color: var(--primary);'>" . htmlspecialchars($row['student_id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['course']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['year']) . "</td>";
                        echo "<td><span style='padding: 4px 8px; font-size: 12px; font-weight: 600; color: $statusColor; background-color: $statusBg;'>" . htmlspecialchars($row['status']) . "</span></td>";
                        echo "<td style='text-align: right;'>";
                        echo "  <a href='delete_process.php?id=" . $row['id'] . "' class='btn-danger delete-btn'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' style='text-align: center; color: var(--on-surface-variant);'>No student records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
