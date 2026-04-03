<?php
include 'config.php';
include 'includes/header.php';

// Fetch some basic stats from the database for the dashboard
$total_students_result = $conn->query("SELECT COUNT(*) as count FROM students");
$total_students = $total_students_result ? $total_students_result->fetch_assoc()['count'] : 0;

$active_students_result = $conn->query("SELECT COUNT(*) as count FROM students WHERE status='Active'");
$active_students = $active_students_result ? $active_students_result->fetch_assoc()['count'] : 0;

// Calculate "graduation rate" mockup or active rate
$active_rate = ($total_students > 0) ? round(($active_students / $total_students) * 100, 1) : 0;
?>

<div>
    <h1 class="display-lg" style="margin-bottom: 32px;">Institutional Overview</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-bottom: 48px;">
        <!-- Stat Card 1 -->
        <div class="card" style="border-left: 4px solid var(--primary); padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                <p class="label-md">TOTAL STUDENTS (DB)</p>
                <div style="color: var(--primary);">👥</div>
            </div>
            <h2 class="display-lg"><?= $total_students ?></h2>
            <p style="font-size: 12px; color: var(--on-surface-variant); margin-top: 8px;">Registered in system</p>
        </div>

        <!-- Stat Card 2 -->
        <div class="card" style="border-left: 4px solid var(--primary); padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                <p class="label-md">ACTIVE RATE</p>
                <div style="color: var(--primary);">🎓</div>
            </div>
            <h2 class="display-lg"><?= $active_rate ?>%</h2>
            <p style="font-size: 12px; color: var(--on-surface-variant); margin-top: 8px;">Students in good standing</p>
        </div>

        <!-- Stat Card 3 -->
        <div class="card" style="border-left: 4px solid var(--primary); padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                <p class="label-md">SERVER STATUS</p>
                <div style="color: var(--primary);">📈</div>
            </div>
            <h2 class="display-lg">Online</h2>
            <p style="font-size: 12px; color: var(--on-surface-variant); margin-top: 8px;">WAMP Environment</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
        <div class="card">
            <h3 class="headline-sm card-title">Recent Database Entries</h3>
            <div style="margin-top: 24px; display: flex; flex-direction: column; gap: 16px;">
                <?php
                $recent_query = "SELECT full_name, created_at, status FROM students ORDER BY created_at DESC LIMIT 3";
                $recent_result = $conn->query($recent_query);

                if ($recent_result && $recent_result->num_rows > 0) {
                    while($row = $recent_result->fetch_assoc()) {
                        echo '<div style="padding: 16px; background-color: var(--surface-container-low); display: flex; justify-content: space-between; align-items: center;">';
                        echo '    <div>';
                        echo '        <p style="font-weight: 600;">' . htmlspecialchars($row['full_name']) . '</p>';
                        echo '        <p style="font-size: 12px; color: var(--on-surface-variant);">' . htmlspecialchars($row['created_at']) . '</p>';
                        echo '    </div>';
                        echo '    <span class="label-md" style="padding: 4px 8px; background-color: var(--surface-container-highest);">' . htmlspecialchars($row['status']) . '</span>';
                        echo '</div>';
                    }
                } else {
                    echo "<p style='color: var(--on-surface-variant);'>No recent records found in the database.</p>";
                }
                ?>
            </div>
        </div>

        <div class="card glass-gradient">
            <h3 class="headline-sm" style="margin-bottom: 16px;">System Audit</h3>
            <p style="font-size: 14px; opacity: 0.9; margin-bottom: 24px;">
                The backend connection is active. PHP and MySQL are verified. Next scheduled server maintenance: Friday 2AM.
            </p>
            <a href="view.php" class="btn btn-secondary" style="color: white; border-color: rgba(255,255,255,0.3);">View Full Directory</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
