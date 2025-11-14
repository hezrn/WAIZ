<?php
session_start();
$userName = isset($_SESSION['user']) ? $_SESSION['user'] : "Eco User";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WAIZ - Eco Marketplace</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
/* GLOBAL */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Poppins", sans-serif;
}

body{
    background: linear-gradient(to bottom right, #81ba81ff, #7285b0ff);
    min-height:100vh;
}

/* HEADER NAVIGATION */
.header{
    width:100%;
    background: #cbcca5ff;
    padding:15px 5%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.12);
    position:sticky;
    top:0;
    z-index:50;
}

.logo{
    font-size:26px;
    font-weight:700;
    color:#2d7d46;
}

.nav-links{
    display:flex;
    gap:30px;
}

.nav-links a{
    text-decoration:none;
    color:#2a2a2a;
    font-size:16px;
    transition:0.2s;
}

.nav-links a:hover{
    color:#2d7d46;
    font-weight:600;
}

/* HERO SECTION */
.hero{
    padding:70px 10%;
    text-align:center;
}

.hero h1{
    font-size:40px;
    font-weight:700;
    color:#2d7d46;
}

.hero p{
    margin-top:10px;
    font-size:18px;
    color:#4a4a4a;
}

/* POSTS GRID (WEBSITE STYLE) */
.posts-container{
    padding:40px 6%;
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
    gap:25px;
}

/* POST CARD */
.post{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 4px 12px rgba(0,0,0,0.10);
    transition:0.2s;
}

.post:hover{
    transform:translateY(-4px);
}

.post-header{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:12px;
}

.profile{
    width:45px;
    height:45px;
    background:#cfe8c9;
    border-radius:50%;
}

.username{
    font-weight:600;
    font-size:16px;
}

.post-desc{
    font-size:14px;
    color:#444;
    margin-bottom:15px;
}

/* POST IMAGES */
.post-images{
    width:100%;
    height:170px;
    border-radius:12px;
    background:#d9f2d9;
}

/* FOOTER */
.footer{
    text-align:center;
    padding:25px;
    color:#3a3a3a;
    margin-top:40px;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="logo">WAIZ</div>
    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Rate List</a>
        <a href="#">Marketplace</a>
        <a href="#">My Records</a>
        <a href="#">Profile</a>
    </div>
</div>

<!-- HERO -->
<section class="hero">
    <h1>Welcome, <?= $userName ?> 🌿</h1>
    <p>Your eco-friendly recycling marketplace starts here.</p>
</section>

<!-- POSTS (RESPONSIVE WEBSITE GRID) -->
<div class="posts-container">

    <!-- POST 1 -->
    <div class="post">
        <div class="post-header">
            <div class="profile"></div>
            <div class="username">Anna</div>
        </div>
        <div class="post-desc">Mixed recyclable items now available!</div>
        <div class="post-images"></div>
    </div>

    <!-- POST 2 -->
    <div class="post">
        <div class="post-header">
            <div class="profile"></div>
            <div class="username">Elsa</div>
        </div>
        <div class="post-desc">Separated plastics and bottles ready for pickup.</div>
        <div class="post-images"></div>
    </div>

    <!-- POST 3 -->
    <div class="post">
        <div class="post-header">
            <div class="profile"></div>
            <div class="username">Olaf Junkshop</div>
        </div>
        <div class="post-desc">We accept metals, plastics, cartons, and more!</div>
        <div class="post-images"></div>
    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    © 2025 WAIZ Eco-Marketplace — Reduce. Reuse. Recycle. ♻️
</div>

</body>
</html>
