import $ from "jquery";
import "bootstrap";
import "datatables.net-buttons-bs4";
import "datatables.net-responsive-bs4";

const tabLinks = document.querySelectorAll(".nav-link");
tabLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent the default link behavior

        // Remove the 'active' class from all tab links
        tabLinks.forEach((tabLink) => {
            tabLink.classList.remove("active");
        });

        const targetTabId = e.target.getAttribute("href"); // Get the target tab ID

        // Remove the 'active' class from all tab panes
        document.querySelectorAll(".tab-pane").forEach((tabPane) => {
            tabPane.classList.remove("active");
        });

        // Add the 'active' class to the clicked tab link and the target tab pane
        e.target.classList.add("active");
        const targetTabPane = document.querySelector(targetTabId);
        console.log(targetTabId);
        targetTabPane.classList.add("active");
    });
});
$(function () {
    // datatable for setoran
    const nasabahTable = $("#setoran_table");
    const route = nasabahTable.data("route");
    $("#setoran_table")
        .DataTable({
            serverSide: true,
            ajax: route,
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            columns: [
                // { // mengambil & menampilkan kolom sesuai tabel database
                //     data: 'id',
                //     name: 'id'
                // },
                {
                    data: "created_at",
                    name: "created_at",
                },
                {
                    data: "category",
                    name: "category",
                },
                {
                    data: "weight",
                    name: "weight",
                },
                {
                    data: "code",
                    name: "code",
                },
                {
                    data: "user_income",
                    name: "user_income",
                },
                {
                    data: "admin_income",
                    name: "admin_income",
                },
                {
                    data: "id",
                    name: "id",
                    // render: '<div class="dropdown"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown button </button> <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div> </div>',
                },
            ],
            columnDefs: [
                {
                    targets: -1,
                    searchable: false,
                    render: function(data) {
                        return `
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Aksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>`;
                    }
                },
            ],
            responsive: true,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#dataTables_wrapper .col-md-6:eq(0)");
});

$(function () {
    // datatable for transaksi
    $("#transaksi_table")
        .DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#dataTables_wrapper .col-md-6:eq(0)");
});
