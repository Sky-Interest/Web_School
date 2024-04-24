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
                <!-- 引用context数据 -->
                <?php echo $review ['context'];?>
            </div>
        </div>
        <?php endforeach; ?>
        
    </div>
</main>

<?php include 'inc/footer.php'; ?>