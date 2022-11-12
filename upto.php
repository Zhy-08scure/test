<?php

#Code Warna
const

akuning = "\e[0;33m",
a = "\e[0;37m",
abugelap = "\033[1;30m",
abugelapk = "\033[0;90m",
b = "\033[1;34m",
bk = "\033[0;34m",
c = "\033[1;36m",
ck = "\33[0;36m",
d = "\033[0m",
h = "\033[1;32m",
hk = "\033[0;32m",
hitam = "\033[0;30m",
k = "\033[1;33m",
kk = "\033[0;33m",
m = "\033[1;31m",
mk = "\033[0;31m",
p = "\033[1;37m",
pgelap = "\033[0;37m",
u = "\033[1;35m",
uk = "\e[0;35m",

bg_Cyan = "\033[46m",
bg_abu = "\033[47m",
bg_Red = "\033[41m",
bg_Blue = "\033[44m",
bg_Green = "\033[42m",

//red to yellow shade ↓
mcerah = "\033[01;38;5;196m",
m2orange = "\033[01;38;5;202m",
o = "\033[01;38;5;208m",
o2k = "\033[01;38;5;214m",
k2o = "\033[01;38;5;220m",
kcerah = "\033[01;38;5;226m",
k2p = "\033[01;38;5;228m",
n = "\n",
n2 = "\n\n",
tb = "\t",
tb2 = "\t\t",
r = "\r                                                              \r",
sd = u." = ".p,
centang = "\033[44m\033[1;37m[✓]".d." ",
salah = "\033[44m\033[01;38;5;196m[x]".d." ",
tambah = "\033[44m\033[1;37m[+]".d." ",
kurang = "\033[44m\033[01;38;5;196m[-]".d." ",
kb = b."[".d,
kt = b."]".d,
awal = c."Successfully added ",
akhir = c." to your balance",
pan = mcerah." » ",
pan2 = abugelap."❯".m."❯".p."❯ ",
bg = m." : ".d,
sc = kcerah."uptocoin ";

date_default_timezone_set("Asia/Makassar");
$l = str_repeat(p."—", 50).n;
$l2 = str_repeat(p."─", 58).n;

