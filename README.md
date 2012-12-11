mplayer-web-remote
==================

A PHP tool for browsing files and playing videos using MPlayer.

Just run on your server, and you can browse the files and control the player with your mobile phone.

You need to run the scripts as the user which is logged in to the media player.

Tested using PHP 5.4 cli-webserver. I haven't tested other servers, but it should be fine.

I knocked this up in about an hour; it's not the best coded I've ever written, and has a
few security issues I know about but can't be bothered fixing at the moment. I'll fix them later if
I feel like it.

I don't suggest you run this on a public server, for (hopefully) obvious reasons.