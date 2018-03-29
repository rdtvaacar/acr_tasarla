@extends('acr_tasarla.tasarla')
@section('header')
    <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
@stop
@section('acr_tasarla')
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                KENDİN TASARLA
                <a class="btn btn-primary btn-sm" style="float: right;" href="/acr/tasarla/yeni">YENİ</a></div>
            <div class="box-body">
                <table class="table" id="data_table">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>İşlem</th>
                        <th>İsim</th>
                        <th>Oluşturma</th>
                        <th>Son Güncelleme</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasarlas as $tasarla)
                        <tr id="{{$tasarla->id}}">
                            <td>{{$tasarla->id}}</td>
                            <td>
                                <a style="font-size: 14pt; margin-right: 15px;" href="/acr/tasarla/yeni?id={{$tasarla->id}}" class="glyphicon  glyphicon-edit"></a>
                                <span onclick="sil({{$tasarla->id}})" style="font-size: 14pt; cursor: pointer;" class="glyphicon glyphicon-trash"></span>
                            </td>
                            <td><input name="sira_{{$tasarla->id}}" id="sira_{{$tasarla->id}}" value="{{$tasarla->sira}}"><span onclick="sira_update({{$tasarla->id}})" style="cursor:pointer; "
                                                                                                                       class="glyphicon glyphicon-floppy-disk btn btn-success btn-sm"></span></td>
                            <td>{{$tasarla->name}}</td>
                            <td>{{$tasarla->created_at}}</td>
                            <td>{{$tasarla->updated_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('footer')
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#data_table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "language": {
                "sProcessing": "İşleniyor...",
                "lengthMenu": "Sayfada _MENU_ satır gösteriliyor",
                "zeroRecords": "Gösterilecek sonuç yok.",
                "info": "Toplam _PAGES_ sayfadan _PAGE_. sayfa gösteriliyor",
                "infoEmpty": "Gösterilecek öğe yok",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Arama yap",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sPrevious": "Önceki",
                    "sNext": "Sonraki",
                    "sLast": "Son"
                }

            }
        });

        function sil(id) {
            if (confirm('Silmek istediğinizden eminmisiniz?')) {
                $.ajax({
                    type: 'post',
                    url: '/acr/tasarla/delete',
                    data: 'id=' + id + '&_token={{csrf_token()}}',
                    success: function () {
                        $('#' + id).hide(400);
                    }
                });

            }
        }

        function sira_update(id) {
            var sira = $('#sira_' + id).val();
            $.ajax({
                type: 'post',
                url: '/acr/tasarla/sira/update',
                data: 'id=' + id + '&sira=' + sira,
                success: function () {

                }
            });
        }


    </script>
@stop