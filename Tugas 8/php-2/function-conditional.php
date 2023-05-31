<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";
    /*
        Soal No 1 
        Greetings 
        Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 
        contoh: greetings("abduh"); 
        Output: "Halo Abduh, Selamat Datang di Garuda Cyber Institute!" 
    */
    // Code function di sini 
    function greetings($name)
    {
        echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
    }
    // Hapus komentar untuk menjalankan code! 
    greetings("Bagas");
    greetings("Wahyu");
    greetings("nama peserta");
    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    /*
        Soal No 2 
        Reverse String 
        Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while). Function reverseString menerima satu parameter berupa string. 
        NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING! 
        reverseString("abdul"); 
        Output: ludba 
    */
    // Code function di sini 
    function reverseString($str)
    {
        $result = "";
        for ($i = (strlen($str) - 1); $i >= 0; $i--) {
            // echo $str[$i];
            $result .= $str[$i];
        }
        return $result;
    }

    // Hapus komentar di bawah ini untuk jalankan Code 
    echo "nama peserta direverse menjadi " . reverseString("nama peserta") . "<br>";
    echo "Garuda Cyber Institute direverse menjadi " . reverseString("Garuda Cyber Institute") . "<br>";
    echo "We Are GC-Ins Developer direverse menjadi " . reverseString("We Are GC-Ins Developer") . "<br>";


    echo "<h3>Soal No 3 Palindrome </h3>";
    /*
        Soal No 3 
        Palindrome 
        Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
        Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic. 
        Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false. 
        NB: 
        Contoh: 
        palindrome("katak") => output : "true" 
        palindrome("jambu") => output : "false" 
        NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2! 
    */

    // Code function di sini 
    function palindrome($str)
    {
        $temp = $str;
        if ($temp == reverseString($temp)) {
            return " true<br>";
        } else {
            return " false<br>";
        }
    }
    // Hapus komentar di bawah ini untuk jalankan code 
    echo "Civic ==" . palindrome("civic"); // true 
    echo "Nababan ==" . palindrome("nababan"); // true 
    echo "Jambaban ==" . palindrome("jambaban"); // false 
    echo "Racecar ==" . palindrome("racecar"); // true 

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*
        Soal 4 
        buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
        berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
        Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” 
        selain itu jika parameter number lebih besar samadengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang” 
    */
    // Code function di sini 
    function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            echo "Nilai Anda Sangat Baik<br>";
        } elseif ($nilai >= 70 && $nilai < 85) {
            echo "Nilai Anda Baik<br>";
        } elseif ($nilai >= 60 && $nilai < 70) {
            echo "Nilai Anda Cukup<br>";
        } else {
            echo "Nilai Anda Kurang<br>";
        }
    }
    // Hapus komentar di bawah ini untuk jalankan code 
    tentukan_nilai(98); //Sangat Baik 
    tentukan_nilai(76); //Baik 
    tentukan_nilai(67); //Cukup 
    tentukan_nilai(43); //Kurang 
    ?>
</body>

</html>