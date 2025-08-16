$(function () {
  var _form = $("#main > .content > form");

  if (_form.length) {
    // Button erstellen
    var _btn = $('<button id="toggle_filter_area" type="button">Filter</button>');

    // prepend in das form
    _form.prepend(_btn);

    // Klick-Event
    _btn.on("click", function () {
      $(this).toggleClass("open");
      _form.toggleClass("open");
    });
  }
});