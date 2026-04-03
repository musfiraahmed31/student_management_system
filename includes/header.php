<?php
// includes/header.php
// Start session for alerts or user tracking if needed
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Authority | Student Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <!-- Sidebar Inclusion -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="main-content">
            <header class="header">
                <div style="display: flex; alignItems: center; gap: 16px; flex: 1;">
                    <span style="color: var(--on-surface-variant);">🔍</span>
                    <input 
                        type="text" 
                        placeholder="Search system wide..." 
                        style="background: transparent; border: none; outline: none; width: 100%; font-family: var(--font-body); font-size: 14px;" 
                    />
                </div>
                <div style="display: flex; align-items: center; gap: 24px;">
                    <span style="color: var(--on-surface-variant); cursor: pointer;">🔔</span>
                    <span style="color: var(--on-surface-variant); cursor: pointer;">⚙️</span>
                    <div style="width: 32px; height: 32px; background-color: var(--primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 12px;">
                        AD
                    </div>
                </div>
            </header>
            
            <!-- Page content begins here -->
            <div class="page-container">
