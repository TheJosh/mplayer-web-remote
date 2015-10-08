<?php
shell_exec('gnome-screensaver-command -p');
shell_exec('killall mplayer');
shell_exec('rm /tmp/mplayer-fifo');
shell_exec('mkfifo /tmp/mplayer-fifo');
shell_exec('./play.sh "' . escapeshellarg($_GET['p']) . '" </dev/null >/dev/null 2>&1 &');

header('HTTP/1.0 302 Temp');
header('Location: controls.php');
for ($i = 0; $i < 1000; $i++) { echo 'AAAAAAA'; }
flush();

