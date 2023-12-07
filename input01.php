<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Document</title>
</head>
<body>

<div id="formWrap">
  <div class="form_inner">

    <h1 class="h1">応募フォーム</h1>

          <form action="write01.php" method="post">
            <table class="formTable">
              <tr>
                <th>内　容</th>
                <td><select name="応募内容" required>
                    <!-- requiredで必須項目として扱える -->
                    <option value="">選択してください</option>
                    <option value="平日">【平日】短期アルバイト</option>
                    <option value="休日">【土日】短期アルバイト</option>
                    <option value="正社員">正社員</option>
                  </select> <span class="form_require">※必須</span></td>
              </tr>
              <tr>
                <th>お名前</th>
                <td><input size="70" type="text" name="お名前" required /> <span class="form_require">※必須</span></td>
              </tr>
              <tr>
                <th>年齢</th>
                <td><input size="70" type="text" name="年齢" /></td>
              </tr>
              <tr>
                <th>勤務先</th>
                <td><input size="70" type="text" name="勤務先" /></td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td><input size="70" type="text" name="電話番号" />（半角）</td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td><input size="70" type="text" name="Email" required />（半角） <span class="form_require">※必須</span></td>
              </tr>
              <tr>
                <th>性別</th>
                <td><input type="radio" name="性別" value="男" /> 男　
                  <input type="radio" name="性別" value="女" /> 女 </td>
              </tr>
              <tr>
                <th>その他・希望<br /></th>
                <td><textarea name="お問い合わせ内容" cols="70" rows="10"></textarea></td>
              </tr>
            </table>
            <p align="center">
                <!-- submitで送信可能に、resetでリセットされる -->
              <input type="submit" value="　 応募 　" />　<input type="reset" value="リセット" />
            </p>
          </form>
  </div>
</div>
    
</body>
</html>