function TasksPage() {
    this.construct();
}

TasksPage.prototype = {
    construct: function () {
        this.init_events();
    },
    init_events: function () {
        $('#create-task').click(function () {
            $('#modal-create-task').modal();
        });

        $('.edit-task').click(function () {
            $('#modal-edit-task').modal();
        });

        $('.delete-task').click(function () {
            $('#modal-delete-task').modal();
        });
    }
};

var $TasksPage;

$(document).ready(
    function () {
        $TasksPage = new TasksPage();
    }
);
