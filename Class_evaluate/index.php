<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>课程评价</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">课程评价中心</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="切换导航">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">首页</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./reviews.html">评价</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">关于我们</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container d-flex flex-column align-items-center">
            <img src="/course-review-app/img/logo.png" class="w-25 mb-3" alt="">
            <h2>课程评价</h2>
            <p class="lead text-center">为你所上的课程留下评价</p>
            <form action="" class="mt-4 w-75">
                <div class="mb-3">
                    <label for="name" class="form-label">你的姓名</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="请输入你的姓名">
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

    <footer class="text-center mt-5">
        版权所有 &copy; 2024
    </footer>

    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>