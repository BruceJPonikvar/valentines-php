# PHP Local Website Starter Template (Reusable)

This is a **copy‑paste, repeatable checklist** you can use anytime you want to spin up a small PHP website (class projects, personal ideas, demos, etc.). No frameworks, no databases required.

---

## 1️⃣ One‑Time Setup (only once per computer)

### Install Homebrew (Mac)

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

Add Homebrew to PATH:

```bash
echo 'eval "$(/opt/homebrew/bin/brew shellenv)"' >> ~/.zprofile
eval "$(/opt/homebrew/bin/brew shellenv)"
```

### Install PHP

```bash
brew install php
```

Verify:

```bash
php -v
```

(You should see PHP 8.x)

---

## 2️⃣ VS Code Setup (one time)

### Required Extensions

* **PHP Intelephense** (syntax + errors)
* (Optional) Live Server (HTML only)

### VS Code Settings

Open **Settings → Open Settings (JSON)** and ensure:

```json
"php.executablePath": "/opt/homebrew/bin/php"
```

Restart VS Code after this.

---

## 3️⃣ Create a New PHP Project (EVERY TIME)

### Step 1: Create project folder

```bash
mkdir MyWebsite
cd MyWebsite
```

### Step 2: Create main file

```bash
touch index.php
```

Your project structure should be:

```
MyWebsite/
└── index.php
```

---

## 4️⃣ Basic PHP Website Template (copy/paste)

Paste this into **index.php**:

```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My PHP Site</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="box">
    <h1>Hello 👋</h1>
    <p>This is my PHP site.</p>
  </div>
</body>
</html>
```

---

## 5️⃣ Run the Website (EVERY TIME)

### IMPORTANT RULE

> **PHP serves the folder you run it from**

### Correct way to start server

Inside the project folder:

```bash
php -S localhost:8000
```

### Open browser

```
http://localhost:8000
```

---

## 6️⃣ Common Errors & Fixes

### ❌ 404 Not Found

**Cause:** PHP started in wrong directory

**Fix:**

```bash
cd path/to/project
php -S localhost:8000
```

---

### ❌ PHP executable not found (VS Code)

**Fix:**

```json
"php.executablePath": "/opt/homebrew/bin/php"
```

Restart VS Code.

---

## 7️⃣ When to Use PHP vs HTML

Use **HTML only** when:

* Static pages
* No logic

Use **PHP** when:

* Forms
* Buttons doing logic
* Multiple pages
* Dynamic content

(You can still write **pure HTML/CSS inside PHP** — totally fine.)

---

## 8️⃣ OPTIONAL: Add JavaScript Later (not required)

PHP = backend logic
JS = animations, button movement, effects

You can always add JS later when ready.

---

## 9️⃣ Project Checklist (copy before starting)

* [ ] Project folder created
* [ ] index.php exists
* [ ] PHP installed (`php -v` works)
* [ ] Server started in correct folder
* [ ] Browser opens `localhost:8000`

---

## 🔁 Reuse Instructions

To start a new site:

1. Copy folder
2. Rename it
3. Edit `index.php`
4. Run server

---

💡 This setup is **perfect for school assignments and personal projects**.
No frameworks, no confusion, no wasted time.

---

# 🔹 ADVANCED TEMPLATES & CHECKLISTS

Everything below builds directly on the basic setup above.

---

## 10️⃣ Multi-Page PHP Website Template

### Folder Structure

```
MyWebsite/
├── index.php
├── about.php
├── contact.php
└── styles.css
```

### Navigation (reuse on every page)

```php
<nav>
  <a href="index.php">Home</a> |
  <a href="about.php">About</a> |
  <a href="contact.php">Contact</a>
</nav>
```

### Example: about.php

```php
<!DOCTYPE html>
<html>
<head>
  <title>About</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include "nav.php"; ?>
  <h1>About Me</h1>
  <p>This page explains the site.</p>
</body>
</html>
```

---

## 11️⃣ Form + PHP Handling Template

### contact.php

```php
<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $message = "Thanks, $name! Your message was sent 💌";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
</head>
<body>
  <h1>Contact Form</h1>

  <form method="POST">
    <input type="text" name="name" placeholder="Your name" required>
    <br><br>
    <button type="submit">Send</button>
  </form>

  <p><?php echo $message; ?></p>
</body>
</html>
```

Use this pattern for:

* login pages
* signup pages
* surveys
* feedback forms

---

## 12️⃣ Portfolio-Ready Project Template

### What Recruiters Expect

Include:

* Clear title
* Short description
* Skills used
* Clean UI

### Example index.php

```php
<h1>Project: PHP Mini Website</h1>
<p>A lightweight PHP website demonstrating server-side logic, form handling, and clean UI.</p>

<ul>
  <li>PHP 8</li>
  <li>HTML / CSS</li>
  <li>Local PHP server</li>
</ul>
```

📌 Tip: Put screenshots + GitHub link on your LinkedIn.

---

## 13️⃣ Deploy-Later Checklist (Save for Future)

### When You’re Ready to Go Public

* [ ] Clean up file names
* [ ] Remove debug output
* [ ] Add README.md
* [ ] Push to GitHub

### Easiest Hosting Options (Beginner-Friendly)

* GitHub Pages (HTML only)
* Render (PHP)
* Railway (PHP)
* InfinityFree (PHP)

---

## 14️⃣ Personal Project Ideas (Use This Stack)

* Valentine / birthday pages
* Resume website
* Course project demos
* Small tools (calculators, trackers)
* Portfolio homepage

---

## 15️⃣ Golden Rules (Remember These)

* PHP server runs from **current directory**
* `index.php` is the default entry point
* PHP can contain pure HTML
* Keep projects simple and readable

---

✅ This entire document is now your **personal PHP playbook**.
Copy it. Reuse it. Improve it as you grow.
