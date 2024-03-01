<?php
    
    $metin  =   "Lorem ipsum dolor sit amet lordo.";
    $desen  =   "/^lorem/i";
    preg_match($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    echo "<br>";
    $desen2  =   "/^dolor/i"; //başında arar (^)
    $sonuc = preg_match($desen2,$metin); //eşleşme varsa 1 yoksa 0 döner.

    echo $sonuc ."<br>";

    $desen3  =   "/amet\.$/i"; //sonunda arar ($)
    preg_match($desen3,$metin,$sonuc); //eşleşme varsa 1 yoksa 0 döner.

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen4  =   "/\bdo/i"; //herhangi bir kelimenin nerede geçmesi isteniyorsa oraya konur. (\b)
    preg_match($desen4,$metin,$sonuc); //eşleşme varsa 1 yoksa 0 döner.

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $desen5  =   "/do\b/i"; //herhangi bir kelimenin nerede geçmesi isteniyorsa oraya konur.(baş son) (\b)
    preg_match($desen5,$metin,$sonuc); //eşleşme varsa 1 yoksa 0 döner.

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen6  =   "/em\B/i"; //herhangi bir kelimenin baş ve son dışında geçmesi isteniyorsa başa ya da sona konur. (\B)
    preg_match($desen6,$metin,$sonuc); //eşleşme varsa 1 yoksa 0 döner.

    // çok mecbur kalınırsa \Bdsafad\B kullanılabilir. 
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    $metin  =   "onur'un--bigisayarındaki-kedi---";

    $desen  =   "/ur(?='un)/";  //varsa ur döner. ur un sonunda 'un varsa

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $desen  =   "/ur(?!'un)/";  //varsa ur döner. ur un sonunda 'un yoksa = yerine ! var.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    
    $desen  =   "/-{2}/"; // - ifade içersinde 2 defa tekrarlı şekilde olmalıdır.
    //varsayılanı 1 dir cümle metin içindeki tüm - leri arar.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/-{1,}/"; // - ifade içersinde 1 veya daha fazla defa tekrarlı şekilde olmalıdır.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/n-{1,}/"; // - ifade içersinde n ile başlayıp 1 veya daha fazla defa tekrarlı şekilde olmalıdır.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    echo "</pre>";
    $desen  =   "/-{2,3}/"; // - ifade içersinde 2,3 defa tekrarlı şekilde olmalıdır.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $desen  =   "/-+/"; // - ifade içersinde en az 1 defa tekrarlanmış olmalıdır.sadece {1,} ile aynı işlevi yapar. 
    // + konulmazsa hepsini tek tek alt alta yazar
    //+ konulursa kalıp şeklinde yakalar. * daki gibi boşluk koymaz.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    $desen  =   "/-*/"; //

    //metni sırayla gezer ve ya boş döndürür ya da aradığı değeri bulursa kalıp döndürür.
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $desen  =   "/-?/"; //

    //* gibidir ama kalıp şeklinde değil alt alta yazdırır.
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";



?>