/**
 * Created by smertch on 23.09.17.
 */
var table;

$(document).ready(function () {
    var testEmail = $('#testEmail');
    // not display error messages for DataTable
    $.fn.dataTable.ext.errMode = 'none';
    table = testEmail.DataTable({
        ajax:"/app/Http/Controllers/PostsController/show",
        rowId: "id",
        // VISUAL OPTIONS
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "paging": true,
        "info": true,
        "processing": true,
        "searching": true,
        sDom: '<"top"lip>rt<"bottom"p><"clear">',

        language: {
            processing: "<img src='/assets/image/wait_icon/ie_loader.gif'>"
        },
        // SAVE TABLE CONDITION OPTION
        stateSave: true,

        stateDuration: 60 * 60 * 24 * 30,

        stateSaveParams: function (settings, data) {
            data.search.search = '';

            //in this array specify column indices search for which you need to save if page reloaded
            // var columnsForSave = [7];

            $.each(data.columns, function (index, value) {
                if ($.inArray(index, columnsForSave) != -1) {
                    return;
                }
                value.search.search = '';
            });
        },
        // COLUMNS DATA
        sorting: [
            [0, 3, 'null']
        ],
        columnDefs: [
            {
                targets: [0, 3],
                orderSequence: ['null', 'desc', 'asc']
            },
            {
                targets: [1, 2, 3],
                orderable: false
            },
            {
                targets: [0, 1, 2, 3],
                className: 'dt-body-center'
            }
        ],
        columns: [
            {
                title: 'ID',
                //data: handleId,

            },
            {
                title: 'Name',
                //data: handleName
            },
            {
                title: 'Processing status',
               // data: handleStatus
            },
            {
                title: 'List',
               // data: handleListItems
            }
        ]
    });
});
