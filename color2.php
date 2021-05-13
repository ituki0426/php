<?php declare(strict_types=1); ?>
<body>
    <?php
    function escape($val)
    {
        return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    if(!isset($_POST['operation'])){
        echo 'この画面への直接アクセスは許可されません';
        return;
    }
    ?>
    <h2>お問い合わせを受け付けました。入力内容は以下の通りです</h2>
<table border="1">
   <tr>
       <th>お問い合わせを受け付けました。入力内容は以下の通りです</th>
       <td><?=escape($_POST['post-form'])?></td>
   </tr>
</table>
</body>