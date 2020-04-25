<!DOCTYPE html>
</html>
    <head>
        <title>Koli</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                <h1>Latihan</h1>
                </div>

                <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Ujian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/ujian/create" METHOD="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor</label>
                        <input type="id" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nomor">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mata Kuliah</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mata Kuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dosen</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dosen">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah soal</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah soal">
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime">
                        <script type="text/javascript">
                        $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
                    </script> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Batas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                    </div>
                    </div>
                </div>
                </div>
                </div>
           
            <table class="table table-hover">
                <tr>
                    <th>NID</th>
                    <th>Nama Mata kuliah</th>
                    <th>Dosen</th>
                    <th>Jumlah Soal</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Batas</th>
                </tr>
                @foreach($data_ujian as $ujian)
                <tr>
                    <td>{{$ujian['id']}}</td>
                    <td>{{$ujian['nama_MK']}}</td>
                    <td>{{$ujian['dosen']}}</td>
                    <td>{{$ujian['jumlah_soal']}}</td>
                    <td>{{$ujian['keterangan']}}</td>
                    <td>{{$ujian['created_at']}}</td>
                    <td>{{$ujian['update_at']}}</td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