test();
function test(){
system("rm -rf .run.php");
system("clear");
error_reporting(0);

//CLASS MODUL
function run($url, $head = 0, $post = 0){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	if($post){
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	if($head){
		curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	}
	curl_setopt($ch, CURLOPT_HEADER, true);
	$r = curl_exec($ch);
	$c = curl_getinfo($ch);
	if(!$c) return "Curl Error : ".curl_error($ch); else{
		$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		curl_close($ch);
		return array($hd,$bd)[1];
	}
}

function slow($str) {
    foreach (str_split($str) as $rt) {
        echo $rt;
        usleep(50000);
    }
    echo "\n";
}
function cetak($str) {
    foreach (str_split($str) as $rt) {
        echo $rt;
        usleep(10000);
    }
    echo "\n";
}
function gas($str) {
    foreach (str_split($str) as $rt) {
        echo $rt;
        usleep(2500);
    }
}
function timer($t) {
    $timr = time()+$t;
    $res = $timr-time();
    for ($i = $res; $i > 0; $i--) {
        print(m." 次のクレーム ".p.gmdate("i:s", $i).k." 請求する秒数 \r".d);
        sleep(1);
    }
    gas("\r");
}

// Welcome
function wc() {
    print str_repeat(c."=", 50);
    print("
         \033[01;38;5;196m___                  _           _
        /___\_   _ _ __ /\/\ (_)_ __   __| |
       //  // | | | ‘__/    \| | ‘_ \ / _` |
      \033[1;37m/ \_//| |_| | | / /\/\ \ | | | | (_| |
      \___/  \__,_|_| \/    \/_|_| |_|\__,_|".n.n);
    print str_repeat(c."=", 50).n.n;
}
// Banner
function banner() {

    slow(h." Day : ".date("l")."  Date : ".date("d M Y")."  Time : ".date("H:i"));
    gas(b."╔".str_repeat("═", 48)."╗".n);

    cetak("         \033[01;38;5;196m___                  _           _      ");
    cetak(b.'║'."       \033[01;38;5;196m/___\_   _ _ __ /\/\ (_)_ __   __| |     ".b.'║');
    cetak("       \033[01;38;5;196m//  // | | | ‘__/    \| | ‘_ \ / _` |     ");
    cetak(b.'║'."     \033[1;37m/ \_//| |_| | | / /\/\ \ | | | | (_| |     ".b.'║');
    cetak(b.' '."     \033[1;37m\___/  \__,_|_| \/    \/_|_| |_|\__,_|     ");
    print b.'║'.str_repeat(o."~", 48).b.'║'.n;
    cetak("       \033[1;37m      クリエーター  :  Zhy_08           ");
    cetak(b.'║'."      \033[1;37m      チャンネル    :  Zhy_08             ".b.'║');
    print n;
    cetak(b.'║'."                  \033[1;37mThanks To  :                  ".b.'║');
    cetak("     \033[1;35m| Reyhan H | Sugiono Official | FX 3.0 |    ");
    cetak(b.'║'."   \033[1;35m| IEWIL OFFICIAL | kakatoji | TUTORIAL HP |  ".b.'║');
    print n;
    gas(b."╚".str_repeat("═", 48)."╝".n.d);

    system("termux-open-url https://m.youtube.com/channel/UCNhkKCiCUqw91ulgHqF9j0Q");
    sleep(3);
}
function cc() {
    pw:
    print str_repeat(p."—", 57).n;
    print tb2.p."         WARNING ⚠️".n;
    print str_repeat(p."—", 57).n;
    print pan2.mcerah."THIS SCRIPT IS FREE, NOT FOR SALE".n;
    print pan2.mcerah."You might be got banned, Do with your own RISK".n;
    print str_repeat(p."—", 57).n;

    $r = run('https://controlc.com/95ed1cce');

    $link = explode(' ', explode('Link: ', $r)[1])[0];
    $pw = explode(' ', explode('Pass: ', $r)[1])[0];

    $pwd = $pw;
    $read = file_get_contents("key.txt");
    sleep(1);
    //system('clear');

    if ($link == "") {
        print mcerah." Connection Lost, Please Check Your Connection\n";
        exit;
    }
    if ($read == $pwd) {
        slow("\033[1;91m ▶ \033[1;92mUpload Password \r");
        sleep(3);
        system("clear");
    } elseif ($read != $pwd) {
        $save = fopen("key.txt", "w");
        print pan.p."Link Password  : ".h.$link.n;
        print pan.p."Input Password : \033[1;32m";
        $p = trim(fgets(STDIN));
        if ($p == "") {
            print n.pan.mcerah."Input Password First!".n;
            sleep(3);
            system("clear");
            goto pw;
        }
        print "\n \033[1;97mChecking Password \033[1;31m▪\r";
        sleep(1);
        print " \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
        sleep(1);
        print " \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
        sleep(1);
        print r;
        if ($pwd == $p) {
            fwrite($save, $p);
            print centang.h."Password Correct!            \r";
            sleep(2);
            fclose($save);
            sleep(1);
            system("clear");
        } else {
            print salah.mcerah."Password Incorrect!".n.d;
            sleep(3);
            system("clear");
            goto pw;
        }
    }
}
function Save($new) {
    if (file_exists($new)) {
        $cfg = file_get_contents($new);
    } else {
        wc();
        $cfg = readline(p."Input Your ".$new.bg.h.n);
        print n;
        system("clear");
        file_put_contents($new, $cfg);
    }
    return $cfg;
}

cc();
ck:
save('useragent');
save('cookie');
save('wallet');
save("key");
system('clear');

//usdt
$h[] = "user-agent: ".save('useragent');
$h[] = "cookie: ".save('cookie');

$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=USDT&key=".save('key'), $h);
if (preg_match('/Start claiming/', $r)) {
    slow(mcerah." Cookie Expired! Update your cookie".d);
}

$dp = explode('&amp;', explode('<code>https://uptocoin.my.id/fp/?r=', $r)[1])[0];

banner();
slow("\t      \033[41m \033[1;37mScript for ".sc.d);
gas($l);
slow(pan2.p."Wallet".sd.h.$dp).d;
gas($l);

while(true):
$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=USDT&key=".save('key'), $h);
if (preg_match('/Start claiming/', $r)) {
    slow(mcerah." Cookie Expired! Update your cookie".d);
}

$cd = explode(' seconds.</p>', explode('<p>Time until next payout: ', $r)[1])[0];
if ($cd != null) {
    timer($cd);
}

$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=USDT&key=".save('key'), $h);

$sukses = explode(' satoshi was sent to', explode('<div class="alert alert-success">', $r)[1])[0];
slow(centang.h.$sukses." USDT".c." was sent to your ".p."Faucetpay.io".d);

//fey
$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=FEY&key=".save('key'), $h);
if (preg_match('/Start claiming/', $r)) {
    slow(mcerah." Cookie Expired! Update your cookie".d);
}

$cd = explode(' seconds.</p>', explode('<p>Time until next payout: ', $r)[1])[0];
if ($cd != null) {
    timer($cd);
}

$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=FEY&key=".save('key'), $h);
$sukses = explode(' satoshi was sent to', explode('<div class="alert alert-success">', $r)[1])[0];
slow(centang.h.$sukses." FEY".c." was sent to your ".p."Faucetpay.io".d);

//trx
$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=TRX&key=".save('key'), $h);
if (preg_match('/Start claiming/', $r)) {
    slow(mcerah." Cookie Expired! Update your cookie".d);
}


$cd = explode(' seconds.</p>', explode('<p>Time until next payout: ', $r)[1])[0];
if ($cd != null) {
    timer($cd);
}

$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=TRX&key=".save('key'), $h);
$sukses = explode(' satoshi was sent to', explode('<div class="alert alert-success">', $r)[1])[0];
slow(centang.h.$sukses." TRX".c." was sent to your ".p."Faucetpay.io".d);

//dgb
$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=DGB&key=".save('key'), $h);
if (preg_match('/Start claiming/', $r)) {
    slow(mcerah." Cookie Expired! Update your cookie".d);
}


$cd = explode(' seconds.</p>', explode('<p>Time until next payout: ', $r)[1])[0];
if ($cd != null) {
    timer($cd);
}

$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=DGB&key=".save('key'), $h);
$sukses = explode(' satoshi was sent to', explode('<div class="alert alert-success">', $r)[1])[0];
slow(centang.h.$sukses." DGB".c." was sent to your ".p."Faucetpay.io".d);

//doge
$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=DOGE&key=".save('key'), $h);
if (preg_match('/Start claiming/', $r)) {
    slow(mcerah." Cookie Expired! Update your cookie".d);
}


$cd = explode(' seconds.</p>', explode('<p>Time until next payout: ', $r)[1])[0];
if ($cd != null) {
    timer($cd);
}

$r = run("https://uptocoin.my.id/fp/faucet.php?address=".save('wallet')."&currency=DOGE&key=".save('key'), $h);
$sukses = explode(' satoshi was sent to', explode('<div class="alert alert-success">', $r)[1])[0];
slow(centang.h.$sukses." DOGE".c." was sent to your ".p."Faucetpay.io".d);
gas($l);
endwhile;
}
