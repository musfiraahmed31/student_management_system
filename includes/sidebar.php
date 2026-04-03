<?php
// includes/sidebar.php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar">
    <div style="padding: 0 8px 16px; border-bottom: 1px solid var(--outline-variant);">
        <h2 class="headline-sm" style="color: var(--primary); letter-spacing: 0.1em;">
            Student Management System
        </h2>
    </div>
    
    <nav>
        <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">
            <span>📊</span> <span class="label-md" style="color: inherit; font-size: 14px; text-transform: none;">Dashboard</span>
        </a>
        <a href="add.php" class="<?= ($current_page == 'add.php') ? 'active' : '' ?>">
            <span>➕</span> <span class="label-md" style="color: inherit; font-size: 14px; text-transform: none;">Add Record</span>
        </a>
        <a href="view.php" class="<?= ($current_page == 'view.php') ? 'active' : '' ?>">
            <span>👥</span> <span class="label-md" style="color: inherit; font-size: 14px; text-transform: none;">View Records</span>
        </a>
        <a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">
            <span>ℹ️</span> <span class="label-md" style="color: inherit; font-size: 14px; text-transform: none;">About System</span>
        </a>
    </nav>

    <div style="margin-top: auto; padding: 16px 8px;">
        <div class="card glass-gradient" style="padding: 16px; margin-bottom: 0;">
            <p class="label-md" style="color: rgba(255,255,255,0.7); margin-bottom: 8px;">SYSTEM STATUS</p>
            <p style="font-size: 14px; font-weight: 500;">Active Session: Admin</p>
            <p style="font-size: 11px; opacity: 0.8; margin-top: 4px;">Connected via WAMP (MySQL)</p>
        </div>
    </div>
</aside>
