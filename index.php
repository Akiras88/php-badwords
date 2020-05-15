<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php varible -->
    <?php
        $section= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt nisi dolor provident, ea, ratione deserunt alias ad dolorem esse saepe laborum debitis cupiditate reiciendis, repellat neque magnam molestias voluptates.';
        $bad_words= $_GET['word'];
        $repleced = str_replace($bad_words, '***', $section);
    ?>
    <p><?php echo $section; ?></p>
    <p>La lunghezza del paragrafo è: <?php echo strlen($section); ?> parole</p>
    <p>Prova replecement: <?php echo $repleced ?></p>
</body>
</html>