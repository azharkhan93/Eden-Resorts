/******/ (() => { // webpackBootstrap
/*!*****************************************************************!*\
  !*** ./platform/plugins/hotel/resources/assets/js/utilities.js ***!
  \*****************************************************************/
$(document).ready(function () {
  if ($.fn.datepicker) {
    $('#date_of_birth').datepicker({
      format: 'yyyy-mm-dd',
      orientation: 'bottom'
    });
  }
  $('#avatar').on('change', function (event) {
    var input = event.currentTarget;
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('.userpic-avatar').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  });
  $(document).on('click', '.btn-trigger-delete-address', function (event) {
    event.preventDefault();
    $('.btn-confirm-delete').data('url', $(this).data('url'));
    $('#confirm-delete-modal').modal('show');
  });
  $(document).on('click', '.btn-confirm-delete', function (event) {
    event.preventDefault();
    var $current = $(this);
    $current.addClass('button-loading');
    $.ajax({
      url: $current.data('url'),
      type: 'GET',
      success: function success(data) {
        $current.closest('.modal').modal('hide');
        $current.removeClass('button-loading');
        if (data.error) {
          window.showAlert('alert-danger', data.message);
        } else {
          window.showAlert('alert-success', data.message);
          $('.btn-trigger-delete-address[data-url="' + $current.data('url') + '"]').closest('.dashboard-address-item').remove();
        }
      },
      error: function error(data) {
        handleError(data);
        $current.removeClass('button-loading');
      }
    });
  });
});
/******/ })()
;