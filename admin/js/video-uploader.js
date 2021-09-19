// (function ($) {
//   "use strict";
//   $(document.body).on("click", ".upload-video-button", function () {
//     var send_attachment_bkp = wp.media.editor.send.attachment;
//     var button = $(this);
//     wp.media.editor.send.attachment = function (props, attachment) {
//       $(button).parent().prev().attr("src", attachment.url);
//       $(button).prev().val(attachment.id);
//       wp.media.editor.send.attachment = send_attachment_bkp;
//     };
//     wp.media.editor.open(button);
//     return false;
//   });

//   // The "Remove" button (remove the value from input type='hidden')

//   $(document.body).on("click", ".remove-video-button", function () {
//     var answer = confirm("Are you sure?");
//     if (answer == true) {
//       var src = $(this).parent().prev().attr("data-src");
//       $(this).parent().prev().attr("src", src);
//       $(this).prev().prev().val("");
//     }
//     return false;
//   });
// })(jQuery);

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector("#video-hidden-input")) {
    const addButton = document.querySelector(".upload-video-button");
    const video = document.querySelector("#video-tag");
    const removeButton = document.querySelector(".remove-video-button");
    const upload = document.querySelector("#video-hidden-input");
    const customUploader = wp.media({
      title: "Select a Video",
      button: {
        text: "Use this Video",
      },
      multiple: false,
    });

    addButton.addEventListener("click", () => {
      if (customUploader) {
        customUploader.open();
      }
    });

    customUploader.on("select", () => {
      const attachment = customUploader
        .state()
        .get("selection")
        .first()
        .toJSON();
      video.setAttribute("src", attachment.url);
      upload.setAttribute("value", attachment.id);
    });

    removeButton.addEventListener("click", () => {
      const answer = confirm("Are you sure?");
      if (answer === true) {
        video.removeAttribute("src");
        upload.removeAttribute("value");
      }
    });
  }
});
