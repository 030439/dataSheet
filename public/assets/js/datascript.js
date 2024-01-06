const ready = (fn) => {
    if (document.readyState !== "loading") {
        fn();
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
};

ready(() => {
    let table = new DataTable("#index", {
        language: {
            // url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/ru.json"
        },
        serverSide: true, // Enable server-side processing

        ajax: {
            url: "/file/data", // Adjust the route based on your Laravel route
            dataSrc: "data",
            data: function (params) {
                // Include additional parameters for server-side processing
                params.page = params.start / params.length + 1; // Calculate current page
                params.limit = params.length; // Number of records per page
                // Add any other parameters you need for server-side processing
                return params;
            },
        },

        paging: true,
        autoWidth: true,
        buttons: ["copyHtml5", "csvHtml5", "excelHtml5", "pdfHtml5"],
        responsive: true,
        destroy: true,
        deferRender: true,

        /* responsive */
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: (row) => {
                        let data = row.data();
                        return data[0];
                    },
                }),
                renderer: (api, rowIdx, columns) => {
                    let data = $.map(columns, (col, i) => {
                        return col.hidden
                            ? col.data
                                ? `
                                        <tr class="d-flex flex-column mb-3"
                                          data-dt-row="${col.rowIndex}"
                                          data-dt-column="${col.columnIndex}">
                                          <td class="d-flex w-100">
                                            <strong>${col.title}:</strong>
                                          </td>
                                          <td class="d-flex w-100">
                                            ${col.data}
                                          </td>
                                        </tr>
                                        `
                                : ""
                            : "";
                    }).join("");

                    return data
                        ? $('<table class="w-100"/>').append(data)
                        : false;
                },
            },
        },
        /* end responsive */

        /* columnDefs */
        columns: [
            { title: "Ticket_Id", data: "Ticket_Id" },
            { title: "Time", data: "Time" },
            { title: "Action", data: "Action" },
            { title: "Type", data: "Type" },
            { title: "Type_Detail", data: "Type_Detail" },
            { title: "Account", data: "Account" },
            { title: "Parent", data: "Parent" },
            { title: "Amount", data: "Amount" },
            { title: "Script", data: "Script" },
            { title: "Price", data: "Price" },
            { title: "Close_Price", data: "Close_Price" },
            { title: "Total_PnL", data: "Total_PnL" },
            { title: "SL", data: "SL" },
            { title: "TP", data: "TP" },
            { title: "Open_Position", data: "Open_Position" },
            { title: "Open_Date", data: "Open_Date" },
            { title: "Time_Diff", data: "Time_Diff" },
            { title: "Created_By", data: "Created_By" },
            { title: "Comment", data: "Comment" },
            { title: "IP", data: "IP" },
            { title: "Script_Description", data: "Script_Description" },
            { title: "Expiry_Date", data: "Expiry_Date" },
            { title: "Method", data: "Method" },
            { title: "Contract_Size", data: "Contract_Size" },
        ],
        /* end columnDefs */
    });
});
