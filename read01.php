<?php
// ファイルを開く
$data = file_get_contents('data01/data01.txt');

// 行ごとにデータを分割
// 与えられた文字列 $data を改行 \n で分割し、その結果を配列 $entries に格納
$entries = explode("\n", $data);

// 年代ごとにデータを格納する連想配列
$ageGroups = array(
    '20代' => array(
        '平日' => array(),
        '休日' => array(),
        '正社員' => array()
    ),
    '30代' => array(
        '平日' => array(),
        '休日' => array(),
        '正社員' => array()
    ),
    '40代' => array(
        '平日' => array(),
        '休日' => array(),
        '正社員' => array()
    ),
    '50代' => array(
        '平日' => array(),
        '休日' => array(),
        '正社員' => array()
    ),
    '60代' => array(
        '平日' => array(),
        '休日' => array(),
        '正社員' => array()
    ),
    '70代以上' => array(
        '平日' => array(),
        '休日' => array(),
        '正社員' => array()
    )
);

// 各エントリを処理
foreach ($entries as $entry) {
    // 空の行はスキップ
    if (empty($entry)) {
        continue;
    }

    // 正規表現を使用して日時と応募内容を分割
    preg_match('/^(\S+\s\S+)\s(.+)$/', $entry, $matches);
    $datetime = $matches[1];
    $contents = $matches[2];

    // 応募内容をスペースで分割
    $fields = explode(" ", $contents);

    // 年齢情報取得
    $age = $fields[2];

    // 年代・応募内容ごとにデータを格納
    if ($age >= 20 && $age < 30) {
        $ageGroups['20代'][$fields[0]][] = array(
            '日時' => $datetime,
            '応募内容' => $fields[0],
            'お名前' => $fields[1],
            '年齢' => $age,
            '勤務先' => $fields[3],
            '電話番号' => $fields[4],
            'メールアドレス' => $fields[5],
            '性別' => $fields[6],
            'その他・希望' => $fields[7]
        );
    } elseif ($age >= 30 && $age < 40) {
        $ageGroups['30代'][$fields[0]][] = array(
            '日時' => $datetime,
            '応募内容' => $fields[0],
            'お名前' => $fields[1],
            '年齢' => $age,
            '勤務先' => $fields[3],
            '電話番号' => $fields[4],
            'メールアドレス' => $fields[5],
            '性別' => $fields[6],
            'その他・希望' => $fields[7]
        );
    } elseif ($age >= 40 && $age < 50) {
        $ageGroups['40代'][$fields[0]][] = array(
            '日時' => $datetime,
            '応募内容' => $fields[0],
            'お名前' => $fields[1],
            '年齢' => $age,
            '勤務先' => $fields[3],
            '電話番号' => $fields[4],
            'メールアドレス' => $fields[5],
            '性別' => $fields[6],
            'その他・希望' => $fields[7]
        );
    } elseif ($age >= 50 && $age < 60) {
        $ageGroups['50代'][$fields[0]][] = array(
            '日時' => $datetime,
            '応募内容' => $fields[0],
            'お名前' => $fields[1],
            '年齢' => $age,
            '勤務先' => $fields[3],
            '電話番号' => $fields[4],
            'メールアドレス' => $fields[5],
            '性別' => $fields[6],
            'その他・希望' => $fields[7]
        );
    } elseif ($age >= 60 && $age < 70) {
        $ageGroups['60代'][$fields[0]][] = array(
            '日時' => $datetime,
            '応募内容' => $fields[0],
            'お名前' => $fields[1],
            '年齢' => $age,
            '勤務先' => $fields[3],
            '電話番号' => $fields[4],
            'メールアドレス' => $fields[5],
            '性別' => $fields[6],
            'その他・希望' => $fields[7]
        );
    } elseif ($age >= 70) {
        $ageGroups['70代以上'][$fields[0]][] = array(
            '日時' => $datetime,
            '応募内容' => $fields[0],
            'お名前' => $fields[1],
            '年齢' => $age,
            '勤務先' => $fields[3],
            '電話番号' => $fields[4],
            'メールアドレス' => $fields[5],
            '性別' => $fields[6],
            'その他・希望' => $fields[7]
        );
    }

    // その他の部分は

} // 各エントリごとに処理のループ終了

// 結果を出力
foreach ($ageGroups as $ageGroup => $contentByAge) {
    echo "<h2>{$ageGroup}</h2>";
    foreach ($contentByAge as $content => $entries) {
        echo "<h3>{$content}</h3>";
        foreach ($entries as $entry) {

            // スタイルを設定
            $genderStyle = $entry['性別'];
            $color = '';

            if($genderStyle === '男'){
                $color = 'red';
            }else{
                $color = 'black';
            }


            // データの表示
            echo "日時: {$entry['日時']}<br>";
            echo "応募内容: {$entry['応募内容']}<br>";
            echo "お名前: {$entry['お名前']}<br>";
            echo "年齢: {$entry['年齢']}<br>";
            echo "勤務先: {$entry['勤務先']}<br>";
            echo "電話番号: {$entry['電話番号']}<br>";
            echo "メールアドレス: {$entry['メールアドレス']}<br>";

         // 男性エントリを囲むHTMLタグの追加
            echo "<div style='color: {$color};'>";
            echo "性別: {$entry['性別']}<br>";
            echo "</div>";
            
            echo "その他・希望: {$entry['その他・希望']}<br>";
            echo "<br>";

        }
    }
}
?>
