$(document).ready(function () {
    $('#tablaSort').DataTable({
        "aaSorting": [],
        columnDefs: [{
                orderable: false,
                targets: columnasSinSort
            }],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });
    $('.dataTables_length').addClass('bs-select');
});