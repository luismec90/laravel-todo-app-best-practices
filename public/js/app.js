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
    }
};

var $TasksPage;

$(document).ready(
    function () {
        $TasksPage = new TasksPage();
    }
);

//# sourceMappingURL=app.js.map
