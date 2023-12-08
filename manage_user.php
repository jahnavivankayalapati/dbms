<?php
include('db_connect.php');

// Initialize $meta array to avoid undefined variable notice
$meta = array();

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $meta = $row;
    }

    $stmt->close();
}
?>
<style>
.btn-custom {
    background-color: black;
    color: white;
    /* Add any additional styles as needed */
}
</style>
<div class="container-fluid">
    <form action="" id="manage-user">
        <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : ''; ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? htmlspecialchars($meta['name']) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? htmlspecialchars($meta['username']) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="<?php echo isset($meta['password']) ? htmlspecialchars($meta['password']) : ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary btn-custom">Save User</button>
    </form>
</div>

<script>
    $('#manage-user').submit(function (e) {
        e.preventDefault();
        start_load();

        $.ajax({
            url: 'ajax.php?action=save_user',
            method: 'POST',
            data: $(this).serialize(),
            success: function (resp) {
                if (resp == 1) {
                    alert_toast("Data successfully saved", 'success');
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }
            },
            complete: function () {
                end_load();
            }
        });
    });
</script>
 