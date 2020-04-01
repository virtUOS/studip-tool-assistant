(function($) {
  $(document).on("click", "a.button[data-action]", function(event) {
    var button = event.target;
    var action = _.get(button, "dataset.action");
    if (!action) {
      return;
    }

    if (button.dataset.timer) {
      return;
    }

    button.classList.add("disabled");
    var img = getImage(action);
    button.prepend(img);

    var timer = setTimeout(function() {
      delete button.dataset.timer;
      img.remove();
      button.classList.remove("disabled");
    }, 1000);
    button.dataset.timer = timer;

    return false;
  });
})(jQuery);

function getImage(action) {
  var img = document.createElement("img");
  img.src =
    STUDIP.ABSOLUTE_URI_STUDIP +
    "/plugins.php/toolassistant/assistant/track/" +
    action +
    "?cid=" +
    STUDIP.URLHelper.parameters.cid;

  img.style.verticalAlign = "text-bottom";
  img.style.paddingRight = ".5em";

  return img;
}
