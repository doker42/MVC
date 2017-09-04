<h1>User id <?=$view_vars['id']?></h1>
Login: <?=$view_vars['user']['login']?>
<br />
Email: <?=$view_vars['user']['email']?>
<br />

<table style="border: solid thin red">
  <tr><th>Id</th><th>Title</th><th>User</th></tr>
  <?php foreach($view_vars['pages'] as $id => $page):?>
    <tr>
      <td><?=$id?></td>
      <td><a href="index.php?controller=pages&action=view&q=<?=$id?>"><?=$page['title']?></a></td>
      <td><?=$page['user_id']?></td>
    </tr>
  <?php endforeach;?>
</table>

<a href="index.php?controller=users&action=index">Back to list</a>

