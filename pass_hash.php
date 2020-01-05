<?php
/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
echo "<br>";
echo password_hash("test", PASSWORD_DEFAULT);
echo "<br>";
echo password_hash("test", PASSWORD_DEFAULT);
echo "<br>";

echo password_verify("rasmuslerdorf", password_hash("rasmuslerdorf", PASSWORD_DEFAULT));

?>
