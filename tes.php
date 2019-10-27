<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="assets/js/jquery.datatables.js"></script>

<script>

    $(document).ready(function() {
        $('#parts').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "https://spacq-baa58.firebaseio.com/.json", // URL file untuk proses select datanya
                "type": "GET"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "kanban_no" }, // Tampilkan nis
                { "data": "part_name" },  // Tampilkan nama
                { "data": "part_no" }, // Tampilkan telepon
                { "data": "qty" }, // Tampilkan alamat
                { "data": "supplier" }, // Tampilkan alamat
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        // var html  = "<a href=''>EDIT</a> | "
                        // html += "<a href=''>DELETE</a>"
                        return html
                    }
                },
            ],
        });
    });
    </script>

    <table class="parts" id="parts">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Password</th>
            <th>Password</th>
        </tr>
    </table>