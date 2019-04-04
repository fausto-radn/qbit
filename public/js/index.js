$(document).ready( function () {
  $('.datatable').DataTable({
    "language":{
      "url": "../assets/DataTables/language/spanish.json"
    }
  });
  $('.form-delete').submit(function(){
    var form = this;
    event.preventDefault();
    swal({
      title: "¿Estás seguro?",
      text: "Esté elemento se eliminará.",
      icon: "warning",
      buttons: ["No, Cancelar", "Sí, Eliminar"],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        form.submit();
      }
      //else {
      //  swal("El elemento no se eliminó.");
      //}
    });
  });
});
