<div class="show_sidebar" id="show_sidebar">
    <i class="fas fa-bars"></i>
</div>
<div class="sidebar" id="sidebar">

    <div class="logo">

        <i class="fa-solid fa-heart"></i>

        <h2>Fruits Of Love</h2>

    </div>

    <nav>

        <ul>

            <li>
                <a href="dashboard.php" class="<?= ($page=="dashboard") ? "active" : ""; ?>">

                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>

            
            <li>
                <a href="logout.php" class="<?= ($page=="logout") ? "active" : ""; ?>">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </li>

        </ul>

    </nav>

</div>

<script src="js/script.js"></script>