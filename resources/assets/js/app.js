function Task() {
}

Task.prototype = {
    message: function () {
    }
};

var $Task;

$(document).ready(
    function () {
        $Task = new Task();

        $Task.message();
    }
);
