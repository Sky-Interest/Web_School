<?php include 'inc/header.php'; ?>



<main>
    <div class="container d-flex flex-column align-items-center">
        <?php
        $reviews = [
            [
                'id' => 1,
                'name' => '张三',
                'course_name' => 'test_course',
                'context' => 'test_context',
                'date' => 'test_date',
            ],
            [
                'id' => 2,
                'name' => '张三',
                'course_name' => 'test_course',
                'context' => 'test_context',
                'date' => 'test_date',
            ],
            [
                'id' => 3,
                'name' => '张三',
                'course_name' => 'test_course',
                'context' => 'test_context',
                'date' => 'test_date',
            ]
        ]
        ?>

        <?php if (empty($reviews)) : ?>
            <p class="lead mt3">目前没有课程评价！</p>
        <?php endif; ?>

        <h2>课程评价</h2>
        <?php foreach($reviews as $review):?>
        <div class="card my-3" style="width: 18rem;">
            <div class="card-body">
                这是一门非常实用的课程，深入浅出地介绍了编程基础。老师讲解清晰，配套资料丰富，非常推荐给编程新手。
            </div>
        </div>
        <?php endforeach; ?>
        
    </div>
</main>

<?php include 'inc/footer.php'; ?>