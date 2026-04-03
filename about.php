<?php
include 'config.php';
include 'includes/header.php';
?>

<div style="max-width: 800px; margin: 0 auto; padding: 48px 0;">
    <h1 class="display-lg" style="margin-bottom: 16px;">About Student Management System</h1>
    <p style="font-size: 18px; color: var(--on-surface-variant); margin-bottom: 48px;">
        This system is designed to provide a centralized and efficient platform for educational institutions to manage their student records. It enables administrators to maintain accurate, up-to-date academic profiles and monitor student statuses from a single dashboard.
    </p>

    <h2 class="headline-md" style="margin-bottom: 24px;">Core System Functions</h2>
    
    <div style="display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); gap: 32px; margin-bottom: 64px;">
        <div class="card" style="padding: 32px;">
            <div style="font-size: 32px; margin-bottom: 16px;">📝</div>
            <h3 class="headline-sm" style="margin-bottom: 12px;">Record Management</h3>
            <p style="font-size: 14px; color: var(--on-surface-variant);">
                Easily register new students and input comprehensive details including their designated course, academic year, and current enrollment status.
            </p>
        </div>
        <div class="card" style="padding: 32px;">
            <div style="font-size: 32px; margin-bottom: 16px;">📊</div>
            <h3 class="headline-sm" style="margin-bottom: 12px;">Real-time Dashboard</h3>
            <p style="font-size: 14px; color: var(--on-surface-variant);">
                View all registered students in a dynamic tabular format, allowing administrators to quickly search and review academic standing.
            </p>
        </div>
        <div class="card" style="padding: 32px;">
            <div style="font-size: 32px; margin-bottom: 16px;">🔒</div>
            <h3 class="headline-sm" style="margin-bottom: 12px;">Data Integrity</h3>
            <p style="font-size: 14px; color: var(--on-surface-variant);">
                Built-in client-side and server-side validation ensures that all entered contact information (email, phone) and student IDs follow strict formatting rules before being logged.
            </p>
        </div>
        <div class="card" style="padding: 32px;">
            <div style="font-size: 32px; margin-bottom: 16px;">🗑️</div>
            <h3 class="headline-sm" style="margin-bottom: 12px;">Secure Revisions</h3>
            <p style="font-size: 14px; color: var(--on-surface-variant);">
                Safely remove obsolete or graduated student profiles with built-in confirmation dialogues to prevent accidental data deletion.
            </p>
        </div>
    </div>

    <div style="border-top: 1px solid var(--outline-variant); padding-top: 48px; display: flex; gap: 64px;">
        <div>
            <p class="label-md">MISSION STATEMENT</p>
            <p style="font-size: 14px; margin-top: 12px; font-style: italic;">
                "To streamline academic administration and provide a reliable, efficient foundation for student data management."
            </p>
        </div>
        <div>
            <p class="label-md">SYSTEM INTEGRITY</p>
            <p style="font-size: 14px; margin-top: 12px;">
                PHP Version: <?= phpversion() ?><br />
                MySQL Ext: mysqli<br />
                Status: Fully Functional
            </p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
