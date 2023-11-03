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
                    render: $.fn.dataTable.render.number(".", ",", 2, "Rp"),
                },
                {
                    data: "admin_income",
                    name: "admin_income",
                    render: $.fn.dataTable.render.number(".", ",", 2, "Rp"),
                },
                {
                    data: "id",
                    name: "id",
                    render: function (data) {
                        return `
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Aksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                      </div>`;
                    },
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
    const nasabahTable = $("#transaksi_table");
    const route = nasabahTable.data("route");
    // datatable for transaksi
    $("#transaksi_table")
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
                {
                    data: "created_at",
                    name: "created_at",
                },
                {
                    data: "code",
                    name: "code",
                },
                {
                    data: "type",
                    name: "type",
                    render: function (data, type, row) {
                        if (data === "STORE") {
                            return '<span class="badge badge-primary">Setoran Sampah</span>';
                        } else if (data == "WITHDRAW") {
                            return '<span class="badge badge-info">Penarikan Saldo</span>';
                        }
                    },
                },
                {
                    data: "amount",
                    name: "amount",
                    render: $.fn.dataTable.render.number(".", ",", 2, "Rp"),
                },
                {
                    data: "status",
                    name: "status",
                    render: function (data, type, row) {
                        if (data === "ACCEPTED") {
                            return '<span class="badge badge-dark">Sampah Diterima</span>';
                        } else if (data == "PENDING") {
                            return '<span class="badge badge-warning">Pending</span>';
                        } else if (data == "APPROVED") {
                            return '<span class="badge badge-success">Disetujui</span>';
                        }
                    },
                },
                {
                    data: "id",
                    name: "id",
                    render: function (data) {
                        return `
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Aksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                      </div>`;
                    },
                },
            ],
            responsive: true,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#dataTables_wrapper .col-md-6:eq(0)");
});
