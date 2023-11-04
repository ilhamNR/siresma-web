import $ from "jquery";
// import 'popper.js';
import "bootstrap";
import "datatables.net-buttons-bs4";
import "datatables.net-responsive-bs4";

const trashStoretable = $("#trashStoretable");
const route = trashStoretable.data("route");
$(function () {
    $("#trashStoretable").DataTable({
        serverSide: true,
        ajax: route,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
        responsive: true,
        columns:[
            {
                name: 'store_date',
                data: 'store_date'
            },
            {
                name: 'name',
                data: 'name'
            },
            {
                name: 'trash_bank',
                data: 'trash_bank'
            },
            {
                name: 'category',
                data: 'category'
            },
            {
                name: 'weight',
                data: 'weight',
            },
            {
                name: 'code',
                data: 'code'
            },
            {
                name: 'admin_income',
                data: 'admin_income',
                render: $.fn.dataTable.render.number(".", ",", 2, "Rp")
            },
            {
                name: 'user_income',
                data: 'user_income',
                render: $.fn.dataTable.render.number(".", ",", 2, "Rp")
            },
            {
                name: 'id',
                data: 'id',
                render: function (data, type, row) {
                    // Customize the content of the 'id' column
                    return `
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item delete-button" data-id="`+data+`" href="#">Hapus</a>
                            </div>
                        </div>
                    `;
                }
            },
        ]
    });
});
