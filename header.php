<style>
/* Header & Navigation */
header {
    position: fixed; width: 100%; top: 0; left: 0; background: #fff;
    padding: 15px 50px; display: flex; justify-content: space-between;
    align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.1); z-index: 100;
}
header img { height: 60px; }
nav { display: flex; gap: 20px; }
nav a { text-decoration: none; font-weight: 600; color: #333; transition: 0.3s; }
nav a:hover { color: #2980b9; }
<li class="nav-item">
  <a class="nav-link" href="ministries.php">Ministries</a>
</li>
/* Hamburger */
.hamburger {
    display: none; flex-direction: column; cursor: pointer; gap: 5px;
}
.hamburger div {
    width: 25px; height: 3px; background: #333; border-radius: 2px;
    transition: all 0.3s ease;
}

/* Mobile menu */
@media(max-width: 768px){
    nav {
        position: fixed; top: 70px; right: -100%;
        flex-direction: column; background: #fff;
        width: 200px; padding: 20px; gap: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        transition: right 0.3s ease;
        height: calc(100vh - 70px);
    }
    nav.active { right: 0; }
    .hamburger { display: flex; }
}
</style>

<header>
    <img src="assets/images/logo.png" alt="Church Logo">
    <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#ministries">Ministries</a>
        <a href="#events">Events</a>
        <a href="#prayer">Prayer</a>
        <a href="#gallery">Gallery</a>
        <a href="preaching.php">Preachings</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<script>
function toggleMenu() {
    document.querySelector('nav').classList.toggle('active');
}
</script>

