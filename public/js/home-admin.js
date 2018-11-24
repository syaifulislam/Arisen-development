$(document).mouseup(function (e) {
    var container = $("#form-view-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function acc(){
  $('#form-view-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".view-img-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewDetail(){
  $('.view-img-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".form-ubah-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function ubah(){
  $('.form-ubah-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".form-add-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function addAdm(){
  $('.form-add-adm').fadeToggle();

}