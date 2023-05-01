<?php
// Set the cookie with name, value, and expiration time
setcookie("my_cookie", "Hello World!", time() + 3600);

// Output a message to confirm that the cookie was set
echo "Cookie 'my_cookie' is set!";
?>

<?php
// Check if the cookie is set
if (isset($_COOKIE['my_cookie'])) {
    // Output the cookie value
    echo "Cookie 'my_cookie' has a value of: " . $_COOKIE['my_cookie'];
} else {
    // Output a message if the cookie is not set
    echo "Cookie 'my_cookie' is not set!";
}
?>

<?php
// Set the cookie with an expiration time in the past to delete it
setcookie("my_cookie", "", time() - 3600);

// Output a message to confirm that the cookie was deleted
echo "Cookie 'my_cookie' is deleted!";
?>
