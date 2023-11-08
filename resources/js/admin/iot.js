import $, { data } from "jquery";
import "bootstrap";
import "datatables.net-buttons-bs4";
import "datatables.net-responsive-bs4";
import Swal from "sweetalert2";

$(function () {
    const iotTable = $("#iotTable");
    const route = iotTable.data("route");
    $("#iotTable").DataTable({
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
                name: "code",
                data: "code",
            },
            {
                name: "weight",
                data: "weight",
            },
            {
                name: "status",
                data: "status",
                render: function (data, type, row) {
                    if (data === "LINKED") {
                        return '<span class="badge badge-success">Terhubung ke Setoran Sampah</span>';
                    } else  {
                        return '<span class="badge badge-danger">Belum Terhubung ke Setoran Sampah</span>';
                    }
                },
            },
            {
                name: "created_at",
                data: "created_at",
            },
        ],
    });
});
