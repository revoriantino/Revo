<div ng-controller = "topikController">
    <div class="col-md-12">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Daftar Topik
                    </h5>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Topik</th>
                            <th>Urutan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat = "item in datas">
                            <td>{{$index+1}}</td>
                            <td>{{item.tahapan}}</td>
                            <td>{{item.urutan}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>