<?php
//Setting cookie   and this will persist 5 minutes
setcookie('Username', 'Sagar Reddy Thoutu',  time() + 120, '/');
setcookie('Age', '27',  time() + 120, '/');
setcookie('Mobile', '9089983383',  time() + 120, '/');
setcookie('Email', 's.thoutu@gmail.com',  time() + 120, '/');

echo "You have added Cookies Successfully!"
?>