<?php include 'inc/header.php'; ?>

<?php
$name = $email = $courseName = $content = '';
$nameErr = $emailErr = $courseNameErr = $contentErr = '';

if (isset($_POST['submit'])) {

    if (empty($_POST['name'])) {
        $nameErr = "姓名为必填项！";
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['email'])) {
        $emailErr = "邮箱为必填项！";
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

}
// echo $nameErr;
// echo $name;


?>

<main>
    <div class="container d-flex flex-column align-items-center">
        <img src="./img/1335755.jpeg" class="w-25 mb-3" alt="">
        <h2>课程评价</h2>
        <p class="lead text-center">为你所上的课程留下评价</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" methon="POST" class="mt-4 w-75">
            <div class="mb-3">
                <label for="name" class="form-label">你的姓名</label>
                <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="请输入你的姓名">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">你的邮箱</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="请输入你的邮箱">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">课程名称</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="请输入课程名称">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">评价内容</label>
                <textarea class="form-control" id="body" name="body" rows="4" placeholder="请输入你的评价"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" value="提交评价" class="btn btn-dark w-100">
            </div>
        </form>
    </div>
</main>
<?php include 'inc/footer.php'; ?>