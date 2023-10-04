import $ from "jquery";
// import 'popper.js';
import 'bootstrap';
import 'datatables.net-buttons-bs4';
import 'datatables.net-responsive-bs4';
import Swal from 'sweetalert2'
import DataTable from 'datatables.net';

$(function() {
    const nasabahTable = $('#nasabahTable');
    const route = nasabahTable.data('route');
    $('#nasabahTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: route, // memanggil route yang menampilkan data json
        columns: [
            // { // mengambil & menampilkan kolom sesuai tabel database
            //     data: 'id',
            //     name: 'id'
            // },
            {
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'phone',
                name: 'phone'
            },
            {
                data: 'trash_bank',
                name: 'trash_bank'
            },
            {
                data: 'is_verified',
                name: 'is_verified',
                render: function (data, type, row) {
                    if (data === 1) {
                        return '<span class="badge badge-success">Sudah Terverifikasi</span>';
                    } else if (data === 0) {
                        return '<span class="badge badge-danger">Belum Terverifikasi</span>';
                    } else {
                        return 'Unknown'; // Handle other cases if needed
                    }
                }
            },
            {
                data: 'id',
                name: 'id',
                render: function (data, type, row) {
                    // Customize the content of the 'id' column
                    return `
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Lihat Profil</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item delete-button" data-id="`+data+`" href="#">Hapus</a>
                            </div>
                        </div>
                    `;
                }
            }
        ],
        responsive: true, "lengthChange": false, "autoWidth": false,
        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#nasabahTable_wrapper .col-md-6:eq(0)');
});

 // Event delegation for the "Hapus" button
 $('#nasabahTable').on('click', '.delete-button', function () {
    // Get the value from the data-id attribute
    const id = $(this).data('id');
    Swal.fire({
        title: 'Hapus data',
        text: 'Apakah Anda yakin ingin menghapus data dengan ID ' + id + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })

});
