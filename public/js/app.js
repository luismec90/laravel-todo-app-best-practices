function Task() {
}

Task.prototype = {
    message: function () {
        alert('asdf');
    }
};

var $Task;

$(document).ready(
    function () {
        $Task = new Task();

        $Task.message();
    }
);

//# sourceMappingURL=app.js.map
