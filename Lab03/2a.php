<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Text+button</title>
</head>
<body>
  <form action="" method="get">
    <textarea name="text" placeholder= "Ваш текст"></textarea>
	<br>
    <button type="submit" name="submit">Посчитать</button>
  </form>
  
  <?php
    if (!empty($_REQUEST['text']))
{
    $str = $_REQUEST['text'];
    $strLen = strlen($str);
    $wordsCount = count(explode(' ', $str));
    $spaceCount = $wordsCount - 1;
    echo 'В тексте '.$wordsCount.' слов, '.$strLen.' символов.';
}
  ?>
</body>
</html>