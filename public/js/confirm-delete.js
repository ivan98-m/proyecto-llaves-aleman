$('.show_confirm').click(function (event) {
  var form = $(this).closest("form");
  event.preventDefault();
  swal({
    title: `¿Está seguro que desea eliminar este registro?`,
    text: "Una vez eliminado, ¡no podrá recuperar sus datos!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        form.submit();
      }
    });
});

