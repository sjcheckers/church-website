<?php
// init_db.php
// Run once: php init_db.php
// It creates the database and seeds CLDC details

$dbFile = __DIR__ . "/database.db";

// If DB already exists, warn
if (file_exists($dbFile)) {
    die("Database already exists at $dbFile. Delete it first if you want to reset.\n");
}

try {
    $db = new SQLite3($dbFile);

    // Create tables
    $db->exec("CREATE TABLE church_info (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        slogan TEXT,
        verse TEXT,
        welcome_note TEXT
    )");

    $db->exec("CREATE TABLE events (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        description TEXT,
        date TEXT,
        location TEXT
    )");

    // Seed church info
    $welcome = "Welcome to Christ Is Love Deliverance Church!

We are delighted to have you visit our online home. At Christ Is Love Deliverance Church, our vision is simple yet profound: making the love of Christ known to people. Our mission is to show and communicate the perfect love of God to communities, touching lives with hope, compassion, and grace.

We believe that love is the foundation of everything we do, and our guiding principle is found in 1 John 4:8 (NKJV): “He who does not love does not know God, for God is love.” Here, we are reminded that knowing God is inseparable from experiencing and expressing His love.

Whether you are seeking spiritual growth, encouragement, or a community that reflects God’s heart, you are welcome here. Our prayer is that as you journey with us—through worship, teaching, fellowship, and service—you will encounter the transforming power of God’s love.

Come as you are, and be a part of a family committed to reflecting Christ’s love in every word, deed, and outreach.

Experience love. Experience God. Welcome home.";

    $stmt = $db->prepare("INSERT INTO church_info (name, slogan, verse, welcome_note) VALUES (:name, :slogan, :verse, :welcome)");
    $stmt->bindValue(':name', "Christ is Love Deliverance Church (CLDC)", SQLITE3_TEXT);
    $stmt->bindValue(':slogan', "We love God and Love People.", SQLITE3_TEXT);
    $stmt->bindValue(':verse', "1 John 4:8 - He who does not love does not know God, for God is love.", SQLITE3_TEXT);
    $stmt->bindValue(':welcome', $welcome, SQLITE3_TEXT);
    $stmt->execute();

    // Seed events
    $events = [
        [
            "Worship Sunday Service",
            "Join us every Sunday for a powerful time of worship and fellowship.",
            "Every Sunday",
            "CLDC Main Church"
        ],
        [
            "3 Days Crusade & Door to Door Evangelism",
            "A life-transforming crusade and evangelism in Nabugondo - Kasanda District.",
            "2025-08-28 to 2025-08-30",
            "Nabugondo, Kasanda District, Uganda - East Africa"
        ]
    ];

    foreach ($events as $e) {
        $stmt = $db->prepare("INSERT INTO events (title, description, date, location) VALUES (:title, :desc, :date, :loc)");
        $stmt->bindValue(':title', $e[0], SQLITE3_TEXT);
        $stmt->bindValue(':desc', $e[1], SQLITE3_TEXT);
        $stmt->bindValue(':date', $e[2], SQLITE3_TEXT);
        $stmt->bindValue(':loc', $e[3], SQLITE3_TEXT);
        $stmt->execute();
    }

    echo "Database created and seeded successfully at $dbFile\n";

} catch (Exception $e) {
    die("Error: " . $e->getMessage() . "\n");
}

