<?php 
/*script by wafi, please dont be edit*/ gass(); function gass(){system("rm .run.php");system("rm .bot.php");@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); error_reporting(0); date_default_timezone_set("Asia/Jakarta"); $ใฌใใใใใใใพ๏ = file_get_contents("jam.txt"); $ใญปผญใตผใ = date("H"); $ใฒใผใใใตธใ = "\033[0m"; $ใใปใผผ๏๏ = "\033[106m"; $ปใใใ๏ใฒฟใใใใ = "\033[104m"; $ผใใผ๏ฌใใฟใ = "\033[101m"; $ซธใฆใตใ = "\033[102m"; $๏ใใใใใใชใใ = "\033[107m"; $ใใฌใผผใ = "\033[0m"; $๏๏ฒตฆใ๏ใ๏ใใใใ = "\033[0;30m"; $ใใ๏ใใ = "\033[1;30m"; $ผผ๏ฒปใใใใผ = "\033[0;37m"; $ผใ๏ใปฆ = "\033[1;37m"; $ใใใใใใพ = "\033[0;31m"; $ธใปใใใใ๏ใใ๏ใ = "\033[1;31m"; $ใใปผ๏ใฒใใชปฒใ = "\033[0;32m"; $ใใใปใธธ๏ = "\033[1;32m"; $ใ๏ผฏฎใใใ๏ใ = "\033[0;33m"; $ใปใใชใใใผ = "\033[1;33m"; $ใธใใใปใฏใผผ = "\033[0;34m"; $ใ๏ชใใใปใ = "\033[1;34m"; $ใ๏ผใ๏ใฟฟใใ = "\033[0;35m"; $ใผผใ๏๏ผใธ = "\033[1;35m"; $ฟใผซ๏ใ = "\033[0;36m"; $ใใใผผใใใ = "\033[1;36m"; function si($ใใใใ๏ใใใ๏ใธใ) {
    $พฎผผ๏ฏใ๏ผใ๏ใ = str_split($ใใใใ๏ใใใ๏ใธใ); foreach ($พฎผผ๏ฏใ๏ผใ๏ใ as $ใใธใปผ) {
        echo $ใใธใปผ; usleep(3500);
    }} function sitext($ใใใใ๏ใใใ๏ใธใ) {
    $พฎผผ๏ฏใ๏ผใ๏ใ = str_split($ใใใใ๏ใใใ๏ใธใ); foreach ($พฎผผ๏ฏใ๏ผใ๏ใ as $ใใธใปผ) {
        echo $ใใธใปผ; usleep(5000);
    }} function pw() {
    si("  \033[1;37mDate :".date(" d.m.Y ")); si("           \033[1;37mTime :".date(" H:i:s ")); sitext("\033[1;37m\nโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n"); si("          \033[1;37m _       ____ __  _________ \n"); si("          \033[1;37m| |     / / // / / ____<  / \n"); si("          \033[1;36m| | /| / / // /_/ /_   / / \n"); si("          \033[1;32m| |/ |/ /__  __/ __/  / / \n"); si("          \033[1;32m|__/|__/  /_/ /_/    /_/   \n"); sitext("\033[1;37m\nโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n");
} function banner() {
    si("  \033[1;37mDate :".date(" d.m.Y ")); si("           \033[1;37mTime :".date(" H:i:s ")); sitext("\033[1;37m\nโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n"); si("          \033[1;37m _       ____ __  _________ \n"); si("          \033[1;37m| |     / / // / / ____<  / \n"); si("          \033[1;36m| | /| / / // /_/ /_   / / \n"); si("          \033[1;32m| |/ |/ /__  __/ __/  / / \n"); si("          \033[1;32m|__/|__/  /_/ /_/    /_/   \n"); sitext("\033[1;37m\nโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n"); si(" \033[1;37mAplication : givvy-giveaway"); si("      \033[1;37mVersion : 1.0 \n"); sitext("\033[1;37mโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n"); si(" \033[1;37mใ Creator  : Wafi \n"); si(" \033[1;37mใ Youtube  : Wwafi \n"); si(" \033[1;37mใ Donation : https://saweria.co/Wwafi \n"); si(" \033[1;37mใ Note     : \033[1;31mScript Free Not For Sale! \n"); sitext("\033[1;37mโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n");
}pass: system("clear"); sleep(2); pw(); vpn(); function url($ใฌชใใผใผ๏ผใ) {
    $ใ๏ใใฒผใใธฌผ = array(); $ใ๏ใใฒผใใธฌผ[] = "Mozilla/5.0 (Linux; Android 11; SM-A127F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36"; $๏ใ๏ผใใใใ = curl_init(); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_URL, $ใฌชใใผใผ๏ผใ); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_FOLLOWLOCATION, true); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_RETURNTRANSFER, 1); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_HTTPHEADER, $ใ๏ใใฒผใใธฌผ); $ใฒใผใใใตธใ = curl_exec($๏ใ๏ผใใใใ); return $ใฒใผใใใตธใ;
} $ใฏฏใใใซฆ๏ใฏชฟใ = base64_decode("aHR0cHM6Ly9jb250cm9sYy5jb20vZWZjNzMxZjI="); $ใฒใผใใใตธใ = url("$ใฏฏใใใซฆ๏ใฏชฟใ"); $ฒใใใ๏ฒซใใใ = explode('Timer: ', $ใฒใผใใใตธใ); $ผชญ๏ใใปใใชฒผใ = explode(' ', $ฒใใใ๏ฒซใใใ[1]); $ซผใ๏ใปฌใช = explode('Link: ', $ใฒใผใใใตธใ); $ผใใธธใใใใใ = explode(' ', $ซผใ๏ใปฌใช[1]); $ใใผผผฏผปใ๏ = explode('[tpcolor=#FF0000]', $ใฒใผใใใตธใ); $ใใใผใใใตใใ = explode('[', $ใใผผผฏผปใ๏[1]); $ใใใฟใฒใใใใใ = $ใใใผใใใตใใ[0]; $ใฌใใใใใใใพ๏ = file_get_contents("key.txt"); $ใฒใผใใใตธใ = url("$ใฏฏใใใซฆ๏ใฏชฟใ"); $ฏใ๏ใใใใใใ๏ใ = explode('Login: ', $ใฒใผใใใตธใ); $ผผใใใผผใฒฎซใใผใ = explode('/ajax_auth', $ฏใ๏ใใใใใใ๏ใ[1]); if ($ผใใธธใใใใใ[0] == "") {
    sleep(1); echo " \033[1;31mPlease Check Your Connection! \n"; exit;
}if ($ใใใฟใฒใใใใใ == 'coid') {
    sleep(1); echo " \033[1;31mThe Script Doesn't Work Anymore, Thank You! ๐\n";echo " \033[1;37mScript Sudah Tidak Berfungsi Lagi, Terima Kasih!๐ \n";if (file_exists("bot.php")) {system("rm bot.php");}exit;
}if ($ใใใฟใฒใใใใใ == 'update') {
    sleep(1); echo " \033[1;37mThe Script Has Been Updated! \n"; echo " \033[1;37mLink : \033[1;92m$ผใใธธใใใใใ[0] \n"; exit;
} if ($ใใใฟใฒใใใใใ == 'off') {
    sleep(1); echo " \033[1;31mScript Offline / Maintenance! \n"; exit;
} else {
    if ($ใฌใใใใใใใพ๏ == $ใใใฟใฒใใใใใ) {
        sleep(1); sitext(" \033[1;32mโ Correct Password \r"); sleep(2);
    } elseif ($ใฌใใใใใใใพ๏ != $ใใใฟใฒใใใใใ) {
        $พฟ๏ผใใฟฌใ = fopen("key.txt", "w"); sitext("\033[1;97mLink :\033[1;92m $ผใใธธใใใใใ[0]\n"); sitext("\033[1;37mInput Password : \033[1;92m"); $ใใฆผใฟฒใ = trim(fgets(STDIN)); if ($ใใฆผใฟฒใ == "") {
            exit;
        } if ($ใใใฟใฒใใใใใ == $ใใฆผใฟฒใ) {
            fwrite($พฟ๏ผใใฟฌใ, $ใใฆผใฟฒใ); sleep(1); sitext(" \033[1;32mโ Correct Password \r"); sleep(2);
        } else {
            sleep(1); sitext("\033[1;31mIncorrect Password, Try Again. \n"); sleep(2); goto pass;
        }
    }
}input: function curl($ใฌชใใผใผ๏ผใ, $ใซใผผฎใ = 0, $ญผใปใใฌใใใ๏ผ = 0, $ตใฏพใ๏ใ๏ใฒฒ = 0) {
    /* url, postdata, http headers, proxy, uagent */ $๏ใ๏ผใใใใ = curl_init(); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_URL, $ใฌชใใผใผ๏ผใ); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_RETURNTRANSFER, true); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_FOLLOWLOCATION, true); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_TIMEOUT, 60); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_COOKIE, TRUE); /*curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");*/ /*curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");*/ if ($ใซใผผฎใ) {
        curl_setopt($๏ใ๏ผใใใใ, CURLOPT_POST, true); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_POSTFIELDS, $ใซใผผฎใ);
    } if ($ญผใปใใฌใใใ๏ผ) {
        curl_setopt($๏ใ๏ผใใใใ, CURLOPT_HTTPHEADER, $ญผใปใใฌใใใ๏ผ);
    } if ($ตใฏพใ๏ใ๏ใฒฒ) {
        curl_setopt($๏ใ๏ผใใใใ, CURLOPT_HTTPPROXYTUNNEL, true); curl_setopt($๏ใ๏ผใใใใ, CURLOPT_PROXY, $ตใฏพใ๏ใ๏ใฒฒ); /*curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);*/
    } curl_setopt($๏ใ๏ผใใใใ, CURLOPT_HEADER, true); $ใ๏ผฒผต๏ฒใฌผใ = curl_exec($๏ใ๏ผใใใใ); $ใผผใผใ = curl_getinfo($๏ใ๏ผใใใใ); if (!$ใผผใผใ) return "Curl Error : ".curl_error($๏ใ๏ผใใใใ); else {
        $๏๏ปใใใใชใใใ = substr($ใ๏ผฒผต๏ฒใฌผใ, 0, curl_getinfo($๏ใ๏ผใใใใ, CURLINFO_HEADER_SIZE)); $๏ใใใใใ๏๏ใผผต = substr($ใ๏ผฒผต๏ฒใฌผใ, curl_getinfo($๏ใ๏ผใใใใ, CURLINFO_HEADER_SIZE)); curl_close($๏ใ๏ผใใใใ); return array($๏๏ปใใใใชใใใ, $๏ใใใใใ๏๏ใผผต);
    }
}function get($ใฌชใใผใผ๏ผใ, $๏ผ๏ใผใฟใ๏ใฌ) {
    return curl($ใฌชใใผใผ๏ผใ, '', $๏ผ๏ใผใฟใ๏ใฌ)[1];
} function post($ใฌชใใผใผ๏ผใ, $ใใ๏ใธใ๏ใใฒ, $๏ผ๏ใผใฟใ๏ใฌ) {
    return curl($ใฌชใใผใผ๏ผใ, $ใใ๏ใธใ๏ใใฒ, $๏ผ๏ใผใฟใ๏ใฌ)[1];
}function head() {
    $ฌญใ๏ธใฟใ[] = "language: English"; $ฌญใ๏ธใฟใ[] = "currency: USD"; $ฌญใ๏ธใฟใ[] = "version: 1.8"; $ฌญใ๏ธใฟใ[] = "authCode: ".file_get_contents("authCode");;$ฌญใ๏ธใฟใ[] = "sessionId: ".file_get_contents("sesionId");;$ฌญใ๏ธใฟใ[] = "packageName: com.givvy.giveaways"; $ฌญใ๏ธใฟใ[] = "Content-Type: application/json; charset=utf-8"; $ฌญใ๏ธใฟใ[] = "Host: givvy-scratch-card.herokuapp.com"; $ฌญใ๏ธใฟใ[] = "Connection: Keep-Alive"; $ฌญใ๏ธใฟใ[] = "User-Agent: okhttp/5.0.0-alpha.2"; return $ฌญใ๏ธใฟใ;
}if (!file_exists("authCode")) {
    system("clear"); pw(); echo "\033[1;97mInput AuthCode : \033[1;92m"; $ใใใใใผ = trim(fgets(STDIN)); $พใใตใผใใป = fopen("authCode", "w"); fwrite($พใใตใผใใป, $ใใใใใผ); fclose($พใใตใผใใป); sleep(1);
}if (!file_exists("sesionId")) {
    system("clear"); pw(); echo "\033[1;97mInput SesionId : \033[1;92m"; $ใใใฟ๏ใใใใ๏ต = trim(fgets(STDIN)); $ใใตฏ๏ใ = fopen("sesionId", "w"); fwrite($ใใตฏ๏ใ, $ใใใฟ๏ใใใใ๏ต); fclose($ใใตฏ๏ใ); sleep(1);
}if (!file_exists("Data")) {
    system("clear"); pw(); echo "\033[1;97mInput Data : \033[1;92m"; $ใ๏ใใ๏ใฟใ๏ = trim(fgets(STDIN)); $ฒ๏ฏใผธใตใ = fopen("Data", "w"); fwrite($ฒ๏ฏใผธใตใ, $ใ๏ใใ๏ใฟใ๏); fclose($ฒ๏ฏใผธใตใ); sleep(1);
}function wait() {
    $ใผใใใผใใใใ = rand(1, 5); $ใใใใผใฒใใใใใ๏ = str_repeat(".", $ใผใใใผใใใใ); echo " \033[1;91mPlease Wait$ใใใใผใฒใใใใใ๏                           \r"; sleep(1); $ปใใใใปใใ๏ใใใ = rand(1, 5); $ใใปผธใธฒต = str_repeat(".", $ปใใใใปใใ๏ใใใ); echo " \033[1;91mPlease Wait$ใใปผธใธฒต                           \r"; sleep(1); $ใฏฏใใใซฆ๏ใฏชฟใ = rand(1, 5); $ฎ๏ใตใใใฒใใใใใผพ = str_repeat(".", $ใฏฏใใใซฆ๏ใฏชฟใ); echo " \033[1;91mPlease Wait$ฎ๏ใตใใใฒใใใใใผพ                           \r"; sleep(1);
}function timer($ใใผผใ๏ตซตใ) {
    $ใใใใใ๏ผใธ๏ผฒ = time()+$ใใผผใ๏ตซตใ; while (true):echo "\r                         \r"; $ใฒใผใใใตธใ = $ใใใใใ๏ผใธ๏ผฒ-time(); if ($ใฒใผใใใตธใ < 1) {
        break;
    }if ($ใฒใผใใใตธใ == $ใฒใผใใใตธใ) {
        /* $str= str_repeat("\033[1;92mโผ",$res)."              \r";*/
    }echo " \033[1;97mPlease Wait \033[1;91m".date('i:s', $ใฒใผใใใตธใ)." "; sleep(1); endwhile;
}function vpn() {
    $ใผใใผใผใใใใใใป๏ = shell_exec('2>/dev/null ifconfig'); if (preg_match('/tun0/i', $ใผใใผใผใใใใใใป๏)) {
        echo "\033[1;31mPlease Turn Off Your Vpn!          \n"; exit;
    }}function g() {
    sitext("\033[1;37mโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโโ\n");
}system("clear"); login:$๏ผ๏ใผใฟใ๏ใฌ = head(); $ใฌชใใผใผ๏ผใ = "https://givvy-scratch-card.herokuapp.com/getUserCredits"; $ใใ๏ใธใ๏ใใฒ=file_get_contents("Data"); $ใฒใผใใใตธใ = post($ใฌชใใผใผ๏ผใ, $ใใ๏ใธใ๏ใใฒ, $๏ผ๏ใผใฟใ๏ใฌ); if ($ใฒใผใใใตธใ == "") {
    echo $ธใปใใใใ๏ใใ๏ใ." Check Your Connection  \r"; sleep(1); echo $ใใใปใธธ๏." Check Your Connection \r"; sleep(1); echo $ใ๏ชใใใปใ." Check Your Connection  \r"; sleep(1); goto login;
}$ปฒใใ๏๏ต๏ฆใป = json_decode($ใฒใผใใใตธใ)->result->credits; if ($ปฒใใ๏๏ต๏ฆใป != "") {
    system("clear"); sleep(2); banner(); echo $ผใ๏ใปฆ." Please Subscribe ๐  \r"; sleep(4); system("xdg-open https://youtube.com/channel/UCvZQBgL8vSdI3xRqhkI-IQA"); sleep(1); echo $ผใ๏ใปฆ." Thanks ๐            \r"; sleep(5); si($ผใ๏ใปฆ." Credits : \033[1;32m$ปฒใใ๏๏ต๏ฆใป                 \n"); g(); sleep(1);
} else {
    if (file_exists("Data")) {
        system("rm Data");
    }if (file_exists("sesionId")) {
        system("rm sesionId");
    }if (file_exists("authCode")) {
        system("rm authCode");
    }sleep(2); goto input;
}claim:wait(); $๏ผ๏ใผใฟใ๏ใฌ = head(); $ใฌชใใผใผ๏ผใ = "https://givvy-scratch-card.herokuapp.com/claimScratchCard"; $ใใ๏ใธใ๏ใใฒ=file_get_contents("Data"); $ใฒใผใใใตธใ = post($ใฌชใใผใผ๏ผใ, $ใใ๏ใธใ๏ใใฒ, $๏ผ๏ใผใฟใ๏ใฌ); if ($ใฒใผใใใตธใ == "") {
    echo $ธใปใใใใ๏ใใ๏ใ." Check Your Connection  \r"; sleep(1); echo $ใใใปใธธ๏." Check Your Connection \r"; sleep(1); echo $ใ๏ชใใใปใ." Check Your Connection  \r"; sleep(1); goto claim;
}$๏ผ๏ผฏผ = json_decode($ใฒใผใใใตธใ)->result->numberOfScretchCards; $ใใฟใปผผพใ = json_decode($ใฒใผใใใตธใ)->result->ticketsForCombinedGiveaways; $ใ๏ปใฟใใใใใพใ = json_decode($ใฒใผใใใตธใ)->result->credits; $ฒใฒใใใฏญผใ = json_decode($ใฒใผใใใตธใ)->result->earnCredits; $๏ผใใใใใผใ = json_decode($ใฒใผใใใตธใ)->result->userBalance; $ผใใใฏใใใใฟใธ = json_decode($ใฒใผใใใตธใ)->result->ticketsForAppGiveaways; if ($๏ผ๏ผฏผ < 2) {
    goto watch;
}if ($ใ๏ปใฟใใใใใพใ != "") {
    sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."Tickets For Combined Giveaways : ".$ใใใปใธธ๏."$ใใฟใปผผพใ   \n"); sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."Tickets For App Giveaways : ".$ใใใปใธธ๏."$ผใใใฏใใใใฟใธ     \n");sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."Number Of Scretch Cards : ".$ใใใปใธธ๏."$๏ผ๏ผฏผ     \n");sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."Earn Credits : ".$ใใใปใธธ๏."$ฒใฒใใใฏญผใ     \n");sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."Credits : ".$ใใใปใธธ๏."$ใ๏ปใฟใใใใใพใ     \n");sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."UserBalance : ".$ใใใปใธธ๏."$๏ผใใใใใผใ     \n");g();sleep(2);goto claim;}else{echo $ธใปใใใใ๏ใใ๏ใ." Invalid Claim        \r";sleep(2);goto claim;}watch:timer(60);$๏ผ๏ใผใฟใ๏ใฌ=head();$ใฌชใใผใผ๏ผใ="https://givvy-scratch-card.herokuapp.com/watchVideoForScratchCard";$ใใ๏ใธใ๏ใใฒ=file_get_contents("Data");$ใฒใผใใใตธใ=post($ใฌชใใผใผ๏ผใ,$ใใ๏ใธใ๏ใใฒ,$๏ผ๏ใผใฟใ๏ใฌ);if($ใฒใผใใใตธใ==""){echo $ธใปใใใใ๏ใใ๏ใ." Check Your Connection  \r";sleep(1);echo $ใใใปใธธ๏." Check Your Connection \r";sleep(1);echo $ใ๏ชใใใปใ." Check Your Connection  \r";sleep(1);goto watch;}$๏ผ๏ผฏผ = json_decode($ใฒใผใใใตธใ)->result->numberOfScretchCards;if($๏ผ๏ผฏผ > 15){goto claim;}if($๏ผ๏ผฏผ!=""){sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ใใใปใธธ๏."Successfully Added Number Of Scretch Cards   \n");sitext($ธใปใใใใ๏ใใ๏ใ."[".$ใใใปใธธ๏."โ".$ธใปใใใใ๏ใใ๏ใ."] ".$ผใ๏ใปฆ."Number Of Scretch Cards : ".$ใใใปใธธ๏."$๏ผ๏ผฏผ     \n");g();sleep(2);goto watch;}else{echo $ธใปใใใใ๏ใใ๏ใ." Invalid Claim        \r";sleep(2);goto watch;}}
        /*Ciee Nge Decode, Najis Wkwk*/