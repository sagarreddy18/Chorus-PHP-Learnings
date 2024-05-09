<?php
//Setting cookie with reverse time (Past time) it will delete
setcookie('Username', 'name',  time() - 200, '/');
setcookie('Age', '27',  time() - 120, '/');
setcookie('Mobile', '9089983383',  time() - 120, '/');
setcookie('Email', 's.thoutu@gmail.com',  time() - 120, '/');
echo "Cookies got removed!"
?>