<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newId = $_POST['id'];
    $newPassword = $_POST['password'];

    include 'users.php';

    // მომხმარებლის დამატება
    $users[] = ['id' => $newId, 'password' => $newPassword];

    // ფაილში შენახვა
    $code = "<?php\n\$users = " . var_export($users, true) . ";\n?>";
    file_put_contents('users.php', $code);

    header("Location: index.php?signup=success");
    exit;
}
?>
