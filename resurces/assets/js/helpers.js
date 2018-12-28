function removeInputIcons(element) {

          $(element).checkboxradio({
            icon: false
          });

};

function alertBox(type, message) {

    var html = '';
    html += '<div class="text-center alert alert-' + type + ' fade show" role="alert">';
    html += message;
    html += '</div>';
    
    return html;

}