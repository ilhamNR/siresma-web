import $ from "jquery";
// import 'popper.js';
import "bootstrap";
import "datatables.net-buttons-bs4";
import "datatables.net-responsive-bs4";

const trashCategorytable = $("#trashCategorytable");
const route = trashCategorytable.data("route");
$("#trashCategorytable").DataTable({
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
            name: "category_name",
            data: "category_name",
        },
        {
            name: "unit",
            data: "unit",
            searchable: 'false'
        },
        {
            name: "price",
            data: "price",
            searchable: 'false',
            render: $.fn.dataTable.render.number(".", ",", 2, "Rp")
        },
        {
            name: "id",
            data: "id",
            render: function (data, type, row) {
                // Customize the content of the 'id' column
                return `
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item delete-button" data-id="`+data+`" href="#">Update Harga</a>
                            <a class="dropdown-item delete-button" data-id="`+data+`" href="#">Hapus</a>
                        </div>
                    </div>
                `;
            }
        },
    ],
});
