<?php 
    $message = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $subject = htmlspecialchars(trim($_POST['subject']));
        $body = htmlspecialchars(trim($_POST['body']));
        $to = 'nklnkmariya2012@gmail.com';
    
        $headers = "From: admin@center.ogu\r\n";
        $headers .= "Reply-To: admin@center.ogu\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $message = "Сообщение доставлено";
        } else {
            $message = "Ошибка";
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section>
    <h1>Обратная связь</h1>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br>
      <input name='subject' type='text' size="50">
      <br>
      <label>Содержание: </label>
      <br>
      <textarea name='body' cols="50" rows="10"></textarea>
      <br>
      <br>
      <input type='submit' value='Отправить'>
      <br>
      <span><?php echo $message; ?></span>
    </form>
    <!-- Область основного контента -->
  </section>
</body>

</html>