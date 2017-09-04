<table style="border: solid thin green">
  <tr><th>Id</th><th>Login</th><th>Email</th></tr>
  <?php foreach($view_vars['users'] as $id => $user):?>
    <tr>
      <td><?=$id?></td>
      <td><a href="index.php?controller=users&action=view&q=<?=$id?>"><?=$user['login']?></a></td>
      <td><?=$user['email']?></td>
    </tr>
  <?php endforeach;?>
</table>

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