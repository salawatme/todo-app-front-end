<?php
require_once './func.php';
if (isset($_GET['action']) and $_GET['action'] == 'edit') {
    $task = getTask($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>To Do app</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                        <div class="card-body py-4 px-4 px-md-5">

                            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                <i class="fas fa-check-square me-1"></i>
                                <u>My Todo-s</u>
                            </p>

                            <div class="pb-2">
                                <div class="card">
                                    <form action="task.php" method="post">
                                        <div class="card-body">
                                            <div class="d-flex flex-row align-items-center">
                                                <input name="task" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Add new..." value="<?php if (isset($_GET['id'])) echo $task['task']; ?>">
                                                <input name="date" type="date" class="form-control form-control-lg" id="exampleFormControlInput1" value="<?php if (isset($_GET['id'])) echo $task['deadline']['date']; ?>">
                                                <input name="time" type="time" class="form-control form-control-lg" id="exampleFormControlInput1" value="<?php if (isset($_GET['id'])) echo $task['deadline']['time']; ?>">
                                                <input name="id" type="hidden" value="<?php if (isset($_GET['id'])) echo $task['deadline']['time']; ?>">
                                                <div>
                                                    <button type="sumbit" class="btn btn-primary" name="<?php if (isset($_GET['id'])) echo 'edit';
                                                                                                        else echo 'add' ?>"><?php if (isset($_GET['id'])) echo 'edit';
                                                                                                                            else echo 'add' ?></button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                            <p class="small mb-0 me-2 text-muted">Filter</p>
                            <select class="select">
                                <option value="1">All</option>
                                <option value="2">Completed</option>
                                <option value="3">Active</option>
                                <option value="4">Has due date</option>
                            </select>
                            <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                            <select class="select">
                                <option value="1">Added date</option>
                                <option value="2">Due date</option>
                            </select>
                            <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i class="fas fa-sort-amount-down-alt ms-2"></i></a>
                        </div>
                        <?php
                        foreach ($tasks as $task) {
                            include 'inc/task.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>