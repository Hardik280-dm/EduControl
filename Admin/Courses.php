<?php
$url = "dashboard.php";
?>
<!DOCTYPE html>
<html>
<body>
    <p>This feature is temporary not available at this time.You will be redirect to dashboard.........</p>
    
    <script>
        setTimeout(function() {
            window.location.href = "<?= $url; ?>";
        }, 500); // 3000ms = 3 seconds
    </script>
</body>
</html>