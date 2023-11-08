import $ from "jquery";
// import 'popper.js';
import "bootstrap";
import "datatables.net-buttons-bs4";
import "datatables.net-responsive-bs4";

const incomingTransactiontable = $("#incomingTransactiontable");
const route = incomingTransactiontable.data("route");
$(function () {
    $("#outcomingTransactiontable").DataTable({
        serverSide: true,
        ajax: route,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        columns: [
            {
                name: "created_at",
                data: "created_at",
            },
            {
                name: "code",
                data: "code",
            },
            {
                name: "user",
                data: "user",
            },
            {
                name: "amount",
                data: "amount",
                render: $.fn.dataTable.render.number(".", ",", 2, "Rp")
            },
            {
                name: "status",
                data: "status",
                render: function (data, type, row) {
                     if (data == "PENDING") {
                        return '<span class="badge badge-warning">Pending</span>';
                    } else if (data == "APPROVED") {
                        return '<span class="badge badge-success">Disetujui</span>';
                    }
                },
            },
            {
                name: "id",
                data: "id",
                render: function (data, type, row) {
                    // Customize the content of the 'id' column
                    return (
                        `
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item delete-button" data-id="` +
                        data +
                        `" href="#">Hapus</a>
                            </div>
                        </div>
                    `
                    );
                },
            },
        ],
    });
});
