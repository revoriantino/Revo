<div ng-controller = "topikController">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahapan</th>
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