<!DOCTYPE html>
<html>
<head>
    <title>Sample Website</title>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    
    <main>
        <section>
            <h2>About Us</h2>
            <p>This is a sample website created with HTML and PHP.</p>
        </section>
        
        <section>
            <h2>Latest News</h2>
            <ul>
                <?php
                    // Sample PHP code to generate a list of news items
                    $newsItems = array(
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                        "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.",
                        "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt."
                    );

                    foreach ($newsItems as $item) {
                        echo "<li>$item</li>";
                    }
                ?>
            </ul>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sample Website</p>
    </footer>
</body>
</html>
