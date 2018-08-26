#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
	echo $echo." \033[91m--> ";
/*Color*/
$green = "\033[92m";
$red = "\033[91m";
$cyan = "\033[36m";
$yellow = "\033[93m";
$bold = "\033[5m";
$white = "\033[0m";
/*Form*/
$date   = date('d-M-Y H:i');
}
menu:
system($bersih);
$cyan = "\033[01;32m";
$lblue  = "\e[36m";
$bluebg = "\e[44m";
$blued = "\033[34;1m";
$bold   = "\e[1m";
$cln    = "\e[0m";
$redbg = "\e[101m";
$yellowbg = "\e[43m";
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$yellownl = "\033[01;33m";
$blue   = "\e[36m";
$n="\033[1;37m";
$m="\033[1;31m";
$h="\033[1;32m";

system($bersih);
echo "\n$n
\033[91m _ ____  _____  ____ ____ ____
\033[91m/ |___ \|___ / / ___/ ___/ ___|
\033[91m| | __) | |_ \| |   \___ \___ \
\033[91m| |/ __/ ___) | |___ ___) |__) |
\033[91m|_|_____|____/ \____|____/____/
\033[34;1m|========================================>
\033[01;33m [+] \e[92mAuthor  : \e[36mGunadiCBR
\033[01;33m [+] \e[92mCode    : \e[36mphp 
\033[01;33m [+] \e[92mGithub  : \e[36mhttp://github.com/Mls18hckr 
\033[01;33m [+] \e[92mTeam    : \e[36mMls18hckr\n"; 
echo 
"\033[34;1m|========================================>\n";
echo " \e[91m{\e[92m01\e[91m} \033[37;1mMulai\n";
echo " \e[91m{\e[92m02\e[91m} \033[37;1mInformasi Tool Ini\n";
echo " \e[91m{\e[92m00\e[91m} \033[37;1mKeluar\n";
echo "\033[34;1m|========================================>".$red."\n";
input("root@Tool-\033[34;1m123CSS");
$pilih=trim(fgets(STDIN));

if($pilih == "1" OR $pilih == "01") {
system($bersih);
echo $bold . $green . "DMYH  : $date\n";
system($bersih);
echo $bold . $red . "JUMLAH : ";
$count = trim(fgets(STDIN,999));
echo "\n";
echo $bold . $red . "JEDAH  : ";
$sleep = trim(fgets(STDIN,999));
for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-us/");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);
echo $cyan . "\nINFO :\n";
echo            " \033[34;1m[NAMA : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
		" [ALAMAT : ".$matches[1][8]."]".
		" [PHONE : ".$matches[1][9]."]\n";
echo $cyan . "CC :\n";
echo 		" \033[34;1m[E-MAIL : ".$matches[1][10]."]".
		" [NOMOR KARTU : ".str_replace(" ", "", $matches[1][14])."]".
		" [CVV : ".$matches[1][16]."]".
		" [EXP-DATE : ".$matches[1][15]."]\n";
	sleep($sleep);
}
echo "\n";
echo "Pencet".$red." [ENTER] ".$green."untuk kembali ke menu";
                fgets(STDIN);
                goto menu;
} elseif($pilih == "2" OR $pilih == "02") {
system($bersih);
echo "\n$n
\033[91m _ ____  _____  ____ ____ ____
\033[91m/ |___ \|___ / / ___/ ___/ ___|
\033[91m| | __) | |_ \| |   \___ \___ \
\033[91m| |/ __/ ___) | |___ ___) |__) |
\033[91m|_|_____|____/ \____|____/____/
\033[34;1m|=========================================>
\033[01;33m[+]Author  : \033[1;32mGunadiCBR
\033[01;33m[+]Contack : \033[1;32m085341899229
\033[01;33m[+]Version : \033[1;32m1.3
\033[01;33m[+]Date    : \033[1;32m17-08-2018
\033[01;33m[+]code    : \033[1;32mPHP
\033[01;33m[+]Team    : \033[1;32mMls18Hckr
\033[1;33m[-]Spesial Thanks To:
\033[01;32m 1. afel
\033[01;32m 2. ayam
\033[01;32m 3. anjing
\033[01;32m[+]And All Member Mls18hckr
\033[34;1m|=========================================>\n";
echo "\n";
echo "Pencet".$red." [ENTER] ".$green."untuk kembali ke menu";
                fgets(STDIN);
                goto menu;
} elseif($pilih == "0" OR $pilih == "00") {
	system($bersih);
	echo "\033[01;32mBy...By...:)\n";
	sleep(1.50);
        system($bersih);
        echo "\e[91mExiting...:)\n";
        sleep(3.80);
        exit();
} else {
	echo "\n";
	echo "\e[91m[!]WRONG INPUT[!]\n";
	echo "\e[101m[+] Try Again [+]€\n";
        sleep(1);
        goto menu;
}







