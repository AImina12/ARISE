<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent-color: #007bff;
            --font-size: 1rem;
            --layout-density: 1;
        }
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-size: var(--font-size);
            transition: background-color 0.3s, color 0.3s;
        }
        body.light {
            background-color: white;
            color: black;
        }
        body.dark {
            background-color: #121212;
            color: white;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
        }
        body.dark nav {
            background-color: #333;
            border-bottom: 1px solid #555;
        }
        .nav-left h1 {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 0;
            color: #333;
        }
        body.dark .nav-left h1 {
            color: white;
        }
        .nav-right {
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        .nav-right a {
            font-size: 1.3rem;
            font-weight: 100;
            text-decoration: none;
            color: #000;
            transition: color 0.3s;
        }
        body.dark .nav-right a {
            color: white;
        }
        .nav-right a:hover {
            color: var(--accent-color);
        }
        .search-bar {
            display: flex;
        }
        .search-bar input {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            width: 200px;
        }
        body.dark .search-bar input {
            background-color: #333;
            color: white;
            border: 1px solid #555;
        }
        .search-bar button {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0 4px 4px 0;
            background-color: var(--accent-color);
            color: white;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #0056b3;
        }
        .container {
            display: flex;
            flex: 1;
            transition: flex-direction 0.3s;
        }
        .sidebar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 1rem;
            border-right: 1px solid #ddd;
            transition: background-color 0.3s, border 0.3s;
        }
        body.dark .sidebar {
            background-color: #333;
            border-right: 1px solid #555;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar li {
            margin-bottom: 1rem;
        }
        .sidebar a {
            text-decoration: none;
            color: #333;
            font-size: 1.2rem;
            display: block;
            padding: 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        body.dark .sidebar a {
            color: white;
        }
        .sidebar a:hover {
            background-color: #e9ecef;
        }
        body.dark .sidebar a:hover {
            background-color: #555;
        }
        .sidebar a.active {
            background-color: lightgrey;
        }
        body.dark .sidebar a.active {
            background-color: #555;
        }
        main {
            flex: 1;
            padding: calc(2rem * var(--layout-density));
            transition: padding 0.3s;
        }
        .settings-section {
            display: none;
        }
        .settings-section.active {
            display: block;
        }
        h2 {
            font-weight: normal;
        }
        .setting-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        .setting-item label {
            font-weight: normal;
        }
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: var(--accent-color);
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        .toggle-label {
            font-size: 0.9rem;
            color: #666;
            margin-top: 0.5rem;
        }
        body.dark .toggle-label {
            color: #ccc;
        }
        .security-container {
            padding: 1rem;
            width: 150px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            cursor: pointer;
        }
        .change-password {
            background-color: darkgrey;
        }
        .delete-account {
            background-color: red;
            color: white;
        }
        .color-picker {
            width: 50px;
            height: 34px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .animations-enabled * {
            transition: all 0.3s;
        }
        .animations-disabled * {
            transition: none !important;
        }
    </style>
</head>
<body class="light">
    <nav>
        <div class="nav-left">
            <h1>Settings</h1>
        </div>
        <div class="nav-right">
            <a href="#">Home</a>
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <div class="search-bar">
                <input type="text" placeholder="Search in site">
                <button type="submit">Search</button>
            </div>
        </div>
    </nav>

    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="#general" class="active">General</a></li>
                <li><a href="#security">Security</a></li>
                <li><a href="#notifications">Notifications</a></li>
                <li><a href="#appearance">Appearance</a></li>
            </ul>
        </aside>

        <main>
            <div id="general" class="settings-section active">
                <h2>General</h2>
                <div class="setting-item">
                    <label for="metric">Metric</label>
                    <div>
                        <label class="toggle-switch">
                            <input type="checkbox" id="metric">
                            <span class="slider"></span>
                        </label>
                        <div class="toggle-label">KG/LBS</div>
                    </div>
                </div>
                <div class="setting-item">
                    <label for="experience">Experience</label>
                    <select id="experience">
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                </div>
                <div class="setting-item">
                    <label for="weight">Weight</label>
                    <input type="number" id="weight" placeholder="Enter weight">
                </div>
            </div>
            <div id="security" class="settings-section">
                <h2>Security</h2>
                <div class="security-container change-password">
                    <p>Change Password</p>
                </div>
                <div class="security-container delete-account">
                    <p>Delete Account</p>
                </div>
            </div>
            <div id="notifications" class="settings-section">
                <h2>Notifications</h2>
                <div class="setting-item">
                    <label for="enable-notifications">Enable Notifications</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="enable-notifications">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="setting-item">
                    <label for="email-notifications">Email Notifications</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="email-notifications">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="setting-item">
                    <label for="push-notifications">Push Notifications</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="push-notifications">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="setting-item">
                    <label for="do-not-disturb">Do Not Disturb</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="do-not-disturb">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="setting-item">
                    <label for="security-alerts">Security Alerts</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="security-alerts">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="setting-item">
                    <label for="promotions-offers">Promotions & Offers</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="promotions-offers">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div id="appearance" class="settings-section">
                <h2>Appearance</h2>
                <div class="setting-item">
                    <label for="theme-mode">Theme Mode</label>
                    <select id="theme-mode">
                        <option value="light">Light</option>
                        <option value="dark">Dark</option>
                        <option value="system">System default</option>
                    </select>
                </div>
                <div class="setting-item">
                    <label for="accent-color">Accent Color</label>
                    <input type="color" id="accent-color" class="color-picker" value="#007bff">
                </div>
                <div class="setting-item">
                    <label for="font-size">Font Size</label>
                    <select id="font-size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
                <div class="setting-item">
                    <label for="layout-density">Layout Density</label>
                    <select id="layout-density">
                        <option value="comfortable">Comfortable</option>
                        <option value="compact">Compact</option>
                    </select>
                </div>
                <div class="setting-item">
                    <label for="show-animations">Show Animations</label>
                    <label class="toggle-switch">
                        <input type="checkbox" id="show-animations" checked>
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="setting-item">
                    <label for="sidebar-position">Sidebar Position</label>
                    <select id="sidebar-position">
                        <option value="left">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
            </div>
        </main>
    </div>

    <script>
        const sidebarLinks = document.querySelectorAll('.sidebar a');
        const sections = document.querySelectorAll('.settings-section');
        const body = document.body;
        const container = document.querySelector('.container');

        // Sidebar navigation
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);

                sidebarLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');

                sections.forEach(section => section.classList.remove('active'));
                document.getElementById(targetId).classList.add('active');
            });
        });

        // Theme Mode
        document.getElementById('theme-mode').addEventListener('change', function() {
            const value = this.value;
            if (value === 'light') {
                body.classList.remove('dark');
                body.classList.add('light');
            } else if (value === 'dark') {
                body.classList.remove('light');
                body.classList.add('dark');
            } else {
                // System default - could use media query, but for simplicity, default to light
                body.classList.remove('dark');
                body.classList.add('light');
            }
        });

        // Accent Color
        document.getElementById('accent-color').addEventListener('input', function() {
            document.documentElement.style.setProperty('--accent-color', this.value);
        });

        // Font Size
        document.getElementById('font-size').addEventListener('change', function() {
            const value = this.value;
            if (value === 'small') {
                document.documentElement.style.setProperty('--font-size', '0.875rem');
            } else if (value === 'medium') {
                document.documentElement.style.setProperty('--font-size', '1rem');
            } else {
                document.documentElement.style.setProperty('--font-size', '1.125rem');
            }
        });

        // Layout Density
        document.getElementById('layout-density').addEventListener('change', function() {
            const value = this.value;
            if (value === 'comfortable') {
                document.documentElement.style.setProperty('--layout-density', '1');
            } else {
                document.documentElement.style.setProperty('--layout-density', '0.75');
            }
        });

        // Show Animations
        document.getElementById('show-animations').addEventListener('change', function() {
            if (this.checked) {
                body.classList.remove('animations-disabled');
                body.classList.add('animations-enabled');
            } else {
                body.classList.remove('animations-enabled');
                body.classList.add('animations-disabled');
            }
        });

        // Sidebar Position
        document.getElementById('sidebar-position').addEventListener('change', function() {
            const value = this.value;
            if (value === 'left') {
                container.style.flexDirection = 'row';
            } else {
                container.style.flexDirection = 'row-reverse';
            }
        });
    </script>
</body>
</html>
