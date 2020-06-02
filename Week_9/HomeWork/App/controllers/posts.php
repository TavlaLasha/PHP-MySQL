<?php
    $table = 'posts';
    $topics = selectAll('topics');
    $posts = selectAll($table);
    $title = '';
    $body = '';
    $topic_id = '';
    $errors = array();

    if(isset($_POST['save-post'])){
        $errors = validatePost($_POST);
        if(count($errors)==0){
            unset($_POST['save-post'], $_POST['topic_id']);
            $_POST['image']='none';
            $_POST['user_id']=1;
            $_POST['published'] = isset($_POST['publish']) ? 1 : 0;

            $post_id = create($table, $_POST);
            $_SESSION['message'] = "Post created successfuly";
            $_SESSION['type'] = "Success";
            header('location: ../../admin/posts/index.php');
            exit();
        }else{
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
        }
        
    }
?>