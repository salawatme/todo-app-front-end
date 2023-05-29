<ul class="list-group list-group-horizontal rounded-0">
    <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
        <div class="form-check">
            <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked2" aria-label="..." <?php if (!is_null($task['finished_at'])) {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> />
        </div>
    </li>
    <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
        <p class="lead fw-normal mb-0"><?= $task['task'] ?></p>
    </li>
    <li class="list-group-item px-3 py-1 d-flex align-items-center border-0 bg-transparent">
        <div class="py-2 px-3 me-2 border border-warning rounded-3 d-flex align-items-center bg-light">
            <p class="small mb-0">
                <a href="#!" data-mdb-toggle="tooltip" title="Due on date">
                    <i class="fas fa-hourglass-half me-2 text-warning"></i>
                </a>
                <?= $task['deadline']['date'] . ' ' . $task['deadline']['time'] ?>
            </p>
        </div>
    </li>
    <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
        <div class="d-flex flex-row justify-content-end mb-1">
            <a href="index.php?action=edit&id=<?= $task['id'] ?>" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
            <a href="action.php?id=<?= $task['id'] ?>&action=finish" class="text-danger" data-mdb-toggle="tooltip" title="Finish todo"><i class="fas fa-check me-3"></i></a>
            <a href="action.php?id=<?= $task['id'] ?>&action=delete" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
        </div>
        <div class="text-end text-muted">
            <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
            </a>
        </div>
    </li>
</ul>