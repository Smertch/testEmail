var table;

$(document).ready(function () {
    var testEmail = $('#emailTable');
    // not display error messages for DataTable
    $.fn.dataTable.ext.errMode = 'none';
    table = testEmail.DataTable({
        ajax: "/getEmail",
        rowId: "id",
        // VISUAL OPTIONS
        lengthMenu: [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "paging": true,
        "info": true,
        "processing": true,
        "serverSide": true,
        "searching": true,


        stateDuration: 60 * 60 * 24 * 30,

        // COLUMNS DATA

        columnDefs: [
            {
                targets: [ 1, 2, 6],
                orderSequence: ['null', 'desc', 'asc']
            },
            {
                targets: [0],
                orderable: false
            },
            {
                targets: [0, 1, 2, 3, 4, 5, 6],
                className: 'dt-body-center'
            }
        ],
        columns: [
            {
                title: 'ID',
                data: 'id'
            },
            {
                title: 'User Name',
                data: 'userName'
            },
            {
                title: 'Email',
                data: 'email'
            },
            {
                title: 'Homepage',
                data: 'homepage'
            },
            {
                title: 'Message',
                data: 'msg'
            },
            {
                title: 'Ip',
                data: 'ip'
            },
            {
                title: 'Browser',
                data: 'browser'
            },
            {
                title: 'Created at',
                data: 'created_at'
            }
        ]
    });
});
