<?php
echo "<h2>Список посещённых страниц</h2>";
echo "<ol>";
foreach ($_SESSION['visitedPages'] as $page) {
    echo "<li>" . htmlspecialchars($page) . "</li>";
}
echo "</ol>";
?>
