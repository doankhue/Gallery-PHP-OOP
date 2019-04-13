<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <div class="content-container">
                <?php  
                    // $all_users = User::find_all_users();
                    // while($row = mysqli_fetch_array($all_users)){
                    //     echo $row['username'] . "<br>";
                    // }
                    $found_user = User::find_user_by_id(1);
                    // echo $found_user->username;
                    // $user = User::instantation($found_user);
                    // echo '<pre>'; print_r($user); echo '</pre>';
                    // echo $user['username'];
                    // $user_found = mysqli_fetch_array($result);
                    // var_dump($user_found);
                    // $all_users = User::find_all_users();
                    // foreach ($all_users as $key => $user) {
                    //     echo $user->username . "<br>";
                    // }
                ?>
            </div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>